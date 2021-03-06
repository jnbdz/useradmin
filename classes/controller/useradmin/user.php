<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * User controller: user administration, also user accounts/profiles.
 *
 * @authors 
 * - Mikito Takada
 * - Gabriel Reitz Giannattasio
 * - Jean-Nicolas Boulay Desjardins
 * @package default
 * @version 1.0
 */

class Controller_Useradmin_User extends Controller_App {

   /**
    * @var string Filename of the template file.
    */
   public $template = 'template/useradmin';

   /**
    * Controls access for the whole controller, if not set to FALSE we will only allow user roles specified.
    *
    * See Controller_App for how this implemented.
    *
    * Can be set to a string or an array, for example array('login', 'admin') or 'login'
    */
   public $auth_required = FALSE;
   
   /**
    * ReCaptcha variables that are all private. So that no other code as access to the ReCaptcha keys.
    */
   private $recaptcha_config = NULL;
   private $recaptcha_error = NULL;

   /** Controls access for separate actions
    *
    *  See Controller_App for how this implemented.
    *
    *  Examples:
    * 'adminpanel' => 'admin' will only allow users with the role admin to access action_adminpanel
    * 'moderatorpanel' => array('login', 'moderator') will only allow users with the roles login and moderator to access action_moderatorpanel
    */
   public $secure_actions = array(
      // user actions
      'index' => 'login',
      'profile' => 'login',
      'profile_edit' => 'login',
      'unregister' => 'login',
      'change_password' => 'login',
      // the others are public (forgot, login, register, reset, noaccess)
      // logout is also public to avoid confusion (e.g. easier to specify and test post-logout page)
      );

    /**
     * Load ReCaptcha configurations and vendor code.
     */
    public function loadReCaptcha() {
    	if(Kohana::config('useradmin')->captcha) {
        	include Kohana::find_file('vendor', 'recaptcha/recaptchalib');
        	$this->recaptcha_config = Kohana::config('recaptcha');
        	$this->recaptcha_error = null;
      }
    }

   // USER SELF-MANAGEMENT

   /**
    * View: Redirect admins to admin index, users to user profile.
    */
   public function action_index() {
      // if the user has the admin role, redirect to admin_user controller
      if(Auth::instance()->logged_in('admin')) {
         $this->request->redirect('admin_user/index');
      } else {
         $this->request->redirect('user/action/profile');
      }
   }

   /**
    * View: Access not allowed.
    */
   public function action_noaccess() {
      // set the template title (see Controller_App for implementation)
      $this->template->title = __('Access not allowed');
      $view = $this->template->content = View::factory('user/noaccess');
   }

   /**
    * View: User account information
    */
   public function action_profile() {
      // set the template title (see Controller_App for implementation)
      $this->template->title = __('User profile');
      if ( Auth::instance()->logged_in() == false ){
         // No user is currently logged in
         $this->request->redirect('user/action/login');
      }
      $view = $this->template->content = View::factory('user/profile');
      // retrieve the current user and set the view variable accordingly
      $view->set('user', Auth::instance()->get_user() );
   }

   /**
    * View: Profile editor
    */
   public function action_profile_edit() {
      // Load reCaptcha if needed
      $this->loadReCaptcha();
      // set the template title (see Controller_App for implementation)
      $this->template->title = __('Edit user profile');
      $user = Auth::instance()->get_user(); 
      $username = $user->username;
      // load the content from view
      $view = View::factory('user/profile_edit');

      // save the data
      if ( !empty($_POST) )
      {
         if(empty($_POST['password']) || empty($_POST['password_confirm']))
	 {
            // force unsetting the password! Otherwise Kohana3 will automatically hash the empty string - preventing logins
            unset($_POST['password'], $_POST['password_confirm']);
         }

         try {

		$model_user = new Model_User();

		if(Auth::instance()->get_user()->email === $_POST['email'])
		{
			$send_email = FALSE;
			$_POST['email_code'] = 'true';
		}
		else
		{
			$send_email = TRUE;
			$_POST['email_code'] = $model_user->generate_uuid1();
		}

		$model_user->update_user($_POST);

		if($send_email)
		{
			$this->send_confirmation_email($_POST);
		}

		// message: save success
            Message::add('success', __('Values saved.'));
            // redirect and exit
            $this->request->redirect('user/action/profile');
		//throw new Exception($result);
            return;
         } catch (Validation_Exception $e) {
            // Get errors for display in view
            // Note how the first param is the path to the message file (e.g. /messages/register.php)
            Message::add('error', __('Error: Values could not be saved.'));
            $errors = $e->errors('register');
            $errors = array_merge($errors, (isset($errors['_external']) ? $errors['_external'] : array()));
            $view->set('errors', $errors);
            // Pass on the old form values
            $user->password = '';
            $view->set('data', $user);
         }
      } else {
         // load the information for viewing
         $view->set('data', (array) $user);
      }
      // retrieve roles into array
     // $roles = array();
      /*foreach($user->roles->find_all() as $role) {
          $roles[$role->name] = $role->description;
       }*/
     // $view->set('user_roles', $roles);

	if(Kohana::config('useradmin')->captcha)
     	{
                $view->set('captcha_enabled', true);
                $view->set('recaptcha_html', recaptcha_get_html($this->recaptcha_config['publickey'], $this->recaptcha_error, $this->recaptcha_config['use_ssl']));
     	}
 
      $this->template->content = $view;

   }

   /**
    * Register a new user.
    */
   public function action_register() {
      // Load reCaptcha if needed
      $this->loadReCaptcha();
      // set the template title (see Controller_App for implementation)
      $this->template->title = __('User registration');
      // If user already signed-in
      if(Auth::instance()->logged_in() != false){
         // redirect to the user account
         $this->request->redirect('user/action/profile');
      }
      // Load the view
      $view = View::factory('user/register');
      // If there is a post and $_POST is not empty
      if($_POST)
      {
		// optional checks (e.g. reCaptcha or some other additional check)
		$optional_checks = true;
		// if configured to use captcha, check the reCaptcha result
		if(Kohana::config('useradmin')->captcha)
		{
			$recaptcha_resp = recaptcha_check_answer($this->recaptcha_config['privatekey'],
						$_SERVER['REMOTE_ADDR'],
						$_POST['recaptcha_challenge_field'],
						$_POST['recaptcha_response_field']);

			if(!$recaptcha_resp->is_valid)
			{
				$optional_checks = false;
				$this->recaptcha_error = $recaptcha_resp->error;
				Message::add('error', __('The captcha text is incorrect, please try again.'));
			}
		}

		$_POST['email_code'] = Auth::instance()->hash(date('YmdHis', time()));

		$user = Model::factory('user');
		$post = $user->create_user($_POST, $optional_checks);

		if($post->valid && $optional_checks)
		{
			$this->send_confirmation_email($post);
			// Send Welcome Email
			// sign the user in
			Auth::instance()->login($post['username'], $post['password']);
			// redirect to the user account
			$this->request->redirect('user/action/profile');
		}
		else
		{
			// Validation failed, collect the errors
			$errors = $post->errors('register/user');
			// Move external errors to main array, for post helper compatibility
			$errors = array_merge($errors, (isset($errors['_external']) ? $errors['_external'] : array()));
			$view->set('errors', $errors);
			// Pass on the old form values
			$_POST['password'] = $_POST['password_confirm'] = '';
			$view->set('defaults', $_POST);
		}
	} // End of if $_POST

	if(Kohana::config('useradmin')->activation_code)
	{
		$view->set('activation_code_enabled', true);
	}
	if(Kohana::config('useradmin')->captcha)
	{
		$view->set('captcha_enabled', true);
		$view->set('recaptcha_html', recaptcha_get_html($this->recaptcha_config['publickey'], $this->recaptcha_error, $this->recaptcha_config['use_ssl']));
	}

	$this->template->content = $view;

   }

   /**
    * Action to resend email
    */
   public function action_send_confirmation_email()
   {
	// set the template title (see Controller_App for implementation)
	$this->template->title = __('Sending confirmation email');
	if ( Auth::instance()->logged_in() == false )
	{
		// No user is currently logged in
		$this->request->redirect('user/action/login');
	}

	if(Auth::instance()->get_user()->email_verified === 'true')
	{
		$this->request->redirect('user/action/profile');
	}

	$fields['email_code'] = Auth::instance()->get_user()->email_verified;
	$fields['email'] = Auth::instance()->get_user()->email;

	try
	{
		if(!$this->send_confirmation_email($fields))
		{
			throw Exception(__('The email could not be send. Try again later.'));
		}
		Message::add('success', __('A new code was send to you.'));
		$this->request->redirect('user/action/profile');
	}
	catch (Exception $e)
	{
		Message::add('error', __('The email could not be send. Try again later.'));
		Kohana::$log->add(Log::ERROR, 'Confirmation email could not be send.');
		$this->request->redirect('user/action/profile');
	}

   }

   /**
    * Email confirmation
    */
   public function action_confirm_email($email_code) {
	// set the template title (see Controller_App for implementation)
	$this->template->title = __('Account confirmation');
	if ( Auth::instance()->logged_in() == false )
	{
		// No user is currently logged in
		$this->request->redirect('user/action/login');
	}

	if(Auth::instance()->get_user()->email_verified === 'true')
	{
		// This is for avoiding confusion on the part of the user
		// Send this message to ind. to the user that they do not need to confirm the email anymore
		Message::add('success', __('Success! Your email as been confirmed.'));
		$this->request->redirect('user/action/profile');
	}

	try
	{
		// Get the model where the validation method is and the method for updating the status of the email_verified is
		$model_user = new Model_User;
		// Create an array for the Validation Class
		$email_confirmation_code = array();
		$email_confirmation_code['email_confirmation_code'] = $email_code;
		Validation::factory($email_confirmation_code)
			->rule('email_confirmation_code', 'email_confirmation_code', array($this, ':field'));
		// Update email_verified
		$model_user->update_email_confirmation();
		// Send a message to the user that the code was accepted
		Message::add('success', __('Success! Your email as been confirmed.'));
		// Redirect to the profile page where the message will be read by the user
		$this->request->redirect('user/action/profile');
	}
	catch (Validation_Exception $e)
	{
		// Send an error message to the user
		Message::add('error', __('The code given was wrong or as expired.'));
		$this->request->redirect('user/action/profile');
	}

	$this->template->content = $view;
   }

   /**
    * Email confirmation sender
    *
    * @param Array Field Name
    * @return Bool
    */
   private function send_confirmation_email($fields)
   {
            $message = "Thank you so much for registering with :title!<br>\n\n"
                       ."Please confirm your :title account by clicking this link:<br>\n\n"
                       .":email_code_address<br>\n\n"
                       ."Once you confirm, you will have full access to :title and all future notifications will be sent to this email address.<br>\n\n"
                       ."The :title Team";

            $mailer = Email::connect();
            $to = array($fields['email']);
            $from = array(Kohana::config('useradmin')->email_address);
            $subject = __('Confirm your subscription.');
            $body = __($message, array(
                                        ':title'        => Kohana::config('useradmin')->title,
                                        ':email_code_address'  => HTML::anchor('/user/action/confirm_email/'.$fields['email_code'], URL::base().'user/action/confirm_email/'.$fields['email_code']),
                                ));

            $message_swift = Swift_Message::newInstance($subject, $body, "text/html")
                                                        ->setFrom($from)
                                                        ->setTo($to);

            return $mailer->send($message_swift);
   }

   /**
    * Close the current user's account.
    */
   public function action_unregister() {
      // set the template title (see Controller_App for implementation)
      $this->template->title = __('Close user account');
      if ( Auth::instance()->logged_in() == false ){
         // No user is currently logged in
         $this->request->redirect('user/action/login');
      }
      // get the user id
      $uuid = Auth::instance()->get_user()->uuid;

      // check for confirmation
      if($uuid && isset($_POST['confirmation']) && $_POST['confirmation'] == 'Y') {
         if (Auth::instance()->logged_in()) {
            // Log the user out, their account will no longer exist
            Auth::instance()->logout();
         }
         // Delete the user
	 $model_user = new Model_User();
	 $model_user->delete_user($uuid); 
         // message: save success
         Message::add('success', __('User deleted.'));
         $this->request->redirect('user/action/profile');
      }
      // display confirmation
      $this->template->content = View::factory('user/unregister')->set('id', CASSANDRA::Util()->import($uuid))->set('data', array('username' => Auth::instance()->get_user()->username));
   }

   /**
    * View: Login form.
    */
   public function action_login() {
      // Load reCaptcha if needed
      $this->loadReCaptcha();
      // ajax login
      if($this->request->is_ajax() && isset($_REQUEST['username'], $_REQUEST['password'])) {
         $this->auto_render = false;
         $this->request->headers('Content-Type', 'application/json');
         if(Auth::instance()->logged_in() != 0) {
            $this->response->status(200);
            $this->template->content = $this->request->body('{ "success": "true" }');
            return;
         }
         else if( Auth::instance()->login($_REQUEST['username'], $_REQUEST['password']) )
         {
            $this->response->status(200);
            $this->template->content = $this->request->body('{ "success": "true" }');
            return;
         }
         $this->response->status(500);
         $this->template->content = $this->request->body('{ "success": "false" }');
         return;
      } else {
         // set the template title (see Controller_App for implementation)
         $this->template->title = __('Login');
         // If user already signed-in
         if(Auth::instance()->logged_in() != 0){	
            // redirect to the user account
            $this->request->redirect('user/action/profile');
         }
         $view = View::factory('user/login');
         // If there is a post and $_POST is not empty
         if ($_REQUEST && isset($_REQUEST['username'], $_REQUEST['password'])) {

            // Check Auth if the post data validates using the rules setup in the user model
            if ( Auth::instance()->login($_REQUEST['username'], $_REQUEST['password']) ) {
               // redirect to the user account
               $this->request->redirect('user/action/profile');
               return;
            } else {
               $view->set('username', $_REQUEST['username']);
               // Get errors for display in view
               $validation = Validation::factory($_REQUEST)
                  ->rule('username', 'not_empty')
                  ->rule('username', 'min_length', array(':value', 1))
                  ->rule('username', 'max_length', array(':value', 127))
                  ->rule('password', 'not_empty');             
               if ($validation->check()) {
                  $validation->error('password', 'invalid');
               }
               $view->set('errors', $validation->errors('login'));  
            }
         }
         // allow setting the username as a get param
         if(isset($_GET['username'])) {
            $view->set('username', Security::xss_clean($_GET['username']));
         }
         $providers = Kohana::config('useradmin.providers');
         $view->set('facebook_enabled', isset($providers['facebook']) ? $providers['facebook'] : false);

	if(Kohana::config('useradmin')->captcha)
     	{
                $view->set('captcha_enabled', true);
                $view->set('recaptcha_html', recaptcha_get_html($this->recaptcha_config['publickey'], $this->recaptcha_error, $this->recaptcha_config['use_ssl']));
     	}

         $this->template->content = $view;
      }
   }

   /**
    * Log the user out.
    */
   public function action_logout() {
      // Sign out the user
      Auth::instance()->logout();

      // redirect to the user account and then the signin page if logout worked as expected
      $this->request->redirect('user/action/profile');
   }

   /**
    * A basic implementation of the "Forgot password" functionality
    */
   public function action_forgot() {
      // Load reCaptcha if needed
      $this->loadReCaptcha();
      // Password reset must be enabled in config/useradmin.php
      if(!Kohana::config('useradmin')->email) {
         Message::add('error', 'Password reset via email is not enabled. Please contact the site administrator to reset your password.');
         $this->request->redirect('user/action/register');
      }
      // set the template title (see Controller_App for implementation)
      $this->template->title = __('Forgot password');
      if(isset($_POST['reset_email']))
      {
		// optional checks (e.g. reCaptcha or some other additional check)
		$optional_checks = true;
		// if configured to use captcha, check the reCaptcha result
		if(Kohana::config('useradmin')->captcha)
		{
			$recaptcha_resp = recaptcha_check_answer($this->recaptcha_config['privatekey'],
						$_SERVER['REMOTE_ADDR'],
						$_POST['recaptcha_challenge_field'],
						$_POST['recaptcha_response_field']);

			if(!$recaptcha_resp->is_valid)
			{
				$optional_checks = false;
				$this->recaptcha_error = $recaptcha_resp->error;
				Message::add('error', __('The captcha text is incorrect, please try again.'));
			}
		}

	 $model_user = Model::factory('user');
	 $user = $model_user->get_user_by_email($_POST['reset_email']);

         // admin passwords cannot be reset by email
         if($user['uuid'] && ($user['username'] != 'admin') && $optional_checks)
	 {
		// send an email with the account reset token
		$reset_token = $model_user->reset_token($user['uuid'], $_POST);

		$message = "You have requested a password reset. You can reset password to your account by visiting the page at:\n\n"
			   .":reset_token_link\n\n"
			   ."If the above link is not clickable, please visit the following page:\n"
			   .":reset_link\n\n"
			   ."and copy/paste the following Reset Token: :reset_token\nYour user account name is: :username\n";

		$mailer = Email::connect();
		// Create complex Swift_Message object stored in $message
		// MUST PASS ALL PARAMS AS REFS
		$subject = __('Account password reset');
		$to = $_POST['reset_email'];
		$from = Kohana::config('useradmin')->email_address;
		$body =  __($message, array(
				':reset_token_link' => URL::site('user/action/reset?reset_token='.$reset_token.'&reset_email='.$_POST['reset_email'], TRUE),
				':reset_link' => URL::site('user/action/reset', TRUE),
				':reset_token' => $reset_token,
				':username' => $user['username']
			));
		$message_swift = Swift_Message::newInstance($subject, $body)
			->setFrom($from)
			->setTo($to);

		if($mailer->send($message_swift))
		{
			Message::add('success', __('Password reset email sent.'));
			$this->request->redirect('user/action/login');
		}
		else
		{
			Message::add('failure', __('Could not send email.'));
		}

         }
	 else if($user['username'] == 'admin')
	 {
            Message::add('error', __('Admin account password cannot be reset via email.'));
         }
	 else if(!$optional_checks)
	 {
		Message::add('error', __('The captcha is wrong.'));
	 }
	 else
	 {
            Message::add('error', __('User account could not be found.'));
         }
	}

	$view = View::factory('user/reset/forgot');

	if(Kohana::config('useradmin')->captcha)
        {
                $view->set('captcha_enabled', true);
                $view->set('recaptcha_html', recaptcha_get_html($this->recaptcha_config['publickey'], $this->recaptcha_error, $this->recaptcha_config['use_ssl']));
        }

     $this->template->content = $view;
   }

   /**
    * A basic version of "reset password" functionality.
    */
  function action_reset()
  {
      // Password reset must be enabled in config/useradmin.php
      if(!Kohana::config('useradmin')->email)
      {
         Message::add('error', 'Password reset via email is not enabled. Please contact the site administrator to reset your password.');
         $this->request->redirect('user/action/register');
      }
      // set the template title (see Controller_App for implementation)
      $this->template->title = __('Reset password');
      if(isset($_REQUEST['reset_token']) && isset($_REQUEST['reset_email'])) {
         // make sure that the reset_token has exactly 32 characters (not doing that would allow resets with token length 0)
         if( (strlen($_REQUEST['reset_token']) == 32) && (strlen(trim($_REQUEST['reset_email'])) > 1) )
	 {
	    $model_user = Model::factory('user');
            $user = $model_user->get_user_by_email($_POST['reset_email']);

            // The admin password cannot be reset by email
            if ($user['username'] == 'admin')
	    {
               Message::add('failure', __('The admin password cannot be reset by email.'));
            }
	    else if (is_numeric($user['uuid']) && ($user['reset_token'] == $_REQUEST['reset_token']))
	    {
		$model_useradmin_user = Model::factory('useradmin_user');
               $password = $model_useradmin_user->generate_password();
	       $model_user->change_password($user, $password);
               Message::add('success', __('Password reset.'));
               Message::add('success', '<p>'.__('Your password has been reset to: ":password".', array(':password' => $password)).'</p><p>'.__('Please log in below.').'</p>');
               $this->request->redirect('user/action/login?username='.$user['username']);
            }
        }
     }

     $view = View::factory('user/reset/reset');

     $this->template->content = $view;
  }

  /**
   * Allow the user to change their password.
   */
  function action_change_password() {
      // set the template title (see Controller_App for implementation)
      $this->template->title = __('Change password');
      $user = Auth::instance()->get_user();
      $id = $user->uuid;
      // load the content from view
      $view = View::factory('user/change_password');

      // save the data
      if ( !empty($_POST) && is_numeric($id) )
      {
         // editing requires that the username and email do not exist (EXCEPT for this ID)
         // If the post data validates using the rules setup in the user model
         $param_by_ref = array('password' => $_POST['password'], 'password_confirm' => $_POST['password_confirm']);
         $validate = $user->change_password($param_by_ref, FALSE);
         if($validate)
	 {
            // message: save success
            Message::add('success', __('Values saved.'));
            // redirect and exit
            $this->role_redirect();
            return;
         }
	 else
	 {
            // UNFORTUNATELY, it is NOT possible to get errors for display in view
            // since they will never be returned by change_password()
            Message::add('error', __('Password could not be changed, please make sure that the passwords match.'));
            // Pass on the old form values
            $_POST['password'] = $_POST['password_confirm'] = '';
            $view->set('defaults', $_POST);
         }
      }
      else
      {
         // load the information for viewing
         $view->set('data', $user->as_array());
      }
      $this->template->content = $view;
   }

   /**
    * Redirect to the provider's auth URL
    * @param string $provider
    */
   function action_provider($provider_name = null) {
      if(Auth::instance()->logged_in())
      {
         Message::add('success', 'Already logged in.');
         // redirect to the user account
         $this->request->redirect('user/action/profile');
      }
      $provider = Provider::factory($provider_name);
      if(is_object($provider))
      {
         $this->request->redirect($provider->redirect_url('/user/action/provider_return/'.$provider_name));
         return;
      }
      Message::add('error', 'Provider is not enabled; please select another provider or log in normally.');
      $this->request->redirect('user/action/login');
      return;
   }

   function action_associate($provider_name = null) {
      if(Auth::instance()->logged_in())
      {
         if(isset($_POST['confirmation']) && $_POST['confirmation'] == 'Y')
	 {
            $provider = Provider::factory($provider_name);
            if(is_object($provider))
	    {
               $this->request->redirect($provider->redirect_url('/user/action/associate_return/'.$provider_name));
               return;
            }
	    else
	    {
               Message::add('error', 'Provider is not enabled; please select another provider or log in normally.');
               $this->request->redirect('user/action/login');
               return;
            }
         }
	 else if(isset($_POST['confirmation']))
	 {
            Message::add('error', 'Please click Yes to confirm associating the account.');
            $this->request->redirect('user/action/profile');
            return;
         }
      }
      else
      {
         Message::add('error', 'You are not logged in.');
         $this->request->redirect('user/action/login');
         return;
      }
     $this->template->content = View::factory('user/associate')->set('provider_name', $provider_name);
   }

   /**
    * Associate a logged in user with an account.
    *
    * Note that you should not trust the OAuth/OpenID provider-supplied email
    * addresses. Yes, for Facebook, Twitter, Google and Yahoo the user is actually
    * required to ensure that the email is in fact one that they control.
    *
    * However, with generic OpenID (and non-trusted OAuth providers) one can setup a
    * rogue provider that claims the user owns a particular email address without
    * actually owning it. So if you trust the email information, then you open yourself to
    * a vulnerability since someone might setup a provider that claims to own your
    * admin account email address and if you don't require the user to log in to
    * associate their account they gain access to any account.
    *
    * TL;DR - the only information you can trust is that the identity string is
    * associated with that user on that openID provider, you need the user to also
    * prove that they want to trust that identity provider on your application.
    *
    */
   function action_associate_return($provider_name = null) {
      if(Auth::instance()->logged_in())
      {
         $provider = Provider::factory($provider_name);

         // verify the request
         if(is_object($provider) && $provider->verify())
	 {

            $user = Auth::instance()->get_user();
            if(is_numeric($user->uuid))
	    {

               if(Auth::instance()->logged_in() && Auth::instance()->get_user()->uuid == $user->uuid)
	       {

                  // found: "merge" with the existing user
		  $model_user = Model::factory('user');
		  $identity = $model_user->get_user_identity($provider_name, $provider->user_id());

                  if(!isset($identity['uuid']) && !$identity['uuid'])
		  {
                     Message::add('success', __('Your user account has been associated with this provider.'));
                     $model_user->associate_provider_to_user($user['uuid'], $provider_name, $provider->user_id()); 
                     // redirect to the user account
                     $this->request->redirect('user/action/profile');
                     return;
                  }
		  else
		  {
                     Message::add('error', 'We were unable to associate this account with the provider. Please make sure that there are no other accounts using this provider identity, as each 3rd party provider identity can only be associated with one user account.');
                     $this->request->redirect('user/action/login');
                     return;
                  }
               }
            }
         }
      }
      Message::add('error', 'There was an error associating your account with this provider.');
      $this->request->redirect('user/action/login');
      return;
   }

  /**
   * Allow the user to login and register using a 3rd party provider.
   */
   function action_provider_return($provider_name = null) {
      $provider = Provider::factory($provider_name);
      $model_user = Model::factory('user');
      if(!is_object($provider))
      {
         Message::add('error', 'Provider is not enabled; please select another provider or log in normally.');
         $this->request->redirect('user/action/login');
         return;
      }
      // verify the request
      if($provider->verify())
      {
         // check for previously connected user
         $uid = $provider->user_id();
	 $user_identity = $model_user->get_user_identity($provider_name, $uid);

         if(isset($user_identity['uuid']) && $user_identity['uuid'])
	 {
            if($user_identity['uuid'] && $user['users_identities_identity'] == $user_identity->user_id && is_numeric($user->id))
	    {
               // found, log user in
               Auth::instance()->force_login($user);
               // redirect to the user account
               $this->request->redirect('user/action/profile');
               return;
            }
         }
         // create new account
         if(!Auth::instance()->logged_in())
	 {
            // Instantiate a new user
            // fill in values
            // generate long random password (maximum that passes validation is 42 characters)
	    $model_useradmin_user = Model::factory('useradmin_user');
            $password = $model_useradmin_user->generate_password();
            $values = array(
                // get a unused username like firstname.surname or firstname.surname2 ...
                'username' => $model_useradmin_user->generate_username(str_replace(' ', '.', $provider->name())),
                'password' => $password,
                'password_confirm' => $password,
            );
            if(Valid::email($provider->email(), TRUE))
	    {
               $values['email'] = $provider->email();
            }

	    $post = $model_user->create_user($values, TRUE);

            if($post->valid)
	    {
               // Add the login role to the user (add a row to the db)
                //$login_role = new Model_Role(array('name' =>'login'));
                //$user->add('roles', $login_role);
               // create user identity after we have the user id
               $model_user->associate_provider_to_user($user['uuid'], $provider_name, $provider->user_id());
               // sign the user in
               Auth::instance()->login($values['username'], $password);
               // redirect to the user account
               $this->request->redirect('user/action/profile');
            }
	    else 
	    {
               if($provider_name == 'twitter')
	       {
                  Message::add('error', 'The Twitter API does not support retrieving your email address; you will have to enter it manually.');
               }
	       else
	       {
                  Message::add('error', 'We have successfully retrieved some of the data from your other account, but we were unable to get all the required fields. Please complete form below to register an account.');
               }
               // in case the data for some reason fails, the user will still see something sensible:
               // the normal registration form.
               $view = View::factory('user/register');
               $errors = $post->errors('register');
               // Move external errors to main array, for post helper compatibility
               $errors = array_merge($errors, (isset($errors['_external']) ? $errors['_external'] : array()));
               $view->set('errors', $errors);
               // Pass on the old form values
               $values['password'] = $values['password_confirm'] = '';
               $view->set('defaults', $values);
               if(Kohana::config('useradmin')->captcha)
	       {
                  include Kohana::find_file('vendor', 'recaptcha/recaptchalib');
                  $this->recaptcha_config = Kohana::config('recaptcha');
                  $this->recaptcha_error = null;
                  $view->set('captcha_enabled', true);
                  $view->set('recaptcha_html', recaptcha_get_html($this->recaptcha_config['publickey'], $this->recaptcha_error, $this->recaptcha_config['use_ssl']));
               }
               $this->template->content = $view;
            }
         }
	 else
	 {
            Message::add('error', 'You are logged in, but the email received from the provider does not match the email associated with your account.');
            $this->request->redirect('user/action/profile');
         }
      }
      else
      {
         Message::add('error', 'Retrieving information from the provider failed. Please register below.');
         $this->request->redirect('user/action/register');
      }
   }

   /**
    * Media routing code. Allows lazy users to load images via Kohana. See also: init.php.
    * I recommend just serving the files via apache, e.g. copy the public directory to your webroot.
    */
   public function action_media() {
      // prevent auto render
      $this->auto_render = FALSE;

      // Generate and check the ETag for this file
//		$this->request->check_cache(sha1($this->request->uri));
      // Get the file path from the request
      $file = Request::current()->param('file');
      $dir = Request::current()->param('dir');

      // Find the file extension
      $ext = pathinfo($file, PATHINFO_EXTENSION);

      // Remove the extension from the filename
      $file = substr($file, 0, -(strlen($ext) + 1));

      $file = Kohana::find_file('public', $dir.'/'.$file, $ext);
      if ($file) {
         // Send the file content as the response
         $this->response->body(file_get_contents($file));
      } else {
         // Return a 404 status
         $this->response->status(404);
      }

      // Set the proper headers to allow caching
      $this->response->headers('Content-Type', File::mime_by_ext($ext));
      $this->response->headers('Content-Length', (string)filesize($file));
      $this->response->headers('Last-Modified', date('r', filemtime($file)));
   }
}
