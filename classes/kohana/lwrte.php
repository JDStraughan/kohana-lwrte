<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Helper methods to setup jQueryRTE with default scripts and styles
 */
class Kohana_LWRTE {
	
	/**
	 * Options for $.rte
	 * 
	 * @var string
	 */
	protected static $_options;
	
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
	 * Generates all required links to js/css and initializes script
	 * 
	 * @param string $class_name
	 * @param array $options
	 * @return string
	 */
	public static function generate_all($class_name = 'lwrte', array $options = array()) 
	{
		return self::get_scripts_html() .
			self::get_styles_html() . 
			self::get_invoke($class_name, $options);
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
	
	/**
	 * Gets the js code block to invoce lwrte and assign to a class
	 * 
	 * @param string $class_name
	 * @param array $options OPTIONAL
	 * @return string
	 */
	public static function get_invoke($class_name = 'lwrte', array $options = array()) 
	{
		self::_process_options($options);
		return sprintf('<script type="text/javascript">$(function() {var arr = $(\'.%s\').rte(%s);});</script>',
			$class_name,
			self::$_options);		
	}
	
	/**
	 * Prepares the options array to be used as a js object
	 * @todo: refactor and test for all option cases
	 * 
	 * @param array $options
	 * @return string
	 */
	protected static function _process_options(array $options) 
	{
		if (!$options) 
		{
			$options = self::_get_config('options');
		}
		self::$_options = str_replace('"', '', json_encode($options));
	}
	
}