<?php

namespace Acme\Classes;

use Acme\Classes\Redirect;
use Acme\Models\Model;

class Login{
	
	private $password;
	private $redirect;
	
	public function __construct(){
		$this->password = new Password();
		$this->redirect = new Redirect();
	}
	
	public function verificarLogin($password,$hash){
		return $this->password->verificarPassword($password,$hash);
	}
	
	public function verificaLogado(Model $model){
		if(isset($_SESSION[$model->logged])){
			return true;
		}
		return false;
	}
	
	public function logout($redirect){
		session_destroy();
		Redirect::redirect($redirect);
	}
}