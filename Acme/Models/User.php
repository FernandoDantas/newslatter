<?php 

namespace Acme\Models;

use Acme\Models\Conexao;

class User{
	
	private  $pdo;
	private  $table = 'users';
	
	public function __construct(){
		$this->pdo = Conexao::conectar();
	}
	
	public function listar(){
		$sql = "select * from $this->table where newsletter = 1";
		$listar = $this->pdo->prepare($sql);
		$listar->execute();
		return $listar->fetchAll();
	}
		
	public function cadastrar($attributes){
		$sql = "insert into $this->table(name, email, newsletter) values(?,?,?)";
		$cadastar = $this->pdo->prepare($sql);
		foreach($attributes as $key=>$value){
			$cadastar->bindValue($key,$value);
		}
		$cadastar->execute();
		return $this->pdo->lastInsertId();
	}
	
}

?>