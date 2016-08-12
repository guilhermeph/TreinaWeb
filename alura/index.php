<?php

require 'Autoloader.php';
require 'classes/Imposto.php';

$autoloader = new Autoloader();
$autoloader->registrar();

$reforma = new classes\Orcamento(500);

$calculadora = new classes\CalculadoraDeImpostos();
$investidor = new classes\RealizadorDeInvestimentos();

$conta = new classes\Conta(300);
$conta2 = new classes\Conta(2000);

echo "Valor inicial de ".$conta->getValor();
echo "<br>";
echo "Valor adicionado na conta ". $investidor->realizaInvestimento($conta, new classes\Conservador());
echo "<br>";
echo "Valor após investimento do tipo Conservador: ".$conta->getValor();

echo "<br>";
echo "Valor adicionado na conta ". $investidor->realizaInvestimento($conta, new classes\Moderado());