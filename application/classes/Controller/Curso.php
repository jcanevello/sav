<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Curso extends Controller_Sav {
	
	public function action_index()
	{	
		$aCurso = Model_Curso::cursosMatriculados($this->oUser->usu_usuario);
		
		$this->template->content = View::factory('curso/cursoporalumno')
			->set('aCurso', $aCurso);
	}
	
	public function action_getGrupos()
	{
		$aGrupo = Model_Curso::getGrupos($this->request->post('idCurso'));
		
		die(json_encode(array('data' => $aGrupo)));
	}
	
	public function action_getTipos()
	{
		$aTipos = Model_Curso::getTipos($this->request->post('idGrupo'), $this->oUser->usu_usuario);
		
		die(json_encode(array('data' => $aTipos)));
	}
	
	
	
		
	

}
