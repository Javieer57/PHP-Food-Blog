<?php

require 'funciones_busqueda.php';

/**
 * conectarBD
 * Función para conectarnos la BD
 * @param  array $bd_config configuración general para conectar a BD
 * @return PDO | false
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
 * Función para limpiar cadenas de texto (convertir etiquetas HTML y carácteres especiales a entidades y quitar espacios) 
 * @param  string $datos información a limpiar
 * @return string datos limpios y carácteres especiales a entidades
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
 * Función para calcula la página actual para la paginación
 * @return int página actual
 */
function paginaActual(){
	/* Si $_GET['p'] existe, guarda el valor, sino, asigna 1 */
	$pagina_actual = isset($_GET['p']) ? (int)$_GET['p'] : 1;

	/* Si el valor es 0, no se pasó un entero, entonces asigna el 1 */
	$pagina_actual = ($pagina_actual === 0) ? 1 : $pagina_actual;

	return $pagina_actual;
}


/**
 * calcularPaginas
 * Función para calcular el número de páginas que mostrará la paginación
 * @param  PDO $conexion
 * @param  int $post_por_pagina
 * @return int número páginas que abarcan los post
 */
function calcularPaginas($conexion, $post_por_pagina, $tipo_de_busqueda, $busqueda = ''){

	if ($tipo_de_busqueda === 'todos') {
		$sentencia = $conexion->prepare('SELECT * FROM articulos');
		$sentencia->execute();
		$sentencia = $sentencia->fetchAll();
		$total_paginas = count($sentencia);
	}

	if ($tipo_de_busqueda === 'busqueda') {
		$sentencia = $conexion->prepare('SELECT * 
			FROM articulos 
			WHERE titulo_articulo LIKE :busqueda
			OR extracto_articulo LIKE :busqueda
			OR contenido_articulo LIKE :busqueda');
			
		$sentencia->execute(array(":busqueda" => "%$busqueda%"));
		$sentencia = $sentencia->fetchAll();
		$total_paginas = count($sentencia);
	}

	$numero_paginas = ceil($total_paginas / $post_por_pagina);

	return $numero_paginas;
}


/**
 * formatearFecha
 * Función para dar formato al español a la fecha de un registro
 * @param  string $fecha fecha en formato YYYY-MM-DD HH:MM:SS devuelva por consulta SQL
 * @return string fecha formateada al español
 */
function formatearFecha($fecha){
	$timestamp = strtotime($fecha);

	$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

	$dia = date('j', $timestamp);
	$mes = $meses[date('m', $timestamp) - 1];
	$year = date('o', $timestamp);

	$fecha = "{$dia} de {$mes} del {$year}";
	return $fecha;
}

/**
 * comprobarSesion
 * Función para validar el inicio de sesión en los archivos de admin
 * @return void
 */
function comprobarSesion(){
	if (!isset($_SESSION['usuario'])) {
		header('Location: login.php');
	} 
}

