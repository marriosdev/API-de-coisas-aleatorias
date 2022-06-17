<?php 

namespace App\Helpers;

use Exception;

class CrawlerHelper
{   
    public String $link;

    public String $xpath;

    public function __construct(String $link, String $xpath)
    {
        $this->link = $link;
        $this->xpath = $xpath;
    }

    public function execute()
    {
        libxml_use_internal_errors(true);
        $content = file_get_contents($this->link);
        
        $document = new \DOMDocument();

        if(empty($content)){
            return throw new Exception("Não foi possível acessar a URL: ".$this->link);
        }
        
        $document->loadHTML($content);
        $xpathHTML  = new \DOMXPath($document);
        $nodeList = $xpathHTML->query($this->xpath);
        return $nodeList;
    }
}
