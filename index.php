<!-- The first include should be config.php -->
<?php require_once('admin/config.php'); ?>
<?php define ('ROOT_PATH', realpath(dirname(__FILE__))); ?>
<?php require_once(ROOT_PATH . '/funciones.php'); ?>
<?php
// connect to database
$conexion = conectarBD($bd_config);
?>

<!-- Retrieve posts from database  -->
<?php $posts = getPosts(); ?>

<?php /* $posts = getAllPost($blog_config['post_por_pagina'], $conexion); */ ?>
<?php


/* Si no hay conexión o no hay artículos */
if (!$conexion || !$posts) {
	/* envía a error.php */
	header('location: error.php');	
};

/* Calculamos todas las páginas que necesita la paginación */
$total_paginas = calcularPaginas($conexion, $blog_config['post_por_pagina'], 'todos');

?>

<?php require_once(ROOT_PATH . '/views/header.php');?>
<title>Cook Blog | Home</title>
</head>

<body>
    <!-- :::::: Start Navbar :::::: -->
    <?php require_once(ROOT_PATH . '/views/navbar.view.php');?>
    <!-- :::::: End Navbar :::::: -->

    <!-- :::::: Start posts :::::: -->
    <div class="grid">
        <?php foreach($posts as $post): ?>
        <div class="card text_center">
            <div class="card__img">
                <img src="<?php echo BASE_URL . $blog_config['carpeta_imagenes'] . $post['image']; ?>" alt="">
            </div>
            <div class="card__contenido">
                <a href="single.php?id=<?php echo $post['id']; ?>">
                    <h3 class="card__title text_capitalize">
                        <?php echo $post['title']; ?>
                    </h3>
                </a>
                <div class="divider"></div>
                <p class="card__text">
                    <?php echo $post['info']; ?>
                </p>
                <a href="single.php?id=<?php echo $post['id']; ?>" class="card__readbtn text_uppercase">read more</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div><!-- :::::: End Navbar :::::: -->

    <?php
require 'views/paginacion.php';
require 'views/footer.php';
?>