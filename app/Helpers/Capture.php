<?php

/**
 * Captura a resposta do service e entrega a melhor resposta para o cliente no momento
 */
function Capture($expected, $content) 
{
    if(!is_int($content)) {
        return Response($expected, $content);
    }
    return  Response($content, json_encode([
        "date"=>date("Y-m-d H:m:s"),
        "status"=>$content
    ]));
}

function Response($code, $content) {
    header("HTTP/1.1 ".$code);
    header('Content-Type: application/json');
    echo $content;
    exit;
}