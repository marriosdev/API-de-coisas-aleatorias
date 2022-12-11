<?php

namespace App\Controllers\Api;

use App\Services\NoticiaService;
use Marrios\Router\Entities\RouteParameters;

class NoticiaController
{
    private NoticiaService $service;
    
    public function __construct()
    {
        $this->service = new NoticiaService();        
    }

    /**
     * 
     */
    public function buscarTodas()
    {
        return Capture(200, $this->service->buscarTodas());
    }

    public function buscarPorId(RouteParameters $routeParameters)
    {
        
        return Capture(200, $this->service->buscarPorId($routeParameters->id));
    }
}
