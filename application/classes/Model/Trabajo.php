<?php defined('SYSPATH') or die('No direct script access.');

class Model_Trabajo extends ORM {
	
	protected $_table_name = 'trabajo';
	
	static public function newCodigo()
	{
		$cod_codigo = DB::select('tra_codigo')
			->from('trabajo')
			->order_by('tra_fecha_registro', 'DESC')
			->limit(1)
			->execute();
		
		if( ! is_null($cod_codigo))
			$cod_codigo->as_array();
		
		return ($cod_codigo[0]['tra_codigo'] + 1);
	}
	
	static public function getArchivos($idTrabajo)
	{
		return DB::select('*')
			->from('archivo')
			->where('tra_codigo', '=', $idTrabajo)
			->execute()
			->as_array();
	}
	
	static public function formaTrabajo($idTrabajo)
	{
		$forma =  DB::select('tabla_tabla.tab_valor')
			->from('trabajo')
			->join('tabla_tabla')->on('tabla_tabla.tab_codigo', '=', 'trabajo.tab_codigo')
			->where('trabajo.tra_codigo', '=', $idTrabajo)
			->execute()
			->as_array();
		
		return ($forma[0]['tab_valor']);
	}
	
	static public function getAlumnos($idTrabajo)
	{
		return DB::select('matricula.usu_usuario')
			->from('trabajo')
			->join('cursogrupo_tipo')->on('cursogrupo_tipo.cgt_codigo', '=', 'trabajo.cgt_codigo')
			->join('curso_grupo')->on('curso_grupo.cg_codigo', '=', 'cursogrupo_tipo.cg_codigo')
			->join('matricula')->on('matricula.cg_codigo', '=', 'curso_grupo.cg_codigo')
			->where('trabajo.tra_codigo', '=', $idTrabajo)
			->execute()
			->as_array();
	}
	
	
}
