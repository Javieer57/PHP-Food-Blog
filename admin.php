<?php 
// the first include should be config.php
require './assets/php/admin/config.php';
require 'functions.php';

validateLogin();

// get all posts from the database
$posts = getAllPosts();

// calculate the number of pages for the pagination
$total_pages = calcPages('all'); 

require './assets/php/views/admin.view.php';
?>