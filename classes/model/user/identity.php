<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Model to handle user identity
 *
 * @package	Useradmin/Identity
 * @author	Useradmin Team
 * @copyright	(c) 2011 Useradmin Team
 * @license	...
 */
class Model_User_Identity {

   protected $_belongs_to = array(
           'user' => array(),
      );

   /**
    * Rules for the user identity.
    * @return array Rules
    */
/*	private $_rules = array(
		'username' => array(
			array('not_empty'),
			array('min_length', array(':value', 4)),
			array('max_length', array(':value', 32)),
			array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
			array(array($this, 'username_available'), array(':validation', ':field')),
		),
		'provider' => array(
			array('not_empty'),
			array('max_length', array(':value', 255)),
		),
		'identity' => array(
			array('not_empty'),
			array('max_length', array(':value', 255)),
			array(array($this, 'unique_identity'), array(':validation', ':field')),
		),
	);*/

   /**
    * Triggers error if identity exists.
    * Validation callback.
    *
    * @param   Validation  Validation object
    * @param   string    field name
    * @return  void
    */
   public function unique_identity (Validation $validation, $field)
   {
	try
	{
		CASSANDRA::selectColumnFamily('Users');
		$identity_exists = (bool) CASSANDRA::getIndexedSlides(array(
			'identity' => $validation['identity'],
			'provider' => $validation['provider'],
		));
		if ($identity_exists)
		{
			$validation->error($field, 'identity_available', array($validation[$field]));
		}
	} catch (Exception $e)
	{
		return TRUE;
	} 
   }

  /**
   * Outputs all the user's identities.
   *
   * @param  username 
   * @return identies
   */
   public function get_identities ($username)
   {
	try{
		return CASSANDRA::selectColumnFamily('UsersIdentities')->get($username);
	}
	catch (Exception $e)
	{
		return FALSE;
	}
   }

  /**
   * Outputs selected provider.
   *
   * @param   username
   * @param   provider
   * @return  identity
   */
   public function get_identity ($username, $provider)
   {
	try{
		return CASSANDRA::selectColumnFamily('Users')->get($username, array($provider));
	}
	catch (Exception $e)
	{
		return FALSE;
	}
   }
}
