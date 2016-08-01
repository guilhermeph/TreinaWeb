<?php

namespace Banco;

/**
* Classe clientes
*/
class Cliente
{

	private $nome;
	private $email;
	private $endereco;
	
	function __construct($nome, $email, $telefone)
	{
		$this->nome = $nome;
		$this->email = $email;
		$this->telefone = $telefone;
	}

}