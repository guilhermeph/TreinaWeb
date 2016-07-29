<?php

class Validacao{
    private $string;
    
    public function __construct($string) {
        $this->string = $string;
    }
    
    
    
    public function validaStringVazia(){
        if($this->string == ''){
            return true;
        }else{
            return false;
        }
    }
    
    public function validaTamanhoString(){
        
        $regex = '/^[a-zA-Z0-9]{3,10}$/';
        
        if(preg_match($regex, $this->string)){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function validaTipoString(){
        
        $regex = '/^[0-9]{0,}$/';
        
        if(preg_match($regex, $this->string)){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function valida(){
        $array = [];
        if($this->validaStringVazia()){
            array_push($array, 'String vazia');
        }else{
            array_push($array, 'String não é vazia');
        }
        
        if($this->validaTamanhoString()){
            array_push($array, 'Tamanho dentro do range esperado');
        }else{
            array_push($array, 'String Inválida, no mínimo 3, no máximo 10 caracteres');
        }
        
        if($this->validaTipoString()){
            array_push($array, 'A String é um numeral');
        }else{
            array_push($array, 'Não é um numeral');
        }
        
        $array = implode("<br>", $array);
        
        return $array;
    }
    
}