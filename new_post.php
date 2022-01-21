<?php 
// the first include should be config.php
require './assets/php/admin/config.php';
require 'functions.php';

validateLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
	$title = sanitizeData($_POST['title']);
	$info = sanitizeData($_POST['info']);
	$content = sanitizeData($_POST['content']);
	$thumb = sanitizeData($_FILES['thumb']['tmp_name']);
	
	if (empty($title) || empty($info) || empty($content) || empty($_FILES)) {
		$errors = 'Please capture all fields';
	} else {
		// Defines the name of the container that will receive the temporary file
		$temp_file = IMG_DIRECTION . $_FILES['thumb']['name'];

		// Move the temporary file to the container (and it will no longer be temporary)
		move_uploaded_file($thumb, $temp_file);

		$sql = 
			'INSERT INTO articles (title, info, content, image)
			VALUES (:title, :info, :content, :thumb)';
		$statement = $conn->prepare($sql);
		$statement->execute(array(
			":title" => $title, 
			":info" => $info,
			":content" => $content,
			":thumb" => $_FILES['thumb']['name']
		));

		header('Location: admin.php');
	}
}

require './assets/php/views/new_post.view.php';
?>