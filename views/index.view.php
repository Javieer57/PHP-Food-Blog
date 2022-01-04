<?php
require 'views/header.php';
?>

<!-- :::::: Inicio de sección de artículos :::::: -->
<div class="grid">    
    <?php foreach($articulos as $articulo): ?>    
        <div class="card text_center">
            <div class="card__img">
                <img src="<?php echo RUTA.$blog_config['carpeta_imagenes'].$articulo['thumb_articulo']; ?>" alt="">
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