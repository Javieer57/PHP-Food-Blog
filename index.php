<?php

require 'admin/config.php'; 
require 'funciones.php'; 

$conexion = conectarBD($bd_config);

/* Traer posts de BD */
$articulos = obtenerTodosLosPost($blog_config['post_por_pagina'], $conexion);

if (!$conexion || !$articulos) {
	header('location: error.php');	
};

$total_paginas = calcularPaginas($conexion, $blog_config['post_por_pagina'], 'todos');

require 'views/index.view.php'; 

?>