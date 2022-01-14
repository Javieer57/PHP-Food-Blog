<?php
session_start();
require 'config.php'; 
require '../funciones.php'; 

comprobarSesion();

$conexion = conectarBD($bd_config);


if (!$conexion) {
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = sanitizeData($_POST['id']);
	$titulo = sanitizeData($_POST['titulo']);
	$extracto = sanitizeData($_POST['extracto']);
	$contenido = sanitizeData($_POST['contenido']);
	$thumb = sanitizeData($_FILES['thumb']['name']);
	$thumb_guardada = sanitizeData($_POST['thumb-guardada']);

	if (empty($thumb)) {
			$thumb = $thumb_guardada;
	} else{
		/* Valida el tamaño del archivo que se subió (por el momento está como temporal) */
		$check = @getimagesize($_FILES['thumb']['tmp_name']);

		/* Especifica en qué carpeta se guardará el archivo */
		$carpeta_destino = $blog_config['images'];

		/* Define el nombre del contenedor que recibirá al archivo temporal */
		$contenedor_archivo = $carpeta_destino . $_FILES['thumb']['name'];

		/* Mueve el archivo temporal, al contenedor (y dejará de ser temporal)*/
		move_uploaded_file($thumb, $contenedor_archivo);
	}

	$sentencia = $conexion->prepare(
		"UPDATE articulos 
		SET titulo_articulo = :titulo , extracto_articulo = :extracto, contenido_articulo = :contenido, thumb_articulo = :thumb
		WHERE id = :id"
	);

	$sentencia->execute(array(
		":titulo" => $titulo, 
		":extracto" => $extracto,
		":contenido" => $contenido,
		":thumb" => $thumb,
		":id" => $id,
	));

	header('Location: index.php');
} else {
	$post = getPost($conexion, $_GET['id']);
	if (!$post) {
		header('Location: error.php');
	}
}

require '../views/editar.view.php';
?>