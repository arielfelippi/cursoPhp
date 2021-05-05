<?php

use routesConfig\Router as Route;

Route::get('teste', function() {

    echo '<a href="' . Route::translate('clientes.edit', 1) . '">Clique aqui para testar a rota clientes.edit</a>';

});

$router->get('/', function() {
    echo "Página inicial";
});

// $router->get('teste', function() use($router){

//     echo '<a href="' . $router->translate('clientes.edit', 1) . '">Clique aqui para testar a rota clientes.edit</a>';

// });

// $router->get('/contatos', function() {
//     echo "Página de contatos";
// });

// $router->post('/contatos/store', "Controller@store");

// $router->get('/teste/{teste}', function($teste){

//     echo "Agora foi recebido da URI o parâmetro: " . $teste;

// });

// $router->get('/produto/{produto}/categoria/{categoria}/editar', function($produto, $categoria){

//     echo "Recebeu => produto: " . $produto . "<br />";
//     echo "Recebeu => categoria: " . $categoria . "<br />";

// });
