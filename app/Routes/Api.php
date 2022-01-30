<?php

$router = new \Bramus\Router\Router();

/**
 * ROTAS
 */
$router->get('/api/noticias/buscar', "\App\Controllers\Api\NoticiaController@buscar");

//Vamos!
$router->run();
