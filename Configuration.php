<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require __DIR__ . "/app/src/core/autoloader/Autoloader.php";

session_start();

try {

    require __DIR__ . '/routes/Routes.php';

} catch(\Exception $e){

    echo $e->getMessage();
}
