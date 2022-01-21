<?php 
// the first include should be config.php
require './assets/php/admin/config.php';
require 'functions.php';

validateLogin();

$id = sanitizeData($_GET['id']);

// if there is not id, return to admin
if (!isset($id) || empty($id)) {
	header('Location: admin.php');
}

// delete post with selected id
$sql = 'DELETE FROM articles WHERE id = :id';
$statement = $conn->prepare($sql);
$statement->execute(array(":id" => $id));

header('Location: admin.php');
?>