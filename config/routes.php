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





$router->dispatch();

