<?php

require 'admin/config.php';
require 'funciones.php'; 

$conexion = conectarBD($bd_config);

if (!$conexion) {
	header('location: error.php');	
}

$id_post =  (int)limpiarDatos($_GET['id']);
$single_post = obtener_post($conexion, $id_post);

/* Si no hay id en la URL o el id no existe en la BD... */
if (!isset($id_post) || $single_post == false ) {

	/* Redirige al index */
	header('location: index.php');	
}

require 'views/single.view.php';