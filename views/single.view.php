<?php
require 'views/header.php';
?>

<!-- :::::: Inicio de sección de artículo :::::: -->
<div class="">
    <h2><?php echo $single_post['title']; ?></h2>

    <p><?php echo formatearFecha($single_post['date']); ?></p>

    <img src="<?php echo BASE_URL.$blog_config['carpeta_imagenes'].$single_post['image']; ?>" alt="">

    <p><?php echo nl2br($single_post['content']); ?></p>
</div>

<?php
require 'views/footer.php';
?>