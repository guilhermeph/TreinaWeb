<?php

namespace classes;

class Conservador implements Investimento{
    public function realizaInvestimento(Conta $conta){
        $valorComInvestimento = $conta->getValor() * 0.008;
        
        $valorTotal = $valorComInvestimento * 0.75;
        
        $conta->setValor($conta->getValor() + $valorTotal);
        
        return $valorTotal;
        
    }
}
