<?php defined('SYSPATH') or die('No direct script access.');

class Model_Curso extends ORM {
	
	protected $_table_name = 'curso';
	
	static public function getCursosUsuario($id_user)
	{
		return DB::select('curso.cur_codigo', 'curso.cur_nombre')
			->from('curso')
			->join('curso_grupo')->on('curso_grupo.cur_codigo', '=', 'curso.cur_codigo')
			->join('cursogrupo_tipo')->on('cursogrupo_tipo.cg_codigo', '=', 'curso_grupo.cg_codigo')
			->where('cursogrupo_tipo.usu_usuario', '=', $id_user)
			->group_by('curso.cur_codigo')
			->execute();
		
	}
	
	static public function getGrupos($idCurso)
	{
		return DB::select('curso_grupo.cg_codigo', 'tabla_tabla.tab_nombre')
			->from('tabla_tabla')
			->join('curso_grupo')->on('curso_grupo.tab_codigo', '=', 'tabla_tabla.tab_codigo')
			->where('curso_grupo.cur_codigo', '=', $idCurso)
			->execute()
			->as_array();
	}
	
	static public function getTipos($idGrupo, $idUsuario)
	{
		return DB::select('cursogrupo_tipo.cgt_codigo', 'tabla_tabla.tab_nombre')
			->from('tabla_tabla')
			->join('cursogrupo_tipo')->on('cursogrupo_tipo.tab_codigo', '=', 'tabla_tabla.tab_codigo')
			->where('cursogrupo_tipo.cg_codigo', '=', $idGrupo)
			->where('cursogrupo_tipo.usu_usuario', '=', $idUsuario)
			->execute()
			->as_array();
	}
	
	static public function cursosMatriculados($idUser)
	{
		return DB::select('curso_grupo.cur_codigo', 'curso_grupo.cg_codigo', 'cursogrupo_tipo.cgt_codigo', 'cursogrupo_tipo.usu_usuario')
			->from('cursogrupo_tipo')
			->join('curso_grupo')->on('curso_grupo.cg_codigo', '=', 'cursogrupo_tipo.cg_codigo')
			->join('matricula')->on('matricula.cg_codigo', '=', 'curso_grupo.cg_codigo')
			->where('matricula.usu_usuario', '=', $idUser)
			->execute()
			->as_array();
	}
	
	static public function getNombreCurso($idCurso)
	{
		$value =  DB::select('cur_nombre')
			->from('curso')
			->where('curso.cur_codigo', '=', $idCurso)
			->execute()
			->as_array();
		
		return $value[0]['cur_nombre'];
	}
	
}
