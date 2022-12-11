<?php

use Marrios\Router\HttpRouter;

$router = new HttpRouter();

// Set route
$router->get("",          [App\Controllers\Api\InicioController::class, "index"])->run();
$router->get("/noticias", [App\Controllers\Api\NoticiaController::class, "buscarTodas"])->run();
$router->get("/noticias/{id}", [App\Controllers\Api\NoticiaController::class, "buscarPorId"])->run();
$router->notFound();
