<?php 

if(isset($_POST['logar'])){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	
	$login = new Acme\Classes\Login(new Acme\Models\AdministradorModel());
	$login-setEmail($email);
	$login->setPassword($password);
	$logado = $login->logar();
	
	dump($logado);
	
	$logadoSistema = ($logado) ? 'redirecionar' : 'erro ao logar';
	dump($logadoSistema);    
}


?>