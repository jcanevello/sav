<?php

defined('SYSPATH') or die('No direct script access.');

class Util {

	static public function date_format($date)
	{
		return date('Y-m-d', strtotime($date));
	}

	static function download_file($archivo, $downloadfilename = null)
	{

//		if (file_exists($archivo))
//		{
			$downloadfilename = $downloadfilename !== null ? $downloadfilename : basename($archivo);
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . $downloadfilename);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($archivo));

			ob_clean();
			flush();
			readfile($archivo);
			exit;
//		}
	}
	
	static function encriptarMD5($contraseña)
	{
		return hash('md5', $contraseña);
	}
	
	static function hasMenu($aMenu, $menu)
	{	
		return in_array($menu, $aMenu);
	}

}
