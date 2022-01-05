<?php require_once('admin/config.php'); ?>
<?php define ('ROOT_PATH', realpath(dirname(__FILE__))); ?>
<?php require_once(ROOT_PATH . '/funciones.php'); ?>
<?php $conexion = conectarBD($bd_config); ?>

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

<?php require_once(ROOT_PATH . '/views/single_post.view.php'); ?>