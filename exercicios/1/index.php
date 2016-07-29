<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1</title>
</head>
<body>
    <?php
    require ('class/Validacao.php');
    
        if(isset($_POST['resultado'])){ 
        $string = $_POST['string'];
        
        $valida = new Validacao($string);
        
        echo $valida->valida();
         
    }else{ ?>
    <form method="post" action="<?php $PHP_SELF?>">
        Coloque sua string:
        <input name="string" type="text"/>
        <input name="resultado" type="submit" value="Enviar">
    </form>
    
    <?php } ?>    
</body>
</html>