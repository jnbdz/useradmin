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
		if ( ! is_object($user))
		{
			$username = $user;
die(var_dump($username));
			// Load the user
			$user = CASSANDRA::selectColumnFamily('Users')->get($username);
		}
		
		// if there are too many recent failed logins, fail now
		if (($this->_config["useradmin"]["max_failed_logins"] > 0) && ($user['failed_login_count'] >= $this->_config["useradmin"]["max_failed_logins"] ) && (strtotime($user['last_failed_login']) > strtotime("-".$this->_config["useradmin"]["login_jail_time"] ) )) 
		{
			// do nothing, and fail (too many failed logins within {login_jail_time} minutes).
			return FALSE;
		}
		// Loads default driver before extend the results
		$status = parent::_login($user, $password, $remember);

		if($status) 
		{
			// Successful login
			// Reset the login failed count
			$user['failed_login_count'] = 0;
			CASSANDRA::selectColumnFamily('Users')->insert($username, $user);
		} else {
			// Failed login
			$user['failed_login_count'] = $user['failed_login_count']+1;
			$user['last_failed_login'] = date("Y-m-d H:i:s");
			CASSANDRA::selectColumnFamily('Users')->insert($username, $user);
		}
die('Bravo!');		
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
			$model_User->create_user($fields, $fields['username']);
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
		
		foreach ($users as $user)
		{
			if($user instanceof Model_User) 
			{
				try 
				{
					$user->delete();
				} 
				catch (ORM_Validation_Exception $e) 
				{
					throw $e;
				}
			}
			elseif( ! is_null($user) )
			{
				throw new Kohana_Exception("Invalid argument, must be instance of Model_User or array() containing Model_User's");
			}
		}
	}

}
