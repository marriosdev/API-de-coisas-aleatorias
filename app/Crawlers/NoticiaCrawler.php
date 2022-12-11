<?php

namespace App\Crawlers;
use App\Helpers\CrawlerHelper;
use App\Entity\Noticia;

class NoticiaCrawler
{
    public function __construct()
    {
    }

    /**
     * 
     * @return array
     */
    public function buscarAtuais()
    {       
        $crawler = new CrawlerHelper('https://g1.globo.com/globonews/', './/div[@class="feed-post-body"]//div[@class="_evt"]');
        $listaDeNoticias = [];
        
        foreach($crawler->execute() as $value){
            array_push($listaDeNoticias, $value->textContent);
            var_dump($value);
            echo "<br>";
            exit;
        }

            
        return $this->filtrandoNoticias($listaDeNoticias);
    }

    /**
     * 
     * @param mixed $noticias
     * @return array
     */
    protected function filtrandoNoticias($noticias) 
    {
        $idContador = 1;
        $listaNoticias = array();
        unset($noticias[0]);
        unset($noticias[1]);

        foreach($noticias as $noticia) {
            array_push($listaNoticias, new Noticia($idContador++, $noticia));
        }
        
        return $listaNoticias;
    }
}