<?php
session_start();

// connect to database
$conn = new PDO("mysql:host=localhost;dbname=practica_blog",'root','');

// define ('BASE_URL', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/blog/');

$bd_config = array(
	'host' => 'localhost',
	'BD' => 'practica_blog',
	'user' => 'root',
	'pass' => ''
);

$num_posts = 3;

$blog_config = array(
	'post_por_pagina' => 3,
	'images' => 'assets/img/'
);

$blog_admin = array(
	'usuario' => 'Javier',
	'password' => '123'
);
?>