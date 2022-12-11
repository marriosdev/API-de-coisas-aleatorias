<?php 

namespace App\Controllers\Api;

class InicioController
{
    public function index()
    {
        return Capture(200, "https://github.com/edmariooliver/API-de-coisa-aleatorias");
    }
}