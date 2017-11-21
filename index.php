<?php 
$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;

$u = new Usuario();
$u->setEmail("wesleijt@hotmail.com");

echo "hello ".$u->getEmail(); 
?>