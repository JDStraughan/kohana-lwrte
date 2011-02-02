<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Helper methods to setup jQueryRTE with default scripts and styles
 */
class Kohana_LWRTE {
	
	/**
	 * Gets an array from Kohan_Config
	 * 
	 * @return array
	 */
	protected static function _get_config($type) 
	{
		$config = Kohana_Config::instance()->load('lwrte');
		return $config[$type];
	}

	/**
	 * Gets the default css links for the rte
	 *  
	 * @return string
	 */
	public static function get_styles_html() 
	{
		$html = array();
		foreach (self::_get_config('styles') as $style) 
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
		foreach (self::_get_config('scripts') as $script) 
		{
			$html[] = HTML::script(url::base() . $script);
		}
		return implode("\n", $html);
	}
	
}