<?php defined('SYSPATH') or die('No direct script access.');

/**
 * NOTE: All double quotes will be removed
 * Escape single quotes for all quoted values
 */
return array(
	'upload' => array(
		'abs_path' => '/Users/you/Sites/yoursite/uploads',
		'rel_path' => '/your_site/uploads/'
	),
	'scripts' => array(
		'lwrte/media/jquery.rte.js',
		'lwrte/media/jquery.rte.tb.js',
		'lwrte/media/jquery.rte.ocupload.js',
	),
	'styles' => array(
		'lwrte/media/jquery.rte.css'
	),
	'options' => array(
		'base_url'		=> '\'http://localhost/takaracms/\'',
		'controls_rte' 	=> 'rte_toolbar',
        'controls_html' => 'html_toolbar'
     )
);