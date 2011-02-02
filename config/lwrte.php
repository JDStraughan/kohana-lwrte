<?php defined('SYSPATH') or die('No direct script access.');

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
		'controls_rte' => 'rte_toolbar',
        'controls_html' => 'html_toolbar'
     )
);