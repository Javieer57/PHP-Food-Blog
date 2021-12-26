<?php
session_start();
require 'admin/config.php'; 
require 'funciones.php'; 

if (!isset($_SESSION['usuario'])) {
	header('Location: login.php');
} 

/* Conectamos a BD y traemos los post */
$conexion = conectarBD($bd_config);

require 'views/admin.view.php'; 
?>