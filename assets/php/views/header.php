<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <meta name='author' content='Javier Eufracio' />
    <meta name='description' content='An amazing new project.' />
    <meta name='keywords' content='web developer, front-end developer, css3, html5, responsive, javascript, project' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    <link rel='shortcut icon' href='./assets/img/favicon.ico' type='image/x-icon' />

    <!-- <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <base target='_blank' /> -->

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Fontawesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!-- Feather Icons -->
    <script defer src='https://unpkg.com/feather-icons'></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main Style -->
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_URL; ?>./assets/css/plugin/owl.carousel.min.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_URL; ?>./assets/css/styles.css' />

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/bguxgewbckohq4tizpp0go6q2vkkqgnjrxzftqlfs8xfbj44/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: '#content',
        plugins: 'link',
        height: 500
        // default_link_target: '_blank'
    });
    </script>

    <style>
    .post__body a {
        color: darkturquoise;
    }
    </style>

    <!-- JS -->
    <script defer src="<?php echo BASE_URL; ?>./assets/js/vendor/jquery.min.js"></script>
    <script defer src="<?php echo BASE_URL; ?>./assets/js/plugin/owl.carousel.min.js"></script>

    <script defer src='<?php echo BASE_URL; ?>./assets/js/main.js'></script>