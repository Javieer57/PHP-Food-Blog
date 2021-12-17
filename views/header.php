<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <meta name='author' content='Javier Eufracio' />
    <meta name='description' content='An amazing new project.' />
    <meta name='keywords' content='web developer, front-end developer, css3, html5, responsive, javascript, project' />

    <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    <!-- <base target='_blank' /> -->
    <!-- <link rel='shortcut icon' href='./app/img/favicon.svg' type='image/x-icon' /> -->

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Feather Icons -->
    <!-- <script defer src='https://unpkg.com/feather-icons'></script> -->

    <!-- Main Style -->
    <link rel='stylesheet' type='text/css' href='<?php echo RUTA; ?>dist/styles.css' />

    <!-- Main Script -->
    <script defer src='<?php echo RUTA; ?>dist/main.js'></script>

    <title>Práctica Blog</title>
</head>

<body>
    <header>
        <h1><a href="<?php echo RUTA; ?>">Blog comida</a></h1>
    </header>

    <form action="<?php echo RUTA; ?>buscar.php" method="get" name="busqueda">
        <input type="text" name="busqueda" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
    <br><br><br><br><br>