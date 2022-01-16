<!-- the first include should be config.php -->
<?php require './assets/php/admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php

/* Bug: does not accept other image that have the same name of one image saved */

validateLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = sanitizeData($_POST['id']);
	$title = sanitizeData($_POST['title']);
	$info = sanitizeData($_POST['info']);
	$content = sanitizeData($_POST['content']);
	$thumb = sanitizeData($_FILES['thumb']['name']);
	$saved_thumb = sanitizeData($_POST['saved_thumb']);


	if (empty($thumb)) {
			$thumb = $saved_thumb;
	} else{
		// Defines the name of the container that will receive the temporary file
		$temp_file = IMG_DIRECTION . $_FILES['thumb']['name'];

		// Move the temporary file to the container (and it will no longer be temporary)
		move_uploaded_file($thumb, $temp_file);
	}

	$sql = 
		"UPDATE articles 
		SET title = :title , info = :info, content = :content, image = :thumb
		WHERE id = :id";
	$statement = $conn->prepare($sql);

	$statement->execute(array(
		":title" => $title, 
		":info" => $info,
		":content" => $content,
		":thumb" => $thumb,
		":id" => $id,
	));

	header('Location: admin.php');
} else {
	$post = getPost($_GET['id']);
	if (!$post) {
		header('Location: error.php');
	}
}
?>

<?php require './assets/php/views/edit_post.view.php'; ?>