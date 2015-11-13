<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Panel extends Controller_Sav {
	
	public function action_index() 
	{
		$this->template->content = View::factory('panel')
			->set('permisos', $this->oUser->permisos)
			->set('matricula', Model_Matricula::getMatricula($this->oUser->usuario->usu_usuario));
	}

}
