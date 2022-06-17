<?php 

namespace App\Controllers\Api;

use App\Services\Api\Response;

class InicioController
{
    public function index()
    {
        echo json_encode(["Repositorio"=>"https://github.com/edmariooliver/API-de-coisa-aleatorias"]);
    }
}