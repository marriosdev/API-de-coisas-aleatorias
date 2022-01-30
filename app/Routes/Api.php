<?php

$router = new \Bramus\Router\Router();

/**
 * ROTAS
 */
$router->get('/',                       API_NAMESPACE."\InicioController@index");
$router->get('/api',                    API_NAMESPACE."\InicioController@index");

$router->get('/api/noticias/buscar',    API_NAMESPACE."\NoticiaController@buscar");

//Vamos!
$router->run();
