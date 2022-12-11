<?php

namespace App\Entity;

class Noticia
{
    public Int $id;
    public String $titulo;
    
    public function __construct(Int $id=null, String $titulo=null)
    {
        $this->id       = $id;
        $this->titulo   = $titulo;
    }
   
    public function getid()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setId(Int $id)
    {
        $this->id = $id;
    }
    
    public function setTitulo(String $titulo)
    {
        $this->titulo = $titulo;
    }
}