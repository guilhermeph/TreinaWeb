<?php
require('conexao/conecta.php');

class Autoloader{
    public function registrar(){
        spl_autoload_register(array($this, 'autoload'));
    }
    
    public function autoload($classname){
        $classname = str_replace('\\', DIRECTORY_SEPARATOR, $classname);
        
        require($classname.".php");
    }
}
