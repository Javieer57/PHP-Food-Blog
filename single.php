<?php 
// the first include should be config.php
require './assets/php/admin/config.php';
require 'functions.php';

// get the post to show
$post_id =  (int)$_GET['id'];
$post = getPost($post_id);

// return to index if there is no post
if (!isset($post_id) || $post == false ) {
	header('location: index.php');	
}

require './assets/php/views/single.view.php';
?>