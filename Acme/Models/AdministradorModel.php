<?php

namespace Acme\Models;

use Acme\Models\Model;

class AdministradorModel extends Model{
	
	public $table = 'tb_administrador';
	public $id_session = 'id_admin';
	public $logged = 'logado_admin';
	
	public function create($attributes){
		
	}
	public function update($id,$attributes){
		
	}
}