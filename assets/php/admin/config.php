<?php
session_start();

define('BASE_URL', 'http://localhost/blog/');
define('IMG_DIRECTION', 'http://localhost/blog/assets/img/');

$bd_config = array(
	'host' => 'localhost',
	'DB' => 'php_blog',
	'user' => 'root',
	'pass' => ''
);

// number of post to show in index and index of admin
$num_posts = 6;

// connect to database
try {
	$conn = new PDO(
		"mysql:host={$bd_config['host']};
		dbname={$bd_config['DB']}", 
		$bd_config['user'], 
		$bd_config['pass']
	);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $conn;
} catch (PDOException $e) {
	return false;
}

// if connection to the database failed, go to error.php
if ($conn === false) {
	header('Location: ' . BASE_URL . 'error.php');
}
?>