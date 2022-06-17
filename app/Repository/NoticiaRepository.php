<?php

namespace App\Repository;

use App\Models\Noticia;
use App\Crawlers\NoticiaCrawler;

class NoticiaRepository 
{
    private NoticiaCrawler $crawler;

    public function __construct()
    {
        $this->crawler = new NoticiaCrawler();    
    }

    /**
     * @return Array<Noticia>|null
     */
    public function buscarTodas()  
    {
        try {
            $noticias = Array();
            $atuais = $this->crawler->buscarAtuais();
    
            $idContador = 1;
            
            foreach($atuais as $noticia) {
                array_push($noticias, new Noticia($idContador++, $noticia));
            }
            return $noticias;
        
        } catch (\Throwable $th) {
            return null;    
        }
    }
}