<?php defined('SYSPATH') or die('No direct script access.');

class Model_Auth_Opcion extends ORM {
	
	protected $_table_name = 'opcion';
	
	protected $_has_many = array(
		'aPerfil' => array(
			'model'		=> 'auth_perfil',
			'through'	=> 'perfilopcion'
		)
	);
	
}
