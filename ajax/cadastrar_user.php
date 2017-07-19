<?php 

require '../config.php';

use Acme\Models\User;

$user = new User;

$userCadastrado = $user->cadastrar([
	1 => $_POST['nome'],
	2 => $_POST['email'],
	3 => $_POST['newsletter']
]);

if($userCadastrado){
	echo 'usercadastrado';
}

?>