<?php require 'config.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Newslleter</title>
	<link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/semantic.css">
	<link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css ">
</head>
<body>

<div class="ui container">
	<br>
	<a href="/" class="mini ui blue button"><i class="fa fa-user"></i> Voltar para o inicio</a>

	<?php 
	
	$user = new Acme\Models\User;
	$users = $user->listar();	
	?>
	
	<h3>Enviar email para <?php echo count($users);?> usuários</h3>
	
	<form action="" class="ui form" id="form-newsletter">
	
	<div class="field">
		<label>Assunto</label>
		<input type="text" name="assunto" placeholder="Assunto">
	</div>
	
	<div class="field">
		<label>Menssagem</label>
		<textarea rows="8" name="mensagem" placeholder="Mensagem"></textarea>
	</div>
	
	<button id="btn-enviar-newsletter" data-emails="<?php echo count($users);?>" class="mini ui orange button"><i class="fa fa-envelope"></i> Enviar Newsletter</button>
	<br>
	<br>
	
	<div id="carregando-emails"></div>
	<div id="emails-enviados"></div>
	<br>
	<br>
	<div id="enviado-para"></div>
	
	</form>

</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/newsletter.js"></script>
</body>
</html>