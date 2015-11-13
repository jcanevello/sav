<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Trabajo extends Controller_Sav {
	
	public function action_index()
	{	
		if($this->oUser->perfil == 'Profesor') //Tipo profe
			$aTrabajo = Model_Cursogrupotipo::trabajosProfesor($this->oUser->usuario->usu_usuario);
		else
			$aTrabajo = Model_Cursogrupotipo::trabajosAlumno($this->oUser->usuario->usu_usuario);
		
		$this->template->content = View::factory('trabajo/list')
			->set('aTrabajo', $aTrabajo)
			->set('perfil', $this->oUser->perfil);
	}
	
	public function action_new()
	{
		if($this->request->method() == 'POST')
		{
			$oTrabajo = ORM::factory('Trabajo');
			$oTrabajo->values($this->request->post());
			$oTrabajo->tra_slug = $this->request->post('cgt_codigo'). '-' .URL::title($this->request->post('tra_nombre'));
			$fecha = date('Ymd', strtotime($this->request->post('tra_fecha_limite')));
			$fecha_actual = date('Ymd');
			
			$oTrabajo->tra_fecha_limite = date('Ymd', strtotime($this->request->post('tra_fecha_limite')));
			$oTrabajo->tra_codigo = Model_Trabajo::newCodigo();
			$oTrabajo->tra_fecha_registro = date('YmdHis');
			
			if($this->request->post('tab_codigo') == 15)
				$oTrabajo->tra_cantidad_alum = 1;
			
			$oTrabajo->save();
			
			$this->redirect('/trabajo');
		}
		
		$aCurso = Model_Curso::getCursosUsuario($this->oUser->usuario->usu_usuario);
		$aTipo = Model_Tabladetabla::getTabla('TRABAJO');
		$view = View::factory('trabajo/new')
			->set('aCurso', $aCurso)
			->set('aTipo', $aTipo);
		
		$this->template->content = $view;
	}
	
	public function action_delete()
	{
		$oTrabajo = ORM::factory('Trabajo')
			->where('tra_codigo', '=', $this->request->param('id'))
			->find();
		
		if( !empty($oTrabajo->tra_codigo))
			DB::delete ('trabajo')
			->where ('tra_codigo', '=', $oTrabajo->tra_codigo)
			->execute();
		
		$this->redirect('/trabajo');
	}
	
	
		
	

}
