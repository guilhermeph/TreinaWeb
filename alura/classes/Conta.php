<?php

namespace classes;

class Conta{
    private $valor;
    
    public function __construct($valor) {
        $this->valor = $valor;
    }
    
    public function getValor(){
        return $this->valor;
    }
    
    public function setValor($valor){
        $this->valor = $valor;
    }
}

