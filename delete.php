<!-- the first include should be config.php -->
<?php require './assets/php/admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php 
validateLogin();

$id = sanitizeData($_GET['id']);

if (!isset($id) || empty($id)) {
	header('Location: admin.php');
}

$sql = 'DELETE FROM articles WHERE id = :id';
$statement = $conn->prepare($sql);
$statement->execute(array(":id" => $id));

header('Location: admin.php');
?>