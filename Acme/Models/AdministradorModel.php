<?php

namespace Acme\Models;

use Acme\Interfaces\Ilogin;
use Acme\Models\AppModel;

class AdministradorModel extends AppModel implements Ilogin{
	
	static $table_name = 'tb_administrador';
	
	public function logar($email,$password){
		$administrador = parent::find('first',['conditions'=>['tb_administrador_email=? and tb_admin_password=?',$email,$password]]);
		return (count($administrador) == 1) ? true : false;
	}
}