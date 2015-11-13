<?php defined('SYSPATH') or die('No direct script access.');

class Acceso_Usuario implements Acceso_Iacceso {
	
	static public function acceso($values)
	{
		$usuario = $values['usuario'];
		$contraseña = $values['contrasena'];
		
		if((strlen($usuario) == 0) OR (strlen($contraseña) == 0))
		{
			Log_Log::registrarError('Complete todos los campos');
			return (Object)array('status' => 'ERROR', 'data' => 'Complete todos los campos');
		}
		
		if( ! Acceso_Usuario::userExpresion($usuario))
		{
			Log_Log::registrarError($usuario . ' :Usuario inválido');
			return (Object)array('status' => 'ERROR', 'data' => 'Usuario inválido');
		}
		
		if( ! Acceso_Usuario::passExpresion($contraseña))
		{
			Log_Log::registrarError($contraseña . ' Contraseña inválida');
			return (Object)array('status' => 'ERROR', 'data' => 'Contraseña inválida');
		}
		
		$oUser = Model::factory('Acceso_Usuario')->getUsuario($usuario);

		if(empty($oUser->usu_usuario))
		{
			Log_Log::registrarError($usuario . ' :El usuario no se encuentra registrado en el sistema');
			return (Object)array('status' => 'ERROR', 'data' => 'El usuario no se encuentra registrado en el sistema');
		}
		
		if($oUser->usu_num_logeo >= Model::factory('Acceso_Tablatabla')->getNumLogeo())
		{
			Log_Log::registrarError($usuario . ' :Usuario bloqueado, comuníquese con el administrador');
			return (Object)array('status' => 'ERROR', 'data' => 'Usuario bloqueado, comuníquese con el administrador');
		}
		
		if(Util::encriptarMD5($contraseña) != $oUser->usu_contrasena)
		{
			$oUser->usu_num_logeo += 1;
			Model::factory('Acceso_Usuario')->actualizarNumLogeo($oUser);
			
			if($oUser->usu_num_logeo == Model::factory('Acceso_Tablatabla')->getNumLogeo())
			{
				Log_Log::registrarError($usuario . ' :Usuario bloqueado, comuníquese con el administrador');
				return (Object)array('status' => 'ERROR', 'data' => 'Usuario bloqueado, comuníquese con el administrador');
			}
			
			Log_Log::registrarError('La contraseña ' . $contraseña . 'del usuario ' . $usuario . ' es incorrecto');
			return (Object)array('status' => 'ERROR', 'data' => 'Contraseña incorrecta');
		}
		return (Object)array('status' => 'OK', 'data' => $oUser->usu_usuario);
	}
	
	static public function validar_usuario()
	{
		
	}
	
	static public function getUsuario($id)
	{
		if(is_null($id))
			return NULL;
		
		$model = Model::factory('Acceso_Usuario');
		
		return (object)array('usuario' => $model->getUsuario($id), 
			'permisos' => $model->getOpciones($id),
			'perfil' => $model->getPerfil($id));
	}
	
	static public function getOpciones($usu_usuario)
	{
		
	}
	
	static public function getNombre($id)
	{
		return Model_Auth_Usuario::getNombre($id);
	}
	
	static public function getAlumnosData($aId)
	{
		return DB::select('usu_usuario', 'usu_nombre', 'usu_apellido')
			->from('usuario')
			->where('usu_usuario', 'IN', $aId)
			->execute()
			->as_array();
	}
	
	static public function userExpresion($value)
	{
		if(preg_match("/^([a-zA-Z]{6,20}+)$/", $value))
			return TRUE;
		
		return FALSE;
	}
	
	static public function passExpresion($value)
	{
		if(preg_match("/^([a-zA-Z0-9]{6,12}+)$/", $value))
			return TRUE;
		
		return FALSE;
	}
	
}
