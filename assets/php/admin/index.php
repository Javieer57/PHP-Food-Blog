<?php
require 'config.php'; 
require  '../../../functions.php'; 

validateLogin();

/* Conectamos a BD y traemos los post */
$articulos = getAllPosts();

/* Si no hay conexión o no hay artículos */
if (!$conexion) {
	/* envía a error.php */
	header('location: ../../../error.php');	
};

/* Calculamos todas las páginas que necesita la paginación */
$total_pages = calcPages('all');

require '../views/index_admin.view.php'; 
?>