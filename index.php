<?php

/**
 * 
 */
require_once(__DIR__."/vendor/autoload.php");

/**
 * 
 */
require_once(__DIR__."/app/Helpers/Capture.php");


/**
 * Constantes
 */
require_once(__DIR__."/app/Configs/Constants.php");

/**
 * 
 */
require_once(__DIR__."/app/Routes/Api.php");


/**
 * 
 */
if(AMBIENTE == "localhost"){
    error_reporting(E_ALL);
}else{
    error_reporting(0);
}

