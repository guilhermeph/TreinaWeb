<?php

function autoload($class){
    
    if($class == 'Brasileirao'){
        require ("Esportes/Esportes com bola/Futebol/Campeonatos/Brasileirao.php");
    }
    if($class == 'Judo'){
        require ("Esportes/Artes Marciais/Judo.php");
    }
    if($class == 'Formula1'){
        require ("Esportes/Corridas/Formula1.php");
    }
}
spl_autoload_register('autoload');
