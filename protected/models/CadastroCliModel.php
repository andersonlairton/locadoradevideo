<?php

class CadastroCliModel extends CFormModel
{
	public $nome;
	public $idade;
	public $email;
	public $telefone;

	public function rules()
	{
		return array(
			array('nome,idade,email,telefone','required'),
			array('email','email'),
			
		);
	}
}