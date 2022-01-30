<?php

namespace App\Controllers\Api;

use App\Models\NoticiaModel;
use App\Services\Api\Response;

class NoticiaController
{
    /**
     * 
     */
    public function buscar()
    {
        $noticia        = new NoticiaModel();
        $noticiasAtuais = $noticia->buscarAtuais();
        
        if(! $noticiasAtuais)
        {
            return new Response(500, ["msg"=>"Ocorreu um erro interno!"]);
        }
        
        return new Response(200, $noticiasAtuais);
    }
}
