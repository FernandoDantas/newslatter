<?php 

namespace  Acme\Models;
use  PDO;

class Conexao{
	
	public static function conectar(){
		$pdo = new PDO("mysql:host=localhost;dbname=newslatter","root","q1w2e3");
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $pdo;
	}
	
	
}

?>
