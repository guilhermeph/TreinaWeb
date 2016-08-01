<?php

namespace classes;

class Conta{
    private $numeroDaConta;
    private $saldo;
    private $agencia;
    private $cliente;
    private $historicoDeOperacoes;
    
    public function __construct($numeroDaConta,$saldo,Agencia $agencia,Cliente $cliente,$historicoDeOperacoes = []) {
        $this->numeroDaConta = $numeroDaConta;
        $this->saldo = $saldo;
        $this->agencia = $agencia;
        $this->cliente = $cliente;
        $this->historicoDeOperacoes = $historicoDeOperacoes;
    }
    
    public function getNumeroDaConta(){
        return $this->numeroDaConta;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }
    
    public function getAgencia(){
        return $this->agencia;
    }
    
    public function getCliente(){
        return $this->cliente;
    }
    
    public function getHistoricoDeOperacoes(){
        return $this->historicoDeOperacoes;
    }
    
    public function debitaNaConta($valor){
        $data = date("d/m/Y H:i:s");
        $this->saldo = $this->saldo - $valor;
        
        array_push($this->historicoDeOperacoes, "Debitado valor de R$ $valor dia $data");
    } 
    
    public function creditaNaConta($valor){
        $data = date("d/m/Y H:i:s");
        $this->saldo = $this->saldo + $valor;
        array_push($this->historicoDeOperacoes, "Creditado valor de R$ $valor dia $data");
    }
}