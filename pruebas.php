<?php
$pagina_actual = isset($_GET['p']) ? (int)$_GET['p'] : 1; // int

var_dump($pagina_actual);
// var_dump((int)$_GET['p']);
// var_dump(is_int($_GET['p']));
?>