<?php

namespace Acme\Classes;

class Email extends \PHPMailer{
	
	private $email;
	private $quem;
	private $para;
	private $assunto;
	private $mensagem;
	
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
	
	public function enviarEmail(){
		$this->CharSet = "UTF-8";
		$this->SMTPSecure = "ssl";
		$this->IsSMTP();
		$this->Host = "";
		$this->Port = '';
		$this->SMTPAuth = true;
		$this->Username = "";
		$this->Password = "";
		$this->IsHTML(true);
		$this->email->setFrom('crm@maceioautopremium.com.br');
		$this->FromName = $this->quem;
		$this->AddAddress($this->para);
		$this->Subject = $this->assunto;
		$this->AltBody = "Para ver esse email tenha certeza de estar vendo em um programa que aceite ver html";
		$this->MsgHTML($this->mensagem);
		
		if (!$this->email->Send()) {
			$this->erro = $this->email->ErrorInfo;
			return false;
		} else {
			return true;
		}
	}
}
	