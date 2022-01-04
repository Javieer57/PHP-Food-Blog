<?php
/**
 * getAllPost
 * busca los post a mostrar desde la BD 
 * @param  int $post_por_pagina 
 * @param  PDO $conexion
 * @return array 
 */
function getAllPost($post_por_pagina, $conexion){
	// Determinamos desde que post se mostrara en pantalla
	$inicio = (paginaActual() > 1) ? paginaActual() * $post_por_pagina - $post_por_pagina : 0;

	$sentencia = $conexion->prepare(
		'SELECT * 
		FROM articulos LIMIT :inicio, :post_por_pagina'
	);
	
	$sentencia->bindParam(':inicio', $inicio, PDO::PARAM_INT);
	$sentencia->bindParam(':post_por_pagina', $post_por_pagina, PDO::PARAM_INT);

	$sentencia->execute();
	
	return $sentencia->fetchAll();
}


/**
 * obtenerPostPorID
 * Función para obtener un único post de BD basado en el id de $_GET
 * @param  PDO $conexion
 * @param  int $id_post número de id del post obtenido desde $_GET
 * @return array arreglo con la información del registro en BD
 */
function obtenerPostPorID($conexion, $id_post){
	// Evitamos la inyección de código por el id
	$id_post = limpiarDatos($id_post);
	
	$sentencia = $conexion->prepare(
		'SELECT * 
		FROM articulos 
		WHERE id = :id LIMIT 1'
	);

	$sentencia->execute(array(':id' => $id_post));

	return $sentencia->fetch();
}


/**
 * obtenerPostPorBusqueda
 * Función para obtener post resultados de una búsqueda
 * @param  PDO $conexion 
 * @param  string $busqueda texto buscado en posts
 * @return array arreglo con post que coinciden con la búsqueda
 */
function obtenerPostPorBusqueda($conexion, $busqueda, $post_por_pagina){
	// Evitamos la inyección de código por la búsqueda
	$busqueda = limpiarDatos($_GET['busqueda']);

	// Determinamos desde que post se mostrara en pantalla
	$inicio = (paginaActual() > 1) ? paginaActual() * $post_por_pagina - $post_por_pagina : 0;

	$sentencia = $conexion->prepare(
		"SELECT * 
		FROM articulos 
		WHERE titulo_articulo LIKE :busqueda
		OR extracto_articulo LIKE :busqueda
		OR contenido_articulo LIKE :busqueda
		LIMIT $inicio, $post_por_pagina"
	);

	$sentencia->execute(array(
		':busqueda' => "%$busqueda%",
		':inicio' => (int)$inicio,
		':post_por_pagina' => (int)$post_por_pagina
	));	
	$resultados_busqueda = $sentencia->fetchAll();

	return $resultados_busqueda;
}
?>