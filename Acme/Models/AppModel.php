<?php 

namespace Acme\Models;

class AppModel extends \ActiveRecord\Model{
	
	public function where($campo, $valor){
		return parent::find('first',['conditions'=>[$campo.'=?',$valor]]);
	}
	
	
}

?>