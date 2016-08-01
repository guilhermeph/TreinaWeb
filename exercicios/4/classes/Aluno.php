<?php

namespace classes;

class Aluno{
    
    private $id;
    private $nome;
    private $curso;
    private $idade;
    private $email;
    private $password;
    
    public function __construct($nome, $curso, $idade, $email, $password) {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->idade = $idade;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getCurso(){
        return $this->curso;
    }
    
    public function getIdade(){
        return $this->idade;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
}