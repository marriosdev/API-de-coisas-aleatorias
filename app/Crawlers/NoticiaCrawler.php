<?php

namespace App\Crawlers;
use App\Helpers\CrawlerHelper;
use Exception;

class NoticiaCrawler
{

    public function __construct()
    {
    }

    /**
     * @return Array|Bool $result
     */
    public function buscarAtuais()
    {       
        $crawler = new CrawlerHelper('https://g1.globo.com/globonews/', './/div[@class="feed-post-body"]//div[@class="_evt"]');
        $listaDeNoticias = [];
        foreach($crawler->execute() as $value){
            array_push($listaDeNoticias, $value->nodeValue);
        }
        return $listaDeNoticias;
    }
}