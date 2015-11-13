<?php defined('SYSPATH') or die('No direct script access.');

class Model_Acceso_Usuario extends Model {
	
	protected $_table_name = 'usuario';

	public function perfil()
	{
		return ORM::factory('Acceso_Perfil')
			->where('per_codigo', '=', $this->per_codigo)
			->find();
	}
	
	static public function getPerfil($idUsuario)
	{
		$usuario = DB::select('perfil.per_nombre')
			->from('usuario')
			->join('perfil')->on('perfil.per_codigo', '=', 'usuario.per_codigo')
			->where('usuario.usu_usuario', '=', $idUsuario)
			->execute()
			->as_array();
		
		return ($usuario[0]['per_nombre']);
	}
	
	static public function getNombre($id)
	{
		$usuario  = ORM::factory('Acceso_Usuario')
			->where('usu_usuario', '=', $id)
			->find();
		
		return $usuario->usu_nombre . ' ' . $usuario->usu_apellido;
	}
	
	static public function getUsuario($usuario)
	{
		$usuario = DB::select('*')
			->from('usuario')
			->where('usu_usuario', '=', $usuario)
			->execute()
			->as_array();
		
		return (object)$usuario[0];
	}
	
	static public function actualizarNumLogeo($oUser)
	{
		DB::update('usuario')
			->set(array('usu_num_logeo' => $oUser->usu_num_logeo))
			->where('usu_usuario', '=', $oUser->usu_usuario)
			->execute();
	}
	
	static public function getOpciones($usu_usuario)
	{
		$result =  DB::select('opciones.opc_nombre')
			->from('opciones')
			->join('perfil_opciones')->on('perfil_opciones.opc_codigo', '=', 'opciones.opc_codigo')
			->join('perfil')->on('perfil.per_codigo', '=', 'perfil_opciones.per_codigo')
			->join('usuario')->on('usuario.per_codigo', '=', 'perfil.per_codigo')
			->where('usuario.usu_usuario', '=', $usu_usuario)
			->execute()
			->as_array();
		
		$permisos = array();
		
		foreach ($result as $value)
		{
			array_push($permisos, $value['opc_nombre']);
		}
		
		return $permisos;
	}
	
}