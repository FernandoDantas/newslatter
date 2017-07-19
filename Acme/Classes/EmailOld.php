<?php 

namespace Acme\Classes;

use Acme\Interfaces\MensagemInterface;

class EmailOld{
	
	private $email;
	private $quem;
	private $para;
	private $assunto;
	private $mensagem;
	private $erro;
	
	public function setQuem($quem){
		$this->quem = $quem;
	}
	
	public function setPara($para){
		$this->para = $para;
	}
	
	public function setAssunto($assunto){
		$this->assunto = $assunto;
	}
	
	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}
	
	public function __construct(){
		$this->email = new \PHPMailer;
	}
	
	public function enviarEmail(MensagemInterface $mensagem){
		$this->email->CharSet = 'UTF-8';
		$this->email->SMTPSecure = 'ssl';
		$this->email->isSMTP();
		$this->email->Host = '';
		$this->email->Port = '';
		$this->email->SMTPAuth = true;
		$this->email->Username = '';
		$this->email->Password = '';
		$this->email->isHTML(true);
		$this->email->setFrom('crm@maceioautopremium.com.br');
		$this->email->FromName = $this->quem;
		$this->email->addAddress($this->para);
		$this->email->Subject = $this->assunto;
		$this->email->AltBody = 'Para ver este email tenha certeza de estar vendo em um programa que aceite ver html';
		$this->MsgHTML();
		
		if(!$this->email->send()){
			return false;
		}
		return true;
	}
	
}

?>