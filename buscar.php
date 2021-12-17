<?php

/* Búsqueda con paginación */

require 'admin/config.php'; 
require 'funciones.php'; 

if (!$_GET['busqueda']) {
	header('Location: index.php');
}

$conexion = conectarBD($bd_config);

$busqueda = limpiarDatos($_GET['busqueda']);

$resultado_busqueda = buscar_posts($blog_config['post_por_pagina'], $conexion, $busqueda);

require 'views/buscar.view.php';

?>