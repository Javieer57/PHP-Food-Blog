<?php
session_start();
require 'config.php'; 
require '../funciones.php'; 

comprobarSesion();

$conexion = conectarBD($bd_config);
$id = limpiarDatos($_GET['id']);

if (!$conexion) {
	header('Location: ../error.php');
}

if (!isset($id) || empty($id)) {
	header('Location: index.php');
}

$sentencia = $conexion->prepare('DELETE FROM articulos WHERE id_articulo = :id');
$sentencia->execute(array(":id" => $id));

header('Location: index.php');



?>