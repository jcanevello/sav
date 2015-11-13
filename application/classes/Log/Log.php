<?php defined('SYSPATH') or die('No direct script access.');

class Log_Log extends Log implements Log_Ilog {

	static public function registrarError($msj) 
	{
		Log::instance()->add(Log::ERROR, $msj);
	}
}