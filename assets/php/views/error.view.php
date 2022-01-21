<?php require './assets/php/views/header.php'; ?>

<title>Error | Cook Blog</title>
</head>

<body>

    <?php require './assets/php/views/navbar.view.php'; ?>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-7">
                <div class="mb-4">
                    <h2 class="display-1">Oops...</h2>
                    <p class="display-6 text-muted">We can't find the page you're looking for.</p>
                </div>

                <a class="btn btn-dark" href="<?php echo BASE_URL; ?>">Return to home</a>
            </div>
            <div class="col">
                <img src="<?php echo IMG_DIRECTION ?>error.png" alt="">
            </div>
        </div>
    </div>

    <?php require './assets/php/views/footer.php'; ?>