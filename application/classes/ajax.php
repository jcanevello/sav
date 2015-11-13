<?php defined('SYSPATH') or die('No direct script access.');

class Ajax {
	
	public static function error($msg = NULL, $code = 500)
	{
		$default = 'Ha ocurrido un error. Inténtalo nuevamente en unos minutos.';
		header('Content-Type: '.Kohana_Exception::$error_view_content_type.'; charset='.Kohana::$charset, TRUE, $code);
		echo $msg ? $msg : $default;
		exit(1);
	}

}
