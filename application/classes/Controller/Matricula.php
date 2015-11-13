	<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Matricula extends Controller_Sav {
	
	public function action_index()
	{	
		$aCurso = ORM::factory('Curso')->find_all();
		
		$this->template->content = View::factory('matricula/list')
			->set('aCurso', $aCurso);
	}
	
	public function action_new()
	{
		if($this->request->method() == 'POST')
		{
			$aCurso = $this->request->post('grupos');
			
			foreach ($aCurso as $oCurso)
			{
				if( ! empty($oCurso))
				{
					$oMatricula = ORM::factory('Matricula');
					$oMatricula->usu_usuario = $this->oUser->usuario->usu_usuario;
					$oMatricula->cg_codigo = $oCurso;
					$oMatricula->save();
				
				}
			}
		}
		$this->redirect('/panel');
	}
	
	public function action_alumnos()
	{
		
		$aCurso = Model_Curso::getCursosUsuario($this->oUser->usu_usuario);
		
		$this->template->content = View::factory('matricula/alumnoporcurso')
			->set('aCurso', $aCurso);
	}
	
	public function action_getAlumnos()
	{
		$aIdAlumnos = Model_Matricula::getAlumnos($this->request->post('idTipo'));
		$ids = array();
		
		foreach ($aIdAlumnos as $oIdAlumnos) 
		{
			array_push($ids, $oIdAlumnos["usu_usuario"]);
		}
		
//		foreach (Auth_Usuario::getAlumnosData($ids) as $value)
//		{
//			echo Debug::vars($value);
//		}
//		
//		die();
		
		die(json_encode(array('status' => 'OK', 'data' => Auth_Usuario::getAlumnosData($ids))));
	}
}
