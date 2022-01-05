<?php
session_start();
require 'config.php'; 
require '../funciones.php'; 

comprobarSesion();

$conexion = conectarBD($bd_config);

if (!$conexion) {
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
	$titulo = sanitizeData($_POST['titulo']);
	$extracto = sanitizeData($_POST['extracto']);
	$contenido = sanitizeData($_POST['contenido']);
	$thumb = sanitizeData($_FILES['thumb']['tmp_name']);

	$errores = '';


	if (empty($titulo) || empty($extracto) || empty($contenido) || empty($_FILES)) {
		$errores = 'Por favor, captura todos los campos';
	} else {
		/* Valida el tamaño del archivo que se subió (por el momento está como temporal) */
		$check = @getimagesize($_FILES['thumb']['tmp_name']);

		/* Especifica en qué carpeta se guardará el archivo */
		$carpeta_destino = $blog_config['images'];

		/* Define el nombre del contenedor que recibirá al archivo temporal */
		$contenedor_archivo = $carpeta_destino . $_FILES['thumb']['name'];

		/* Mueve el archivo temporal, al contenedor (y dejará de ser temporal)*/
		move_uploaded_file($thumb, $contenedor_archivo);

		$sentencia = $conexion->prepare(
			'INSERT INTO articulos (titulo_articulo, extracto_articulo, contenido_articulo, thumb_articulo)
			VALUES (:titulo, :extracto, :contenido, :thumb)'
		);
		$sentencia->execute(array(
			":titulo" => $titulo, 
			":extracto" => $extracto,
			":contenido" => $contenido,
			":thumb" => $_FILES['thumb']['name']
		));

		header('Location: index.php');
	}
}

require '../views/nuevo_post.view.php'
?>