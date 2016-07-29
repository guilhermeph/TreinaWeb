<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <?php
    require ("autoload.php");
    
    $cliente = new Cliente('Guilherme', 'guilherme.costa@kinghost.com.br', 'Rua liberdade');
    $agencia = new Agencia(1, 'Rua Dona Laura');
    $conta = new Conta(1, 24, $agencia, $cliente, '');
    
    var_dump($cliente);
    var_dump($agencia);
    var_dump($conta);
    
    ?>
    
    
    
</body>
</html>