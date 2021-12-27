<?php
require 'header.php';
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
	<label for="user">
		Usuario:
		<input required type="text" name="usuario" id="user" placeholder="Usuario" value="<?php echo isset($_POST['usuario']) ? $_POST['usuario'] : '' ?>">
	</label>
	<br>
	<br>
	<br>
	<label for="pass">
		Constraseña:
		<input required type="password" name="pass" id="pass" placeholder="Contraseña">
	</label>
	<br>
	<br>
	<br>
	<button type="submit">Iniciar sesión</button>
</form>
<?php if(!empty($errores)): ?>
	<p><b><?php echo $errores; ?></b></p>
<?php endif ?>
<?php
require 'footer.php';
?>