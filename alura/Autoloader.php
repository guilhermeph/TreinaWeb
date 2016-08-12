<?php

class Autoloader{
    public function registrar(){
        spl_autoload_register(array($this, 'autoload'));
    }
    
    public function autoload($classe){
        $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
        
        require ($classe.'.php');
        
    }
}