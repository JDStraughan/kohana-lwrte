<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Handles uploads and media for jQueryRTE
 * 
 * Based on the jqueryrte upload.php file by Andrey Gayvoronsky - http://www.gayvoronsky.com
 */
class Controller_LWRTE extends Controller {
	
	/**
	 * Handles XHR POST request for file upload from RTE
	 * 
	 * @return string
	 */
	public function action_upload() 
	{

		$config = Kohana_Config::instance()->load('lwrte');
		
		$upload_dir = $config['upload']['directory'];
		
		// only handles one file
		$file = current($_FILES); 

		if ($file['error'] == UPLOAD_ERR_OK) 
		{
			//no errors, 0 - is our error code for 'moving error'
			if (move_uploaded_file($file['tmp_name'], "{$upload_dir}/{$file['name']}"))
				$file['error']	= ''; 
		}
	
		$arr = array(
			'error' => $file['error'], 
			'file' => "{$upload_dir}/{$file['name']}",
			'tmpfile' => $file['tmp_name'], 
			'size' => $file['size']
		);
	
		if (function_exists('json_encode'))
		{
			$this->request->response = json_encode($arr);
		}
		else 
		{
			$result = array();
			foreach ($arr as $key => $val) 
			{
				$val = (is_bool($val)) ? ($val ? 'true' : 'false') : $val;
				$result[] = "'{$key}':'{$val}'";
			}
		
			$this->request->response = '{' . implode(',', $result) . '}';
		}
		
	}
	
	/**
	 * This is a direct copy of the media action from the userguide module
	 * 
	 * @return void
	 */
	public function action_media()
	{
		// Get the file path from the request
		$file = $this->request->param('file');

		// Find the file extension
		$ext = pathinfo($file, PATHINFO_EXTENSION);

		// Remove the extension from the filename
		$file = substr($file, 0, -(strlen($ext) + 1));

		if ($file = Kohana::find_file('media', $file, $ext))
		{
			// Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
			$this->request->check_cache(sha1($this->request->uri).filemtime($file));
			
			// Send the file content as the response
			$this->request->response = file_get_contents($file);
		}
		else
		{
			// Return a 404 status
			$this->request->status = 404;
		}

		// Set the proper headers to allow caching
		$this->request->headers['Content-Type']   = File::mime_by_ext($ext);
		$this->request->headers['Content-Length'] = filesize($file);
		$this->request->headers['Last-Modified']  = date('r', filemtime($file));
	}
	
}

?>