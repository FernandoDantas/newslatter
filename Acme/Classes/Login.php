<?php 

namespace Acme\Classes;

use Acme\Classes\Password;
use Acme\Interfaces\Ilogin;

class Login{

   private $password;
   private $dadosUsuario;
   private $classePassword;
   private $email;
   private $usuario;

   public function __construct(Ilogin $login){

       $this->classePassword = new Password;
       if(method_exists($login, 'logar')){
           $this->usuario = $login;     
       } 

   }

   public function setEmail($email){
       $this->email = $email; 
   }

   public function setPassword($password){
      $this->password = $password;  
   }

   private function verificarPassword(){
      $this->dadosUsuario = $this->usuario->where('email',$this->tb_administrador_email);
      return $this->classePassword->verificarPassword($this->password,$this->dadosUsuario->tb_administrador_password);
   }     

   public function logar(){

        if($this->verificarPassword()){
			dump($logado);
            $logado = $this->usuario->logar($this->email,$this->password);
            if($logado){
                $_SESSION['logado'] = true;
                $_SESSION['nome'] = $this->dadosUsuario->tb_administrador_nome;
                session_regenerate_id();
                return true;
            }    
                return false;
        }    

   }
}