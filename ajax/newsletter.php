<?php 

require "../config.php";

use Acme\Models\User;
use Acme\Classes\Email;

$email = new Email();
$users = new User();

$emails = $users->listar();

$para = (isset($emails[$_POST['i']]->email)) ? $emails[$_POST['i']]->email : 'null';
$email->setQuem('falecom@myapk.com.br');
$email->setPara($para);
$email->setAssunto($_POST['assunto']);
$email->setMensagem($_POST['mensagem']);

if(isset($emails[$_POST['i']]->email) and !filter_var($emails[$_POST['i']]->email, FILTER_VALIDATE_EMAIL)){
	echo json_encode(['status' => 'erro','email'=> $emails[$_POST['i']]->email]);
}else{	
	if($email->enviarEmail()){
		echo json_encode('E-mail enviado para '.$emails[$_POST['i']]->email);
	}else{
		echo json_encode(['status' => 'fim']);
	}
}

?>

