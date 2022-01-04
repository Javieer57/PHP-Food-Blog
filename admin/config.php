<?php
session_start();
// connect to database
$conn = conectarBD($bd_config);

define('BASE_URL', 'http://localhost/blog/');

$bd_config = array(
	'host' => 'localhost',
	'BD' => 'practica_blog',
	'user' => 'root',
	'pass' => ''
);


$blog_config = array(
	'post_por_pagina' => 4,
	'carpeta_imagenes' => 'app/img/'
);

$blog_admin = array(
	'usuario' => 'Javier',
	'password' => '123'
);
?>