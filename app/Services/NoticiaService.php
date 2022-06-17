<?php

namespace App\Services;

use App\Repository\NoticiaRepository;
use App\Model\Noticia;

class NoticiaService 
{
    private NoticiaRepository $repository;

    public function __construct()
    {
        $this->repository = new NoticiaRepository();    
    }

    public function buscarTodas()
    {   
        $noticias = $this->repository->buscarTodas();
        return ($noticias) ? json_encode($noticias) : BAD_REQUEST;
    }
}