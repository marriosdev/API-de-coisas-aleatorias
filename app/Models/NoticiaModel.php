<?php

namespace App\Models;

use App\Helpers\CrawlerHelper;

class NoticiaModel
{
    /**
     * @return Array|Bool $result
     */
    public function buscarAtuais()
    {
        $crawler = new CrawlerHelper('https://g1.globo.com/globonews/', 
                                    './/div[@class="feed-post-body"]//div[@class="_evt"]');
        
        $listaDeNoticias = [];
        $contador = 0;
        
        // Filtrando apenas as noticias
        try {
            //Pegando nodeValues
            foreach($crawler->result as $value){
                if($contador>3){
                    array_push($listaDeNoticias, [$value->nodeValue]);
                }
                $contador++;
            }

            $contador = 0;

            //Pegando textContent
            foreach($crawler->result as $value){
                if($contador>3){
                    array_push($listaDeNoticias, [$value->textContent]);
                }
                $contador++;
            }

            return $listaDeNoticias;
        } catch (\Throwable $th) {
            return false;
        }
    }
}