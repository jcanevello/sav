<?php defined('SYSPATH') or die('No direct script access.');

class Model_Archivo extends ORM {
	
	protected $_table_name = 'archivo';
	
	static public function newCodigo()
	{
		$cod_codigo = DB::select('arc_codigo')
			->from('archivo')
			->order_by('arc_fecha_registro', 'DESC')
			->limit(1)
			->execute();
		
		if( ! is_null($cod_codigo))
			$cod_codigo->as_array();
		
		return ($cod_codigo[0]['arc_codigo'] + 1);
	}
	
	static public function getIntegrantesArchivo($idArchivo)
	{
		return ORM::factory('Nota')
			->where('arc_codigo', '=', $idArchivo)
			->find_all();
	}
	
	static public function tieneArchivo($idTrabajo, $idAlumno)
	{
		$oNota = ORM::factory('Nota')
			->join('archivo')->on('archivo.arc_codigo', '=', 'nota.arc_codigo')
			->where('nota.usu_usuario', '=', $idAlumno)
			->where('archivo.tra_codigo', '=', $idTrabajo)
			->find();
		
		if( ! empty($oNota->usu_usuario))
			return TRUE;
		
		return FALSE;
	}
	
	static public function perteneceArchivo($idArchivo, $idAlumno)
	{
		$oNota = ORM::factory('Nota')
			->where('usu_usuario', '=', $idAlumno)
			->where('arc_codigo', '=', $idArchivo)
			->find();
		
		if( ! empty($oNota->usu_usuario))
			return TRUE;
		
		return FALSE;
	}
	
}
