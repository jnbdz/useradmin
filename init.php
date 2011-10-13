<?php
Route::set('user/action', 'user/action(/<action>(/<id>))')
	->defaults(array(
		'controller' => 'user',
		'action'     => 'login',
	));

Route::set('user/provider', 'user/provider(/<provider>)', array('provider' => '.+'))
	->defaults(array(
		'controller' => 'user',
		'action'     => 'provider',
		'provider'       => NULL,
	));

Route::set('user/provider_return', 'user/provider_return(/<provider>)', array('provider' => '.+'))
	->defaults(array(
		'controller' => 'user',
		'action'     => 'provider_return',
		'provider'       => NULL,
	));

Route::set('user', 'user/<username>')
	->defaults(array(
		'controller' => 'user',
		'action'     => 'profile',
	));

// Static file serving (CSS, JS, images)
Route::set('css', '<dir>(/<file>)', array('file' => '.+', 'dir' => '(css|img)'))
   ->defaults(array(
		'controller' => 'user',
		'action'     => 'media',
		'file'       => NULL,
		'dir'       => NULL,
	));
