<?php defined('SYSPATH') or die('No direct script access.');

class Model_Matricula extends ORM {
	
	protected $_table_name = 'matricula';

	static public function getMatricula($idAlumno)
	{
		return DB::select()
			->from('matricula')
			->where('usu_usuario', '=', $idAlumno)
			->execute()
			->as_array();
	}
	
	static public function getAlumnos($idTipo)
	{
		return DB::select('matricula.usu_usuario')
			->from('matricula')
			->join('curso_grupo')->on('curso_grupo.cg_codigo', '=', 'matricula.cg_codigo')
			->join('cursogrupo_tipo')->on('cursogrupo_tipo.cg_codigo', '=', 'curso_grupo.cg_codigo')
			->where('cursogrupo_tipo.cgt_codigo', '=', $idTipo)
			->execute()
			->as_array();
	}
	
}
