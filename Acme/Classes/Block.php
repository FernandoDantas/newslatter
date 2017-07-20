<?php
namespace Acme\Classes;

use Acme\Classes\Redirect;
use Acme\Classes\User;
use Acme\Models\AdministradorModel;

class Block{

   private $user;
   private $redirect;

   public function __construct(){
      $user = new User(new AdministradorModel);
      $this->user = $user->user();

      $this->redirect = new Redirect();
   }

   public function block(){
      if(!$this->user){
         $this->redirect->redirect('/newsletter.php');
      }
   }

   public function blockNotAdmin($id){
      if($this->user->tb_administrador != $id || !$this->user){
         $this->redirect->redirect('/newsletter.php');
      }
   }

}