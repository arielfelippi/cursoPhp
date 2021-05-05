<?php

require __DIR__ . "../../Configuration.php";

use routesConfig\Router as Route;

$request = new routesConfig\Request;

Route::resolve($request);
