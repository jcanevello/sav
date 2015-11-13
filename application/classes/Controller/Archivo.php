<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Archivo extends Controller_Sav {
	
	public function action_index()
	{	
		$this->redirect('/trabajo');
	}
	
	public function action_list()
	{
		$idTrabajo = $this->request->param('id');
		
		if(isset($idTrabajo))
		{
			$aArchivoProfesor = array();
			$aArchivoAlumno = array();
			
			$aArchivo = Model_Trabajo::getArchivos($idTrabajo);
			
			
			foreach ($aArchivo as $oArchivo)
			{
				if(Model_Auth_Usuario::getPerfil($oArchivo['usu_usuario']) == 'P002')
					array_push($aArchivoProfesor, $oArchivo);
				else
					array_push($aArchivoAlumno, $oArchivo);
			}
			
			$view = View::factory('archivo/list')
				->set('aArchivoProfesor', $aArchivoProfesor)
				->set('aArchivoAlumno', $aArchivoAlumno)
				->set('idTrabajo', $idTrabajo)
				->set('oUser', $this->oUser);
			
			$this->template->content = $view;
		}
		else
		{
			$this->redirect('/trabajo');
		}
		
	}
	
	public function action_new()
	{
		$idTrabajo = $this->request->param('id');
		
		if(isset($idTrabajo))
		{
			$formaTrabajo = Model_Trabajo::formaTrabajo($idTrabajo);
			
			if($this->request->method() == 'POST')
			{
				$oArchivo = ORM::factory('Archivo');
				$oArchivo->arc_codigo = Model_Archivo::newCodigo();
				$oArchivo->tra_codigo = $idTrabajo;
				$oArchivo->tab_codigo = 12;
				$oArchivo->arc_nombre = $this->request->post('arc_nombre');
				$oArchivo->arc_slug = $this->saveArchivo($_FILES['archivo']);
				$oArchivo->usu_usuario = $this->oUser->usu_usuario;
				$oArchivo->arc_fecha_registro = date('YmdHis');
				$oArchivo->save();
				
				$this->saveIntegrantes($oArchivo->arc_codigo);
				
				$this->redirect('/archivo/list/' . $idTrabajo);
			}
			
			$view = View::factory('archivo/new')
				->set('idTrabajo', $idTrabajo)
				->set('formaTrabajo', $formaTrabajo)
				->set('aAlumno', Model_Trabajo::getAlumnos($idTrabajo))
				->set('oUser', $this->oUser);
			
			$this->template->content = $view;
		}
		else
		{
			$this->redirect('/trabajo');
		}
	}
	
	public function saveArchivo($files)
	{
		$dir = DOCROOT . 'files';
		$ext = pathinfo($files['name'], PATHINFO_EXTENSION);
		$slug = strtolower(Text::random('alnum', 10)) . '.' . $ext;
		$file = Upload::save($files, $slug, $dir);
		
		return $slug;
	}
	
	public function saveIntegrantes($idArchivo)
	{
		if($this->oUser->per_codigo == 'P001')
		{
			$aAlumno = $this->request->post('integrantes');
			
			if(empty($aAlumno)) $aAlumno = array();
						
			array_push($aAlumno, $this->oUser->usu_usuario);
			
			foreach ($aAlumno as $oAlumno)
			{
				$oNota = ORM::factory('Nota');
				
				$oNota->usu_usuario = $oAlumno;
				$oNota->arc_codigo = $idArchivo;
				$oNota->save();
			}
		}
	}
	
	public function action_descargarArchivo()
	{
		$oArchivo = ORM::factory('Archivo')
			->where('arc_codigo', '=', $this->request->param('id'))
			->find();
		
		$this->template->content = View::factory('archivo/descarga')
			->set('slug', $oArchivo->arc_slug);
	}
	
	public function action_delete()
	{
		$oArchivo = ORM::factory('Archivo')
			->where('arc_codigo', '=', $this->request->post('idArchivo'))
			->find();
		
		if( !empty($oArchivo->arc_codigo))
		{
			DB::delete ('archivo')
			->where ('arc_codigo', '=', $oArchivo->arc_codigo)
			->execute();
			
			die(json_encode(array('status' => 'OK')));
		}
		else
		{
			die(json_encode(array('status' => 'ERROR')));
		}
		
		
	}
		
	
}
