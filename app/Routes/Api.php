<?php

use Marrios\Router\HttpRouter;

$router = new HttpRouter();

// Set route
$router->get("", [App\Controllers\Api\InicioController::class, "index"])->run();
$router->get("/api/noticias/todas", [App\Controllers\Api\NoticiaController::class, "buscarTodas"])->run();
$router->notFound();