<?php

/* Búsqueda con paginación */

require 'admin/config.php'; 
require 'funciones.php'; 

if (!$_GET['busqueda']) {
	header('Location: index.php');
}

$busqueda = limpiarDatos($_GET['busqueda']);
$conexion = conectarBD($bd_config);

$resultado_busqueda = obtenerPostPorBusqueda($conexion, $busqueda, $blog_config['post_por_pagina']);

$total_paginas = calcularPaginas($conexion, $blog_config['post_por_pagina'], 'busqueda', $busqueda);

require 'views/buscar.view.php';

?>