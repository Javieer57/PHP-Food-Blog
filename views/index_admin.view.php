<?php
require 'header.php';
?>
<h1>Admin</h1>
<a href="nuevo_post.php">Nuevo post</a>
<a href="<?php echo BASE_URL; ?>cerrar.php">Cerrar sesión</a>

<br><br><br>


<!-- :::::: Inicio de sección de artículos :::::: -->
<?php foreach($articulos as $articulo): ?>
<div class="">
    <h2>
		<?php echo $articulo['titulo_articulo']; ?>        
    </h2>

	
    <a href="editar.php?id=<?php echo $articulo['id_articulo']; ?>">Editar</a>
    <a href="../single.php?id=<?php echo $articulo['id_articulo']; ?>">Ver</a>
    <a href="borrar.php?id=<?php echo $articulo['id_articulo']; ?>">Borrar</a>
</div>
<?php endforeach; ?>

<?php
require 'paginacion.php';
require 'footer.php';
?>