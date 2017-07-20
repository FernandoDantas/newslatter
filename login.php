<?php

require 'config.php';

use Acme\Classes\Login;
//use Acme\Classes\Password;
use Acme\Classes\Filters;
use Acme\Models\AdministradorModel;
use Acme\Classes\Redirect;

//$password = new Password;
//dump($password->hash('123456'));
$erro = null;
if(isset($_POST['admin_logar'])){
	
	$filter = new Filters();
	
	$email = $filter->string($_POST['email']);
	$password = $filter->string($_POST['password']);
	
	
	$administrador = new AdministradorModel;
	$admin = $administrador->find('email', $email);
	
	
	if($admin){
		$login = new Login();
		$logado = $login->verificarLogin($password,$admin->password);
		
		if($logado){
			$_SESSION['name'] = $admin->name;
			$_SESSION['id'] = $admin->id;
			$_SESSION['logado'] = true;
			//header('Location:/newsletter.php');
			//session_regenerate_id();
			return Redirect::redirect('/newsletter.php');
		}else{
			$erro = 'Ocorreu um erro ao logar';
		}
		
	}else{
		$erro = 'Ocorreu um erro ao logar';
		
	}	
	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login newsletter</title>
    <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/semantic.css">
	<link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css ">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/components/icon.css">
    
  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  
    
</head>
<body>

 <div class="ui middle aligned center aligned grid">
  <div class="column">
  <?php 
  
  if ($erro != null):
  	echo '<div class="ui negative message">
               <p>'.$erro.'</p>
		  </div>';
  endif;
  ?>
    <h2 class="ui teal image header">
      <img src="assets/images/login.png" class="image">
      <div class="content">
        Logar para enviar newsletter
      </div>      
    </h2>
    <form class="ui large form" method="post" action="">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
            <input type="hidden" name="admin_logar">
          </div>
        </div>
        <div class="ui fluid large blue submit button">Logar</div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
     <a href="/">Voltar para o inicio</a>
    </div>
  </div>
</div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>    
    <script src="bower_components/semantic/dist/semantic.min.js"></script>
     <script src="bower_components/semantic/dist/components/form.js"></script>
  <script src="bower_components/semantic/dist/components/transition.js"></script>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>  
</body>
</html>