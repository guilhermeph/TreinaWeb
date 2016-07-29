<?php

class Cliente{
    private $nome;
    private $email;
    private $endereco;
    
    public function __construct($nome, $email, $endereco){
        $this->nome = $nome;
        $this->email = $email;
        $this->endereco = $endereco;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }
    
}