<?php 
// the first include should be config.php
require './assets/php/admin/config.php';
require 'functions.php';

/* Bug: does not accept other image that have the same name of one image saved */

validateLogin();

// if there is a post method, update the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = sanitizeData($_POST['id']);
	$title = sanitizeData($_POST['title']);
	$info = sanitizeData($_POST['info']);
	$content = sanitizeData($_POST['content']);
	$thumb = sanitizeData($_FILES['thumb']['name']);
	$saved_thumb = sanitizeData($_POST['saved_thumb']);


	// if there is not new thumb, take the previous one
	if (empty($thumb)) {
			$thumb = $saved_thumb;
	} else{
		// Defines the name of the container that will receive the temporary file
		$temp_file = IMG_DIRECTION . $_FILES['thumb']['name'];

		// Move the temporary file to the container (and it will no longer be temporary)
		move_uploaded_file($thumb, $temp_file);
	}

	$sql = 
		'UPDATE articles 
		SET title = :title , 
		info = :info, 
		content = :content, 
		image = :thumb
		WHERE id = :id';
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
	
	if (!isset($post)) {
		header('Location: admin.php');
	}
}


require './assets/php/views/edit_post.view.php';
?>