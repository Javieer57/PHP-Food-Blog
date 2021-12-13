<?php

function conectar($bd_config){
	try {
		$conexion = new PDO("mysql:host=localhost;dbname={$bd_config['BD']}", $bd_config['user'], $bd_config['pass']);

		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	$datos = filter_var($datos, FILTER_SANITIZE_STRING);

	return $datos;
}

function paginaActual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_posts($post_por_pagina, $conexion){
	$inicio = (paginaActual() > 1) ? paginaActual() * $post_por_pagina - $post_por_pagina : 0;

	$sentencia = $conexion->prepare('SELECT  * FROM articulos LIMIT :inicio, :post_por_pagina');

	$sentencia->bindParam(':inicio', $inicio, PDO::PARAM_INT);
	$sentencia->bindParam(':post_por_pagina', $post_por_pagina, PDO::PARAM_INT);

	$sentencia->execute();
	
	return $sentencia->fetchAll();
}

function obtener_post($conexion, $id_post){
	$sql = $conexion->prepare('SELECT * FROM articulos WHERE id_articulo = :id');
	$sql->execute(array(':id' => $id_post));
	return $sql->fetch();
}

function limpiarID($id){
	return limpiarDatos($id);
}


function fecha($fecha){
	$timestamp = strtotime($fecha);

	$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

	$dia = date('j', $timestamp);
	$mes = $meses[date('m', $timestamp) - 1];
	$year = date('o', $timestamp);

	$fecha = "{$dia} de {$mes} del {$year}";
	return $fecha;
}