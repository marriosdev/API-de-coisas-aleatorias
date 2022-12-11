<?php

namespace App\Repositories;

use App\Crawlers\NoticiaCrawler;

class NoticiaRepository 
{
    private NoticiaCrawler $crawler;

    public function __construct()
    {
        $this->crawler = new NoticiaCrawler();    
    }

    /**
     * 
     */
    public function buscarTodas()  
    {
        return $this->crawler->buscarAtuais();
    }

    /**
     * 
     */
    public function buscarPorId(int $id)  
    {
        return $this->crawler->buscarAtuais()[$id-1];
    }
}
