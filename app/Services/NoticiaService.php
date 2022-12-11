<?php

namespace App\Services;

use App\Repositories\NoticiaRepository;

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

    public function buscarPorId(int $id)
    {
        $noticias = $this->repository->buscarPorId($id);
        return ($noticias) ? json_encode($noticias) : BAD_REQUEST;
    }
}