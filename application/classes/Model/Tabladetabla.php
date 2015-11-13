<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tabladetabla extends ORM {
	
	protected $_table_name = 'tabla_tabla';
	
	static public function getValue($id_tabla)
	{
		$value =  DB::select('tab_nombre')
			->from('tabla_tabla')
			->where('tab_codigo', '=', $id_tabla)
			->execute()
			->as_array();
		
		return $value[0]['tab_nombre'];
	}
	
	static public function getTabla($tabla)
	{
		return $value =  DB::select('tab_codigo', 'tab_nombre', 'tab_valor')
			->from('tabla_tabla')
			->where('tab_tabla', '=', $tabla)
			->execute()
			->as_array();
	}
	
	static public function getNombreGrupo($idGrupo)
	{
		$value =  DB::select('tab_nombre')
			->from('tabla_tabla')
			->join('curso_grupo')->on('curso_grupo.tab_codigo', '=', 'tabla_tabla.tab_codigo')
			->where('curso_grupo.cg_codigo', '=', $idGrupo)
			->execute()
			->as_array();
		
		return $value[0]['tab_nombre'];
	}
	
	static public function getNombreTipo($idTipo)
	{
		$value =  DB::select('tab_nombre')
			->from('tabla_tabla')
			->join('cursogrupo_tipo')->on('cursogrupo_tipo.tab_codigo', '=', 'tabla_tabla.tab_codigo')
			->where('cursogrupo_tipo.cgt_codigo', '=', $idTipo)
			->execute()
			->as_array();
		
		return $value[0]['tab_nombre'];
	}
	
	
	
}
