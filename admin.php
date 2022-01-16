<?php require './assets/php/admin/config.php'; ?>
<?php require  'functions.php';  ?>

<?php
validateLogin();

// get all posts from the database
$articulos = getAllPosts();

// calculate the number of pages for the pagination
$total_pages = calcPages('all'); 
?>

<?php require './assets/php/views/admin.view.php'; ?>