<?php
require 'views/header.php';
?>

<?php
    foreach ($articulos as $articulo) {
        # code...
    }
?>


<!-- Imprimir artículos -->
<?php foreach($articulos as $articulo): ?>
<div class="">
    <h2><a href="single.php?id=<?php echo $articulo['id_articulo']; ?>">
            <?php echo $articulo['titulo_articulo']; ?>
        </a></h2>

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


<!-- <br><br><br>
<div class="">
    <h2><a href="#">titulo</a></h2>
    <p>12 de enero del 2020</p>
    <img src="<?php echo RUTA; ?>app/img/1.png" alt="">
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, omnis.</p>
    <a href="#">leer más</a>
</div> -->

<?php
require 'views/paginacion.php';
?>

<?php
require 'views/footer.php';
?>