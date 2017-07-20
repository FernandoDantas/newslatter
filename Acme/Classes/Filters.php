<?php 

namespace Acme\Classes;

class Filters{
	
	public function string($string){
		return filter_var($string,FILTER_SANITIZE_STRING);
	}
	
	public function int($int){
		return filter_var($int,FILTER_SANITIZE_NUMBER_INT);
	}
	
}


?>