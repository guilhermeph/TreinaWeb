<?php

namespace classes;

class Moderado implements Investimento{
    public function realizaInvestimento(Conta $conta){
        
        $porcentagem = mt_rand(1, 2);
        
        if($porcentagem == 1){
            $valorComInvestimento = $conta->getValor() * 0.025;
        }else{
            $valorComInvestimento = $conta->getValor() * 0.007;
        }
        
        $valorTotal = $valorComInvestimento * 0.75;
        
        $conta->setValor($conta->getValor() + $valorTotal);
        
        return $valorTotal;        
        
    }
}