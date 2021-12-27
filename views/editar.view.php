<?php
require 'header.php';
?>
<h1>editar</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $post['id_articulo']; ?>">
	<label for="titulo">Título
	<input type="text" name="titulo" id="titulo" value="<?php echo $post['titulo_articulo']; ?>">
	</label>
	<br>
	<br>
	<label for="extracto">Extracto
		<textarea name="extracto" id="extracto"><?php echo $post['extracto_articulo']; ?></textarea>
	</label>
	<br>
	<br>
	<label for="contenido">Contenido
		<textarea name="contenido" id="contenido"><?php echo $post['contenido_articulo']; ?></textarea>
	</label>
	<br>
	<br>
	<label for="thumb">Contenido
		<input type="file" name="thumb" id="thumb" accept="image/.jpg, image/.png">
		<input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb_articulo']; ?>">
	</label>	
	<br>
	<br>
	<input type="submit" value="Guardar">
</form>

<?php if(!empty($errores)): ?>
	<p><b><?php echo $errores; ?></b></p>
<?php endif ?>

<?php
require 'footer.php';
?>