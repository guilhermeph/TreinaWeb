<?php

namespace classes;

class poupanca extends Conta{
    private $porcentagemDeRetornoAoMes;
    
    public function __construct($porcentagemDeRetornoAoMes){
        $this->porcentagemDeRetornoAoMes = $porcentagemDeRetornoAoMes;
    }
    
    public function valorTotalNoMes(){
        
    }
    
    public function getPorcentagemDeRetornoAoMes(){
        return $this->porcentagemDeRetornoAoMes;
    }
    
}

