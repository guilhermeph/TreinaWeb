<?php

/**
* Classe responsável pelo autoloader
*/
class Autoloader {

  //Método que faz o registro do autoloader	
  public function registrar(){
  	spl_autoload_register(array($this, 'loader')); 
  }
  
  //Método que pega o nome da classe com namespace e inclui o arquivo
  public function loader($className) {
      var_dump($className);
      echo "<br>";
  	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
        echo "<br>";
        var_dump($className);

    require_once($className . '.php');
  }


}