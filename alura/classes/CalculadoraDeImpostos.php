<?php

namespace classes;

class CalculadoraDeImpostos{
    
    /**
    public function calculaICMS(Orcamento $orcamento){
        return $orcamento->getValor() * 0.05;
    }
    
    public function calculaISS(Orcamento $orcamento){
        return $orcamento->getValor() * 0.10;
    }*/
    
    public function calcula(Orcamento $orcamento, Imposto $imposto){
            
        return $imposto->calcula($orcamento);
        
    }
}