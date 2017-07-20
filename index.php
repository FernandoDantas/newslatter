<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Envio de emails</title>
	<link rel="stylesheet" type="text/css" href="bower_components/semantic/dist/semantic.css">
	<link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css ">
</head>
<body>

<div class="ui container">
<br>
<a href="login.php" class="mini ui blue button"><i class="fa fa-envelope"></i> Enviar newsletter</a>

<div id="mensagem" style="margin-top: 10px;"></div>

<h3>Cadastrar Usuario</h3>

<form  method="" class="ui form" id="form-cadastrar-user">


<div class="field">

	<label>Nome</label>
	<input type="text" name="nome" placeholder="Nome">
	
</div>

<div class="field">

	<label>E-Mail</label>
	<input type="email" name="email" placeholder="Email">
	
</div>


<div class="field">
	<label>Receber newsletter?</label>
	Sim<input type="radio" name="newsletter" value="1" checked="checked">
	Não<input type="radio" name="newsletter" value="2">
</div>

<button id="btn-cadastrar-user" class="mini ui orange button"><i class="fa fa-database"></i> Cadastrar Usuario</button>

</form>

</div>


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/cadastrar_user.js"></script>
</body>
</html>