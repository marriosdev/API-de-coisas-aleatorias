<?php 

namespace App\Helpers;

class CrawlerHelper
{
    /**
     * @var \DOMNode
     */
    public $result;
    

    /**
     * 
     */
    public function __construct(String $link, String $xpath)
    {
        libxml_use_internal_errors(true);
        $content = file_get_contents($link);
        
        $document = new \DOMDocument();
        $document->loadHTML($content);

        $xpathHTML  = new \DOMXPath($document);
        $nodeList = $xpathHTML->query($xpath);
        
        $this->result = $nodeList;
    }

    /**
     * Get result 
     * @return \DOMNode $result
     */
     public function get()
     {
        return $this->result;
     }
}
