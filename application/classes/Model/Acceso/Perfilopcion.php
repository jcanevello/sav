<?php defined('SYSPATH') or die('No direct script access.');

class Model_Auth_Perfilopcion extends ORM {
	
	protected $_table_name = 'perfil_opcion';
	
	protected $_belongs_to = array(
		'oPerfil' => array(
			'model'			=> 'auth_perfil',
			'foreign_key'	=> 'per_codigo'
		),
		'oOpcion' => array(
			'model'			=> 'auth_opcion',
			'foreign_key'	=> 'opc_codigo'
		)
	);
	
	function selet()
	{
	}
	
	
}

