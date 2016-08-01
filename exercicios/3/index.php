<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <?php
    require ("autoload.php");
    
    $cliente = new classes\Cliente('Guilherme', 'guilherme.costa@kinghost.com.br', 'Rua liberdade');
    $agencia = new classes\Agencia(1, 'Rua Dona Laura');
    $conta = new classes\Conta(1, 24, $agencia, $cliente);
    
    echo "Saldo inicial ". $conta->getSaldo(). " Debitando R$250";
    
    $conta->debitaNaConta(250);
    
    echo "<br>";
    echo "<br>";
    echo "saldo após o debito R$ ".$conta->getSaldo();
    
    
    echo "Creditando R$300";
    
    $conta->creditaNaConta(300);
    
    echo "<br>";
    echo "<br>";
    echo "saldo após o crédito R$ ".$conta->getSaldo();
    
    echo "<br>";
    echo "<br>";
    echo "Tirando extrato";
    
    echo "<br>";
    echo "<br>";
    
    $extrato = $conta->getHistoricoDeOperacoes();
    
    for ($i = 0; $i < count($extrato); $i ++) {
        echo "<br>".$extrato[$i];
    }
    
    
    
    
    ?>
    
    
    
</body>
</html>