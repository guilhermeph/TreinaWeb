<?php

namespace classes;

class Agencia{
    private $codigo;
    private $endereco;
    
    public function __construct($codigo, $endereco) {
        $this->codigo = $codigo;
        $this->endereco = $endereco;
    }
    
    public function getCodigo(){
        return $this->codigo;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
    
}