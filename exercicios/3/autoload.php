<?php

function autoload($class){
    require ("classes/".$class.".php");
}

spl_autoload_register('autoload');