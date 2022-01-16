<?php

require './assets/php/admin/config.php'; 
require '../functions.php'; 

validateLogin();

$id = sanitizeData($_GET['id']);

if (!$conn) {
	header('Location: ../error.php');
}

if (!isset($id) || empty($id)) {
	header('Location: index.php');
}

$sentencia = $conn->prepare('DELETE FROM articles WHERE id = :id');
$sentencia->execute(array(":id" => $id));

header('Location: index.php');



?>