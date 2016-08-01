<?php
require("Autoloader.php");

use classes\Aluno;
use classes\AlunoDAO;

$autoloader = new Autoloader();

$autoloader->registrar();

$aluno = new Aluno($_POST['nome'], $_POST['curso'], $_POST['idade'], $_POST['email'], $_POST['password']);
$alunoDAO = new AlunoDAO($conexao);

if($alunoDAO->cadastra($aluno)){
    echo "Aluno cadastrado com sucesso";
}else{
    echo "Corrige essa merda";
}


var_dump($aluno);