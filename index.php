<!-- the first include should be config.php -->
<?php require_once('admin/config.php'); ?>
<?php define ('ROOT_PATH', realpath(dirname(__FILE__))); ?>
<?php require_once(ROOT_PATH . '/funciones.php'); ?>

<?php
// get all posts from database
$posts = getPosts();

// go to error.php if there is no conection to DB or posts to show
if (!$conn || !$posts) {
	header('location: error.php');	
};

// calculate the number of pages for the pagination
$total_pages = calcPages('all');
?>

<?php require_once(ROOT_PATH . '/views/index.view.php'); ?>