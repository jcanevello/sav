<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {
	
	public function action_index()
	{
		$this->response->body(View::factory('login')->set('error', null));
	}
	
	public function action_initsession()
	{
		if($this->request->method() == 'POST')
		{
			$oUser  = Acceso_Usuario::acceso($this->request->post());
			
			if($oUser->status == 'ERROR')
			{
				$view = View::factory('login')
					->set('error', $oUser->data);
				
				$this->response->body($view);
			}
			else
			{
				Session::instance()->set('user', $oUser->data);
				$this->redirect('/panel');
			}
		}
	}
	
	
	public function action_logout() 
	{
		$session = Session::instance();
		$session->destroy();
		$this->redirect('/panel');
	}

}
