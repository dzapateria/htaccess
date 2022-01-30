<?php

/* Version: 0.1 */

require 'routes_config.php';

function uri($valor = false)
{
    if (!isset($_GET['url'])) return false;

    $url = $_GET['url'];
    if (strlen($url) == '/') return false;

// Return for String
    $url = strtolower($_GET['url']);
    //  END WITH '/' ALWAYS FOR CONSISTENCE
    $url_slash = (substr($url, -1) === '/') ? $url : $url . '/';

    if (!$valor) return $url_slash;

    // For array Continue --------
    $clean_uri = preg_replace("/\/{2,}/", "/", $url_slash);
    $array_uri = explode('/', $clean_uri);

// Clean empty spaces
    $clean = [];
    foreach ($array_uri as $item) {
        if (strlen($item) > 0 and $item != '') {
            $clean[] = $item;
        }
    }
    return $clean;
}

function dev($opt)
{

    define('DEV_MODE', $opt);
    if ($opt == 'true' or true) return true;
    if ($opt == 'false' or false) return false;

    if ($opt === 'auto') {
        if (PHP_OS == 'WINNT') {
            $env = true;
        } else {
            $env = false;
        }
    }
    return $env;
}

