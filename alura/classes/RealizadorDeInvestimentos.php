<?php

namespace classes;

class RealizadorDeInvestimentos{
    
    public function realizaInvestimento(Conta $conta, Investimento $investimento){
        return $investimento->realizaInvestimento($conta);
    }
    
}