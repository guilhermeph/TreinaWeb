<?php

namespace classes;

class Corrente extends Conta{
    
    private $limiteDeCredito;
    private $porcentagemDeJuros;
    
    public function __construct($limiteDeCredito, $porcentagemDeJuros){
        $this->limiteDeCredito;
        $this->porcentagemDeJuros;
    }
    
    public function valorTotalComJuros(){
        
    }
    
    public function getLimiteDeCredito(){
        return $this->limiteDeCredito;
    }
    
    public function getPorcentagemDeJuros(){
        return $this->porcentagemDeJuros;
    }
    
}