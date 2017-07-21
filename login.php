<?php 
require 'config.php';

//$password = new Acme\Classes\Password;
//$senha = $password->hash('123456');
//dump($senha);

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
  
    <h2 class="ui teal image header">
      <img src="assets/images/login.png" class="image">
      <div class="content">
        Logar para enviar newsletter
      </div>      
    </h2>
    <form class="ui large form" method="post" action="">
      <div class="ui stacked segment">
        <div class="field">
        <input type="hidden" name="logar">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail*">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Senha*">            
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
                  prompt : 'Por favor informe seu e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Por favor informe um e-mail válido'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Por favor informe sua senha'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Sua senha deve ter no minimo 6 caracteres'
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