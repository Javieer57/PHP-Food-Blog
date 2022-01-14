<!-- the first include should be config.php -->
<?php require 'assets/php/admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php
// return to index if there is no conection to DB
if (!$conn) {
	header('location: error.php');	
}

// get the post to show
$post_id =  (int)$_GET['id'];
$post = getPost($post_id);

// return to index if there is no post
if (!isset($post_id) || $post == false ) {
	header('location: index.php');	
}
?>

<?php require 'assets/php/views/single.view.php'; ?>