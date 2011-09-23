<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * ORM Auth driver extended for Useradmin module support.
 *
 * @package    Useradmin/Auth
 * @author     Gabriel R. Giannattasio
 */
class Useradmin_Auth_CASSANDRA extends Kohana_Auth_CASSANDRA implements Useradmin_Driver_iAuth {

	/**
	 * Extends the Kohana Auth ORM driver to give useradmin module extras
	 * @see Kohana_Auth_ORM::_login()
	 */
	protected function _login($user, $password, $remember) 
	{

		if ( ! is_array($user))
		{	

			$col = (Valid::email($user)) ? 'email' : 'username';

			// Load the user
			CASSANDRA::selectColumnFamily('Users');
			$user_infos = CASSANDRA::getIndexedSlices(array($col => $user));
			$user = FALSE;
			$i=0;
			foreach($user_infos as $uuid => $cols) {
				$cols['uuid'] = $uuid;
				$user = $cols;
				if($i === 1)
				{	
					$log->add(Log::ERROR, 'There was a conflic with the username and/or email. UUID: '.$user['uuid'].' username: '.$user['username'].' email: '.$user['email']);
					$this->request->redirect('error/conflic');
					$user = FALSE;
					break;
				}
				$i++;
			}
		}

		// if there are too many recent failed logins, fail now
		if ((Kohana::config("useradmin.max_failed_logins") > 0) && ($user['failed_login_count'] >= Kohana::config("useradmin.max_failed_logins") ) && (strtotime($user['last_failed_login']) > strtotime("-".Kohana::config("useradmin.login_jail_time") ) )) 
		{
			// do nothing, and fail (too many failed logins within {login_jail_time} minutes).
			return FALSE;
		}

		if ($user) {	
			// Loads default driver before extend the results
			$status = parent::_login($user, $password, $remember);
		} else {
			$status = FALSE;
		}

		if($status) 
		{
			// Successful login
			// Reset the login failed count	
			CASSANDRA::selectColumnFamily('Users')->insert($user['uuid'], array('failed_login_count' => 0));
		} elseif ($user) {	
			// Failed login
			CASSANDRA::selectColumnFamily('Users')->insert($user['uuid'], array(
											'failed_login_count' => $user['failed_login_count']+1,
											'last_failed_login' => date('YmdHis', time()),
											));
		}

		return $status;
	}
	
	/**
	 * Register a single user
	 * Method to register new user by Useradmin Auth module, when you set the
	 * fields, be sure they must respect the driver rules
	 * 
	 * @param array $fields An array witch contains the fields to be populate
	 * @returnboolean Operation final status
	 * @see Useradmin_Driver_iAuth::register()
	 */
	public function register($fields) 
	{
		try 
		{
			$model_User = new Model_User();
			$model_User->create_user($fields);
		} 
		catch (ORM_Validation_Exception $e) 
		{
			throw $e;
			return FALSE;
		}
		return TRUE;
	}
	
	/**
	 * Unegister multiple users
	 * Method to unregister existing user by Useradmin Auth module, when you set the
	 * Model_User reference for removing a user.
	 * 
	 * @param mixed $users An array witch contains the Model_User or a array of Model_User
	 * @return void
	 * @see Useradmin_Driver_iAuth::unregister()
	 */
	public function unregister ($users)
	{
		if( ! is_array($users))
			$users = array($users);

		$model_User = new Model_User();

		foreach ($users as $user)
		{
			try
			{
				$model_User->delete_user($user);
			} 
			catch (Exception $e) 
			{
				throw $e;
			}
		}
	}

}
