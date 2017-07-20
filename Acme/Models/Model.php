<?php

namespace Acme\Models;

use Acme\Models\Conexao;

abstract class Model{

    public $pdo;

    public function __construct(){
        $this->pdo = Conexao::conectar();
    }

    public function fetchAll(){
        $sql = "select * from $this->table";
        $list = $this->pdo->query($sql);
        return $list->fetchAll();
    }

    public function find($campo,$valor,$tipo=null){
        $this->sql = "select * from $this->table where $campo = ?";
        $list = $this->pdo->prepare($this->sql);
        $list->bindValue(1,$valor);
        $list->execute();
        return ($tipo == null) ? $list->fetch() : $list->fetchAll();
    }

    public function findUpdate($campo,$value,$id){
        $sql = "select * from $this->table where $campo = ? and id != ?";
        $list = $this->pdo->prepare($sql);
        $list->bindValue(1,$value);
        $list->bindValue(2,$id);
        $list->execute();
        return $list->fetch();
    }

    public function delete($campo,$valor){
        $sql = "delete from $this->table where $campo = ?";
        $delete = $this->pdo->prepare($sql);
        $delete->bindValue(1,$valor);
        $delete->execute();
        return ($delete->rowCount() == 1) ? true : false;
    }

    abstract function create($attributes);
    abstract function update($id,$attributes);

}
