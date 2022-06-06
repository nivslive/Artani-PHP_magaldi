<?php



require __DIR__ . '/config.php';
use Template\Controller\Web;
use CoffeeCode\Router\Router;



$router = new Router(URL_BASE);



// Controladores de Requisição
$web = new Web();


$router->namespace('src/Controller');



// Rotas principais do site
$router->group(null);
$router->get('/', function () use ($web){$web->index();});
$router->post('/submit', function ($data) use ($web){$web->submit($data);});

// Rotas para Tratamento de Erros
$router->group('/error');

$router->get('/{errcode}', function ($data){

    echo "Erro: {$data['errcode']}";

});



$router->dispatch();



// Redirect de todos os erros de rotas

if ($router->error()) {

    $router->redirect("/error/{$router->error()}");

}