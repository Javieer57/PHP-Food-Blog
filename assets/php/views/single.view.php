<?php require './assets/php/views/header.php';?>

<title><?php echo $post['title']; ?> | Cook Blog</title>
</head>

<body>
    <?php require './assets/php/views/navbar.view.php';?>

    <!-- :::::: Start Post :::::: -->
    <main class="container my-4">
        <div class="row">
            <div class="col">
                <div class="ratio ratio-21x9 mb-3">
                    <img src="<?php echo IMG_DIRECTION . $post['image']; ?>" alt="">
                </div>

                <h1 class="card__title"><?php echo $post['title']; ?></h1>

                <small class="text-muted"><?php echo formatDate($post['date']); ?></small>

                <div class="post__body mt-3">
                    <?php echo html_entity_decode($post['content'], ENT_HTML5, "UTF-8"); ?>
                </div>
            </div>
        </div>
    </main>
    <!-- :::::: End Post :::::: -->

    <?php require './assets/php/views/footer.php';?>