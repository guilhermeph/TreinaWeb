<?php

$dsn = 'mysql:host=localhost;port=3306;dbname=exercicio;charset=utf8';
$usuario = 'root';
$senha = 'asm15052014';

$opcoes = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];



try{
    $conexao = new PDO($dsn, $usuario, $senha, $opcoes);
    return $conexao;
} catch (Exception $ex) {
    exit('Erro: ' . $ex->getMessage());
}