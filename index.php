<!-- the first include should be config.php -->
<?php require 'assets/php/admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php
// get all posts from the database
$posts = getAllPosts();

// if there is no posts, go to error.php
if (!$posts) {
	header('location: error.php');	
};

// calculate the number of pages for the pagination
$total_pages = calcPages('all');
?>

<?php require 'assets/php/views/index.view.php'; ?>