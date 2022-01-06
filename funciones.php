<?php

require 'funciones_busqueda.php';

/**
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
 * prevent SQL injections
 * @param  string $data 
 * @return string
 */
function sanitizeData($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = filter_var($data, FILTER_SANITIZE_STRING);

	return $data;
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
 * Calculate the number of pages for the pagination
 * @param  int $post_por_pagina
 * @return int número páginas que abarcan los post
 */
function calcPages($tipo_de_busqueda, $busqueda = ''){	
	global $conn;
	global $num_posts;

	
	if ($tipo_de_busqueda === 'all') {
		$sql = 'SELECT * FROM articulos';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$posts = $statement->fetchAll();
		$total_pages = count($posts);
	}

	if ($tipo_de_busqueda === 'busqueda') {
		$sentencia = $conn->prepare('SELECT * 
			FROM articulos 
			WHERE titulo_articulo LIKE :busqueda
			OR extracto_articulo LIKE :busqueda
			OR contenido_articulo LIKE :busqueda');
			
		$sentencia->execute(array(":busqueda" => "%$busqueda%"));
		$sentencia = $sentencia->fetchAll();
		$total_pages = count($sentencia);
	}

	$numero_paginas = ceil($total_pages / $num_posts);

	return $numero_paginas;
}


/**
 * formatDate
 * Función para dar formato al español a la fecha de un registro
 * @param  string $fecha fecha en formato YYYY-MM-DD HH:MM:SS devuelva por consulta SQL
 * @return string fecha formateada al español
 */
function formatDate($fecha){
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