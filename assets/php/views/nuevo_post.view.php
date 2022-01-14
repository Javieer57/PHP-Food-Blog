<?php
require 'header.php';
?>
<h1>Nuevo post</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).$post['id']; ?>" method="post" enctype="multipart/form-data">
	<label for="titulo">Título
	<input require type="text" name="titulo" id="titulo" value="<?php echo isset($_POST['titulo']) ? $_POST['titulo'] : '' ?>">
	</label>
	<br>
	<br>
	<label for="extracto">Extracto
		<textarea required name="extracto" id="extracto"><?php echo isset($_POST['extracto']) ? $_POST['extracto'] : '' ?></textarea>
	</label>
	<br>
	<br>
	<label for="contenido">Contenido
		<textarea required name="contenido" id="contenido"><?php echo isset($_POST['contenido']) ? $_POST['contenido'] : '' ?></textarea>
	</label>
	<br>
	<br>
	<label for="thumb">Imagen
		<input required type="file" name="thumb" id="thumb" accept="image/.jpg, image/.png">
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