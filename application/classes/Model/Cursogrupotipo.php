<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cursogrupotipo extends ORM {
	
	protected $_table_name = 'cursogrupo_tipo';
	
	static public function trabajosProfesor($id_user)
	{
		return (object)DB::select('trabajo.tra_codigo', 'trabajo.tra_nombre', 'curso.cur_nombre', array('curso_grupo.tab_codigo', 'tab_codigo_grupo'), array('cursogrupo_tipo.tab_codigo', 'tab_codigo_tipo'),'trabajo.tra_fecha_limite')
			->from('cursogrupo_tipo')
			->join('trabajo')->on('trabajo.cgt_codigo', '=', 'cursogrupo_tipo.cgt_codigo')
			->join('curso_grupo')->on('curso_grupo.cg_codigo', '=', 'cursogrupo_tipo.cg_codigo')
			->join('curso')->on('curso.cur_codigo', '=', 'curso_grupo.cur_codigo')
			->where('usu_usuario', '=', $id_user)
			->where('trabajo.tra_fecha_limite', '>', date('Ymd'))
			->execute();
	}
	
	static public function trabajosAlumno($id_user)
	{
		return (object)DB::select('trabajo.tra_codigo', 'trabajo.tra_nombre', 'curso.cur_nombre', array('curso_grupo.tab_codigo', 'tab_codigo_grupo'), array('cursogrupo_tipo.tab_codigo', 'tab_codigo_tipo'),'trabajo.tra_fecha_limite')
			->from('cursogrupo_tipo')
			->join('trabajo')->on('trabajo.cgt_codigo', '=', 'cursogrupo_tipo.cgt_codigo')
			->join('curso_grupo')->on('curso_grupo.cg_codigo', '=', 'cursogrupo_tipo.cg_codigo')
			->join('curso')->on('curso.cur_codigo', '=', 'curso_grupo.cur_codigo')
			->join('matricula')->on('matricula.cg_codigo', '=', 'curso_grupo.cg_codigo')
			->where('matricula.usu_usuario', '=', $id_user)
			->where('trabajo.tra_fecha_limite', '>', date('Ymd'))
			->execute();
	}
}
