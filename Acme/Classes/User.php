<?php

namespace Acme\Classes;

class User{

   private $user;

   public function __construct($model){
      $this->user = $model;
   }

   public function user(){
      if(isset($_SESSION[$this->user->id_session])){
         return $this->user->find('id',$_SESSION[$this->user->id_session]);
      }
      return false;
   }

}