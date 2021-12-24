<?php
require 'views/header.php';
?>

<!-- :::::: Inicio de sección de artículos :::::: -->
<?php foreach($articulos as $articulo): ?>
<div class="">
    <h2>
        <a href="single.php?id=<?php echo $articulo['id_articulo']; ?>">
            <?php echo $articulo['titulo_articulo']; ?>
        </a>
    </h2>

    <p>
        <?php echo formatearFecha($articulo['fecha_articulo']); ?>
    </p>

    <img src="<?php echo RUTA.$blog_config['carpeta_imagenes'].$articulo['thumb_articulo']; ?>" alt="">

    <p>
        <?php echo $articulo['extracto_articulo']; ?>
    </p>

    <a href="single.php?id=<?php echo $articulo['id_articulo']; ?>">leer más</a>
</div>
<?php endforeach; ?>

<?php
require 'views/paginacion.php';
require 'views/footer.php';
?>