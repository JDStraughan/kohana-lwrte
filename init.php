<?php defined('SYSPATH') or die('No direct script access.');

$modules = Kohana::modules();

Route::set('lwrte-media', 'lwrte/media(/<file>)', array('file' => '.+'))
	->defaults(array(
		'controller' => 'lwrte',
		'action'     => 'media',
		'file'       => NULL,
	));

Route::set('lwrte-upload','lwrte/upload')
	->defaults(array(
		'controller' => 'lwrte',
		'action'     => 'upload'
	));