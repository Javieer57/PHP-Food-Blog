<?php
require 'views/header.php';
?>

<!-- :::::: Inicio de sección de artículo :::::: -->
<div class="">
    <h2><?php echo $single_post['titulo_articulo']; ?></h2>

    <p><?php echo formatearFecha($single_post['fecha_articulo']); ?></p>

    <img src="<?php echo RUTA.$blog_config['carpeta_imagenes'].$single_post['thumb_articulo']; ?>" alt="">
    
    <p><?php echo $single_post['contenido_articulo']; ?></p>
</div>

<?php
require 'views/footer.php';
?>