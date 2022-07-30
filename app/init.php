<?php

require_once '../app/config/config.php';


spl_autoload_register(function ($nameClass) {
    require_once 'libs/core/' . $nameClass . '.php';
});

$app = new App();
 
