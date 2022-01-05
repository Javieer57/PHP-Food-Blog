<?php
session_start();

// connect to database
$conn = new PDO("mysql:host=localhost;dbname=practica_blog",'root','');

// define ('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/blog/');

$bd_config = array(
	'host' => 'localhost',
	'BD' => 'practica_blog',
	'user' => 'root',
	'pass' => ''
);

$num_posts = 4;

$blog_config = array(
	'post_por_pagina' => 4,
	'images' => 'app/img/'
);

$blog_admin = array(
	'usuario' => 'Javier',
	'password' => '123'
);
?>