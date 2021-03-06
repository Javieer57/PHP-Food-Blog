<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8' />
    <meta name='author' content='Javier Eufracio' />
    <meta name='description' content='A fake food blog made with PHP, Bootstrap and MySQL.' />
    <meta name='keywords' content='web developer, front-end developer, css3, html5, responsive, javascript, blog, php, bootstrap, MySQL' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    <link rel='shortcut icon' href='<?php echo IMG_DIRECTION; ?>favicon.ico' type='image/x-icon' />

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Main Style -->
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_URL; ?>assets/css/plugin/owl.carousel.min.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo BASE_URL; ?>assets/css/styles.css' />

    <!-- TinyMCE -->
    <script src="<?php echo TINY_EDITOR ?>" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: '#content',
        plugins: 'link',
        height: 500
        // default_link_target: '_blank'
    });
    </script>

    <!-- JS -->
    <script defer src="<?php echo BASE_URL; ?>assets/js/vendor/jquery.min.js"></script>
    <script defer src="<?php echo BASE_URL; ?>assets/js/plugin/owl.carousel.min.js"></script>

    <script defer src='<?php echo BASE_URL; ?>assets/js/main.js'></script>