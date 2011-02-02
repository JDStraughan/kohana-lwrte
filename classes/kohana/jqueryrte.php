<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Helper methods to setup jQueryRTE with default scripts and styles
 */
class Kohana_jQueryRTE {

	/**
	 * Default scripts to load
	 * 
	 * @var array
	 */
	protected $_scripts = array(
		'jqueryrte/jquery.rte.js',
		'jqueryrte/jquery.rte.ocupload.js',
		'jqueryrte/jquery.rte.tb.js'
	);

	/**
	 * Default styles to load 
	 * 
	 * @var array
	 */
	protected $_styles = array(
		'jqueryrte/jquery.rte.css'
	);
		
	/**
	 * Gets the default css links for the rte
	 *  
	 * @return string
	 */
	public static function get_styles_html() 
	{
		$html = array();
		foreach ($this->_styles as $style) 
		{
			$html[] = HTML::style(url::base() . $style);
		}
		return implode("\n", $html);
	}	

	/**
	 * Gets the default js scripts for the rte
	 * 
	 * @return string
	 */
	public static function get_scripts_html()
	{
		$html = array();
		foreach ($this->_scripts as $script) 
		{
			$html[] = HTML::script(url::base() . $script);
		}
		return implode("\n", $html);
	}
	
}