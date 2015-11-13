<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sav extends Controller_Template {

	public $template = 'template';
	
	public $header = 'header';
	
	public $navbar = 'navbar';
	
	public $footer = 'footer';
	
	public $oUser = null;
	
	public function before() 
	{
		parent::before();
		
		$this->oUser = Acceso_Usuario::getUsuario(Session::instance()->get('user'));
		
		if( ! empty($this->oUser))
		{
//			$this->template->permisos = $this->oUser->permisos;
			$this->template->header = View::factory('header')
				->set('perfil', $this->oUser->perfil)
				->set('oUser', $this->oUser->usuario);
			$this->template->navbar = View::factory('navbar')
				->set('permisos', $this->oUser->permisos);
			$this->template->footer = View::factory('footer');
		}
		else
		{
			$this->redirect('/login');
		}
	}
	
	public function after()
	{
		parent::after();
	}
} // End Welcome
