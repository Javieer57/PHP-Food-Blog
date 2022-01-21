<?php 
// the first include should be config.php
require './assets/php/admin/config.php';
require 'functions.php';

// get all posts from the database
$posts = getAllPosts();

// if there is no posts, go to error.php
if (!$posts) {
	header('location: error.php');	
};

// calculate the number of pages for the pagination
$total_pages = calcPages('all');

require './assets/php/views/index.view.php';
?>