<?php defined('SYSPATH') or die('No direct script access.');

interface Acceso_Iacceso {
	
	static public function acceso($value);
	static public function validar_usuario();
}
