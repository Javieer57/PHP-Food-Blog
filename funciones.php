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

// Manejar envío de texto - redireccionar url correctamente
function paginaActual(){
	$pagina_actual = (int)$_GET['p'];
	
	$pagina_actual = ($pagina_actual === 0) ? 1 : $pagina_actual;

	return $pagina_actual;
}

function obtener_posts($post_por_pagina, $conexion){
	$inicio = (paginaActual() > 1) ? paginaActual() * $post_por_pagina - $post_por_pagina : 0;

	$sentencia = $conexion->prepare('SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT :inicio, :post_por_pagina');

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


function fecha($fecha){
	$timestamp = strtotime($fecha);

	$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

	$dia = date('j', $timestamp);
	$mes = $meses[date('m', $timestamp) - 1];
	$year = date('o', $timestamp);

	$fecha = "{$dia} de {$mes} del {$year}";
	return $fecha;
}

function calcularPaginas($conexion, $post_por_pagina){
	$totalArticulos = $conexion->query('SELECT FOUND_ROWS() AS total');
	$totalArticulos = $totalArticulos->fetch()['total'];

	/* Ceil para redondear hacia arriba si no es número entero */
	$numeroPaginas = ceil($totalArticulos / $post_por_pagina);

	return $numeroPaginas;
}