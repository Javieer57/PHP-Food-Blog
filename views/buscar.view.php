<?php
require 'views/header.php';
?>

<!-- :::::: Inicio de sección de resultados :::::: -->
<h2>Resultados de <i><?php echo $busqueda; ?></i></h2>

<?php foreach($resultado_busqueda as $resultado): ?>
<div class="">
    <h2>
        <a href="single.php?id=<?php echo $resultado['id']; ?>">
            <?php echo $resultado['title']; ?>
        </a>
    </h2>

    <p>
        <?php echo formatDate($resultado['fecha_articulo']); ?>
    </p>

    <img src="<?php echo BASE_URL.$blog_config['images'].$resultado['image']; ?>" alt="">

    <p>
        <?php echo $resultado['info']; ?>
    </p>

    <a href="single.php?id=<?php echo $resultado['id']; ?>">leer más</a>
</div>
<?php endforeach; ?>



<?php
require 'views/pagination.php';
require 'views/footer.php';
?>