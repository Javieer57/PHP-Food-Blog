<?php

/****************************
 * 1- Conection functions
 * 2- Data manipulation functions
 * 3- Pagination functions
 * 4- Posts functions
****************************/


/****************************
 * 1- Conection functions
****************************/

/**
 * If the user is not logged in, return to index
 */
function validateLogin(){
	if (!isset($_SESSION['user'])) {
		header('Location: login.php');
	} 
}

/****************************
 * 2- Data manipulation functions
****************************/

/**
 * Sanitize data to prevent SQL injections
 * @param  string $data 
 * @return string sanitized data
 */
function sanitizeData($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = filter_var($data, FILTER_SANITIZE_STRING);

	return $data;
}

/**
 * Returns the date recorded in the database in an understandable format.
 * @param  string $unformatted date in YYYY-MM-DD HH:MM:SS format (recorded in the database)
 * @return string formated date
 */
function formatDate($unformatted){
	$timestamp = strtotime($unformatted);

	$months = array('January','February','March','April','May','June','July','August','September','October','November','December');

	$day = date('j', $timestamp);
	$month = $months[date('m', $timestamp) - 1];
	$year = date('o', $timestamp);
	$formatted_date = "{$month} {$day}, {$year}";

	return $formatted_date;
}

/****************************
 * 3- Pagination functions
****************************/

/**
 * Calculate the current page for pagination
 * @return int current page
 */
function currentPage(){
	// if $_GET['p'] is set, save the value, else, save 1
	$current_page = isset($_GET['p']) ? (int)$_GET['p'] : 1;

	// if value is 0, $_GET['p'] isn't a number, so save 1
	$current_page = ($current_page === 0) ? 1 : $current_page;

	return $current_page;
}

/**
 * Calculate the number of pages for the pagination 
 * @return int number of pages for pagination
 */
function calcPages($search_type, $search = ''){	
	// use global $conn object in function
	global $conn;
	// use global $num_posts in function
	global $num_posts;

	// pages for all posts
	if ($search_type === 'all') {
		$sql = 'SELECT * FROM articles';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$posts = $statement->fetchAll();
		
		$total_pages = count($posts);
	}

	// pages for a search
	if ($search_type === 'search') {
		$sql = 'SELECT * FROM articles 
			WHERE title LIKE :search
			OR info LIKE :search
			OR content LIKE :search';
		$statement = $conn->prepare($sql);
		$statement->execute(array(":search" => "%$search%"));
		$statement = $statement->fetchAll();

		$total_pages = count($statement);
	}

	$number_pages = ceil($total_pages / $num_posts);

	return $number_pages;
}

/****************************
 * 4- Posts functions
****************************/

/**
 * Returns all posts in the database selected by the number of posts to display
 * @return array all found posts
 */
function getAllPosts(){
	// use global $conn object in function
	global $conn;
	// use global $num_posts in function
	global $num_posts;

	// calc the start post for pagination
	$start = (currentPage() > 1) ? currentPage() * $num_posts - $num_posts : 0;

	$sql = "SELECT * FROM articles LIMIT :start, :num_posts";
	$statement = $conn->prepare($sql);
	$statement->bindParam(':start', $start, PDO::PARAM_INT);
	$statement->bindParam(':num_posts', $num_posts, PDO::PARAM_INT);	
	$statement->execute();	
	$posts = $statement->fetchAll();

	return $posts;
}


/**
 * Returns a single post
 * @param  int $post_id
 * @return array found post
 */
function getPost($post_id){
	// use global $conn object in function
	global $conn;
	
	$post_id = sanitizeData($post_id);

	$sql = 'SELECT * FROM articles WHERE id = :id LIMIT 1';
	$conn = $conn->prepare($sql);
	$conn->execute(array(':id' => $post_id));
	$post = $conn->fetch();

	/* Bug: Even with the wrong id, the function returns a post if the first number matches in the database */
	return $post;
}


/**
 * Returns search results
 * @param  string $search search term
 * @return array found posts
 */
function getPostsBySearch($search){
	// use global $conn object in function
	global $conn;
	// use global $num_posts in function
	global $num_posts;

	$search = sanitizeData($_GET['search']);

	// calc the start post for pagination
	$start = (currentPage() > 1) ? currentPage() * $num_posts - $num_posts : 0;

	// looking for results in title, info or content of the post
	$sql = "SELECT * FROM articles 
		WHERE title LIKE :search
		OR info LIKE :search
		OR content LIKE :search
		LIMIT $start, $num_posts";
	$statement = $conn->prepare($sql);
	$statement->execute(array(
		':search' => "%$search%"
	));	
	$results = $statement->fetchAll();

	return $results;
}