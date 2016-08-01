<?php
namespace classes;
class AlunoDAO{
    
    private $conexao;
    
    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function cadastra(Aluno $aluno){
        
        $senha = md5($aluno->getPassword());
        
        $sql = "insert into alunos (nome, curso, idade, email, password) values (:nome, :curso, :idade, :email, :password)";
        
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(':nome', $aluno->getNome());
        
        $stmt->bindValue(':curso', $aluno->getCurso());
        
        $stmt->bindValue(':idade', $aluno->getIdade());
        
        $stmt->bindValue(':email', $aluno->getEmail());
        
        $stmt->bindValue(':password', $senha);
        
        return $stmt->execute();
        
    }
    
}