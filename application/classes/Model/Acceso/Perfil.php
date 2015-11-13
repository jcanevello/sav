<?php defined('SYSPATH') or die('No direct script access.');

class Model_Auth_Perfil extends ORM {
	
	protected $_table_name = 'perfil';
	
	protected $_has_many = array(
		'aOpcion' => array(
			'model'		=> 'auth_opcion',
			'through'	=> 'Perfilopcion'
		),
		'aUsuario' => array(
			'model'			=> 'auth_usuario',
			'foreign_key'	=> 'per_codigo'
		)
	);
	
	public function opciones()
	{
		return ORM::factory('Auth_Opcion')
			->join('perfil_opcion')->on('perfil_opcion.opc_codigo', '=', 'Auth_Opcion.opc_codigo')
			->where('perfil_opcion.per_codigo', '=', $this->per_codigo)
			->find_all();
	}
	
}
