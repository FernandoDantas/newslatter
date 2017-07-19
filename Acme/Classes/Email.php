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
		$this->email->CharSet = "UTF-8";
		$this->email->SMTPSecure = "tls";//ssl
		$this->email->IsSMTP();
		$this->email->Host = "mx1.hostinger.com.br";
		$this->email->Port = 587;
		$this->email->SMTPAuth = true;
		$this->email->Username = "falecom@myapk.com.br";
		$this->email->Password = "346606jr";
		$this->email->IsHTML(true);
		$this->email->setFrom('falecom@myapk.com.br');
		$this->email->FromName = $this->quem;
		$this->email->AddAddress($this->para);
		$this->email->Subject = $this->assunto;
		$this->email->AltBody = "Para ver esse email tenha certeza de estar vendo em um programa que aceite ver html";
		$this->email->MsgHTML($this->mensagem);
		
		if (!$this->email->Send()) {
			$this->erro = $this->email->ErrorInfo;
			return false;
		} else {
			return true;
		}
	}
}
	