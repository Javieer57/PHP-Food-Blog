<?php
/**
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
 * Returns all posts
 * @return array all found posts
 */
function getPosts(){
	// use global $conn object in function
	global $conn;
	// use global $num_posts in function
	global $num_posts;

	// calc the start post for pagination
	$start = (paginaActual() > 1) ? paginaActual() * $num_posts - $num_posts : 0;

	$sql = "SELECT * FROM articulos LIMIT :start, :num_posts";
	$conn = $conn->prepare($sql);
	$conn->bindParam(':start', $start, PDO::PARAM_INT);
	$conn->bindParam(':num_posts', $num_posts, PDO::PARAM_INT);	
	$conn->execute();	
	$posts = $conn->fetchAll();

	return $posts;
}


/**
 * Returns a single post
 * @param  int $post_id
 * @return array found post
 */
function getPost($post_id){
	// use global $conn object in function
	global $conn;
	
	$post_id = sanitizeData($post_id);

	$sql = 'SELECT * FROM articulos WHERE id = :id LIMIT 1';
	$conn = $conn->prepare($sql);
	$conn->execute(array(':id' => $post_id));
	$post = $conn->fetch();

	/* Bug: Even with the wrong id, the function returns a post if the first number matches in the database */
	return $post;
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
	$busqueda = sanitizeData($_GET['busqueda']);

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