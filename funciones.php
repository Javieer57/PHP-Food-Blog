<?php


/**
 * conectarBD
 * 
 * @param  array $bd_config configuración general para conectar a BD
 * @return void PDO | false
 */
function conectarBD($bd_config){
	try {
		$conexion = new PDO(
			"mysql:host={$bd_config['host']};
			dbname={$bd_config['BD']}", 
			$bd_config['user'], 
			$bd_config['pass'])
		;
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}


/**
 * limpiarDatos
 * Evita la inyección de código
 * @param  string $datos información a limpiar
 * @return string datos limpios
 */
function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	$datos = filter_var($datos, FILTER_SANITIZE_STRING);

	return $datos;
}

/**
 * paginaActual
 * calcula la página actual para la paginación
 * @return int 
 */
function paginaActual(){
	/* Si $_GET['p'] existe, guarda el valor, sino, asigna 1 */
	$pagina_actual = isset($_GET['p']) ? (int)$_GET['p'] : 1;

	/* Si el valor es 0, no se pasó un entero, entonces asigna el 1 */
	$pagina_actual = ($pagina_actual === 0) ? 1 : $pagina_actual;

	return $pagina_actual;
}


/**
 * obtener_posts
 *
 * @param  int $post_por_pagina 
 * @param  PDO $conexion
 * @return array
 */
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

function buscar_posts($post_por_pagina, $conexion, $busqueda){
	$sentencia = $conexion->prepare('SELECT * FROM articulos WHERE titulo_articulo LIKE :busqueda OR extracto_articulo LIKE :busqueda OR contenido_articulo LIKE :busqueda ');
	$sentencia->execute(array(':busqueda' => "%$busqueda%"));
	$resultado_busqueda = $sentencia->fetchAll();

	return $resultado_busqueda;
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