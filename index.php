<?php

require 'admin/config.php'; 
require 'funciones.php'; 

$conexion = conectar($bd_config);

/* Traer posts de BD */
$articulos = obtener_posts($blog_config['post_por_pagina'], $conexion);

if (!$conexion || !$articulos) {
	header('location: error.php');	
};


require 'views/index.view.php'; 

?>