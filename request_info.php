<?php

echo "<h2>REQUEST_URI:</h2> " . $_SERVER['REQUEST_URI'] . "<br>";

echo "<h2>REMOTE_ADDR (API): </h2> " . $_SERVER['REMOTE_ADDR'] . "<br>";

echo "<h2>DOCUMENT_ROOT: </h2> " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

if ($_SERVER['REQUEST_METHOD']){
    echo "<h2>REQUEST_METHOD:</h2> <pre>";
    print_r($_SERVER['REQUEST_METHOD']);
    echo "</pre>";  
}

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    echo "<h2>GET: </h2> <pre>";
    print_r($_GET);
    echo "</pre>";  
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<h2>GET: </h2> <pre>";
    print_r($_POST);
    echo "</pre>";  
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    echo "<h2>DELETE: </h2> <pre>";
    print_r($_DELETE);
    echo "</pre>";  
}
 
if ($_SERVER['REQUEST_METHOD'] === 'PUT'){
    echo "<h2>PUT: </h2> <pre>";
    print_r($_PUT);
    echo "</pre>";  
}
 