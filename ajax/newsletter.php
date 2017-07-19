<?php 

require '../config.php';

use Acme\Models\User;
use Acme\Classes\Email;

$email = new Email;
$user = new User;

$emails = $user->listar();

$para = isset($emails[$_POST['i']]->email) ? $emails[$_POST['i']]->email : 'null';
$email->setQuem('falecom@myapk.com.br');
$email->setPara($para);
$email->setAssunto($_POST['assunto']);
$email->setMensagem($_POST['mensagem']);

if($email->enviarEmail()){
	echo 'E-Mail enviado para '.$emails[$_POST['i']]->email;
}else{	
	//var_dump($emails);
	var_dump($email);
	if(($_POST['i']+1) < count($emails)){
		echo 'erro';
	}else{
		echo 'fim';
	}
	
	
}

?>