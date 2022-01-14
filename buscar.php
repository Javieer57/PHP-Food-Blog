<?php

/* Búsqueda con paginación */

require 'assets/php/admin/config.php'; 
require 'funciones.php'; 

/* Si no hay busqueda */
if (!$_GET['busqueda']) {
	/* Reenviamos al index */
	header('Location: index.php');
}

$conexion = conectarBD($bd_config);

/* Validamos la búsqueda y buscamos resultados */
$busqueda = sanitizeData($_GET['busqueda']);
$resultado_busqueda = obtenerPostPorBusqueda($conexion, $busqueda, $blog_config['post_por_pagina']);

/* Calculamos páginas para paginación */
$total_paginas = calcPages($conexion, $blog_config['post_por_pagina'], 'busqueda', $busqueda);

require 'assets/php/views/buscar.view.php';

?>