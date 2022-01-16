<!-- the first include should be config.php -->
<?php require './assets/php/admin/config.php'; ?>
<?php require 'functions.php'; ?>

<?php
// return to index if there is no search
if (!$_GET['search']) {
	header('Location: index.php');
}

// get posts based in sanitezed data
$search = sanitizeData($_GET['search']);
$search_results = getPostsBySearch($search);

// calculate the number of pages for the pagination
$total_pages = calcPages('search', $search);
?>

<?php require './assets/php/views/search.view.php'; ?>