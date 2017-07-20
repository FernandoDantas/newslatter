<?php

namespace Acme\Classes;

class Redirect{

    public static function redirect($route = null){
        if($route == null){
            header('Location: /');
        }
        header("Location: $route");
    }

    public static function back(){
        if(isset($_SESSION['rotas'])){
            return header('Location:'.$_SESSION['rotas'][0]);
        }
        trigger_error('Houve um erro no redirecionamento');
    }

}