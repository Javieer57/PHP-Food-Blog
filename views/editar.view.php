<?php
require 'header.php';
?>
<h1>editar</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<label for="titulo">Título
	<input type="text" name="titulo" id="titulo" value="<?php echo $post['title']; ?>">
	</label>
	<br>
	<br>
	<label for="extracto">Extracto
		<textarea name="extracto" id="extracto"><?php echo $post['info']; ?></textarea>
	</label>
	<br>
	<br>
	<label for="contenido">Contenido
		<textarea name="contenido" id="contenido"><?php echo $post['content']; ?></textarea>
	</label>
	<br>
	<br>
	<label for="thumb">Contenido
		<input type="file" name="thumb" id="thumb" accept="image/.jpg, image/.png">
		<input type="hidden" name="thumb-guardada" value="<?php echo $post['image']; ?>">
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