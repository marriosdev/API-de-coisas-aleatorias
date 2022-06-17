<?php 

namespace App\Controllers\Api;

class InicioController
{
    public function index()
    {
        echo json_encode(["Repositorio"=>"https://github.com/edmariooliver/API-de-coisa-aleatorias"]);
    }
}