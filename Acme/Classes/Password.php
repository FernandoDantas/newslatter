<?php 
namespace Acme\Classes;

class Password{
	
	public static function hash($password){
		$options = [
				'cost' => 11
		];
		return password_hash($password,PASSWORD_DEFAULT,$options);
	}
	
	public static function verificarPassword($password,$hash){
		if(password_verify($password,$hash)){
			return true;
		}
		return false;
	}
	
}

?>