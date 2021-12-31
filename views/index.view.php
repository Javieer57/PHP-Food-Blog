<?php
require 'views/header.php';
?>
<div class="grid">
    
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
    
    <div class="card">
            <div class="card__img">
                <img src="https://images.unsplash.com/photo-1572449043416-55f4685c9bb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
            </div>
            <div class="card__contenido">
                <h3 class="card__title">
                    How To Start A Business With FOOD
                </h3>
                <div class="divider"></div>
                <p class="card__text">
                    In the Victorian age people’s attitude to food changed: it became less important. In the twentieth century two world wars meant that some of the recipes for good old English...
                </p>
                <a href="#" class="card__readbtn">read more</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
require 'views/paginacion.php';
require 'views/footer.php';
?>