<?php
require 'views/header.php';
?>

<h2>Resultados de <i><?php echo $busqueda; ?></i></h2>

<!-- Imprimir Resultados -->
<?php foreach($resultado_busqueda as $resultado): ?>
<div class="">
    <h2><a href="single.php?id=<?php echo $resultado['id_articulo']; ?>">
            <?php echo $resultado['titulo_articulo']; ?>
        </a></h2>

    <p>
        <?php echo fecha($resultado['fecha_articulo']); ?>
    </p>

    <img src="<?php echo RUTA.$blog_config['carpeta_imagenes'].$resultado['thumb_articulo']; ?>" alt="">

    <p>
        <?php echo $resultado['extracto_articulo']; ?>
    </p>

    <a href="single.php?id=<?php echo $resultado['id_articulo']; ?>">leer más</a>
</div>
<?php endforeach; ?>

<?php
    $paginas = calcularPaginas($conexion, $blog_config['post_por_pagina']);
?>

<?php

require 'views/footer.php';
?>