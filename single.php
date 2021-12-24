<?php

require 'admin/config.php';
require 'funciones.php'; 

$conexion = conectarBD($bd_config);

/* Si no hay conexión */
if (!$conexion) {
	/* enviamos a error.php */
	header('location: error.php');	
}

/* Obtenemos el ID del post a mostrar */
$id_post =  (int)limpiarDatos($_GET['id']);
$single_post = obtenerPostPorID($conexion, $id_post);

/* Si no hay id en la URL o el id no existe en la BD... */
if (!isset($id_post) || $single_post == false ) {
	/* Redirige al index */
	header('location: index.php');	
}

require 'views/single.view.php';