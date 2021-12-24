<?php

require 'admin/config.php'; 
require 'funciones.php'; 

/* Conectamos a BD y traemos los post */
$conexion = conectarBD($bd_config);


$articulos = obtenerTodosLosPost($blog_config['post_por_pagina'], $conexion);


/* Si no hay conexión o no hay artículos */
if (!$conexion || !$articulos) {
	/* envía a error.php */
	header('location: error.php');	
};

/* Calculamos todas las páginas que necesita la paginación */
$total_paginas = calcularPaginas($conexion, $blog_config['post_por_pagina'], 'todos');


require 'views/index.view.php'; 

?>