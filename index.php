<!-- the first include should be config.php -->
<?php require 'assets/php/admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php
// get all posts from database
$posts = getAllPosts();

// go to error.php if there is no conection to DB or posts to show
if (!$conn || !$posts) {
	header('location: error.php');	
};

// calculate the number of pages for the pagination
$total_pages = calcPages('all');
?>

<?php require 'assets/php/views/index.view.php'; ?>