<?php defined('SYSPATH') or die('No direct script access.');

$modules = Kohana::modules();

Route::set('media', 'jqueryrte/media(/<file>)', array('file' => '.+'))
	->defaults(array(
		'controller' => 'jqueryrte',
		'action'     => 'media',
		'file'       => NULL,
	));

Route::set('upload','jqueryrte/upload')
	->defaults(array(
		'controller' => 'jqueryrte',
		'action'     => 'upload'
	));