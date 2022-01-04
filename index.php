
<!-- The first include should be config.php -->
<?php require_once('admin/config.php'); ?>
<?php define ('ROOT_PATH', realpath(dirname(__FILE__))); ?> 
<?php require_once(ROOT_PATH . '/funciones.php'); ?> 
<?php
// connect to database
$conexion = conectarBD($bd_config);
?>

<!-- Retrieve posts from database  -->
<?php $articulos = getPosts(); ?>

<?php /* $articulos = getAllPost($blog_config['post_por_pagina'], $conexion); */ ?>
<?php


/* Si no hay conexión o no hay artículos */
if (!$conexion || !$articulos) {
	/* envía a error.php */
	header('location: error.php');	
};

/* Calculamos todas las páginas que necesita la paginación */
$total_paginas = calcularPaginas($conexion, $blog_config['post_por_pagina'], 'todos');

?>

<?php
require 'views/header.php';
?>

<!-- :::::: Inicio de sección de artículos :::::: -->
<div class="grid">    
    <?php foreach($articulos as $articulo): ?>    
        <div class="card text_center">
            <div class="card__img">
                <img src="<?php echo BASE_URL.$blog_config['carpeta_imagenes'].$articulo['thumb_articulo']; ?>" alt="">
            </div>
            <div class="card__contenido">
                <a href="single.php?id=<?php echo $articulo['id_articulo']; ?>">
                    <h3 class="card__title text_capitalize">
                        <?php echo $articulo['titulo_articulo']; ?>
                    </h3>
                </a>
                <div class="divider"></div>
                <p class="card__text">
                    <?php echo $articulo['extracto_articulo']; ?>
                </p>
                <a href="single.php?id=<?php echo $articulo['id_articulo']; ?>" class="card__readbtn text_uppercase">read more</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
require 'views/paginacion.php';
require 'views/footer.php';
?>