<?php require_once(ROOT_PATH . '/views/header.php');?>

<title><?php echo $post['title']; ?> | Cook Blog</title>
</head>

<body>
    <?php require_once(ROOT_PATH . '/views/navbar.view.php');?>

    <!-- :::::: Start Post :::::: -->
    <main class="container my-4">
        <div class="row">
            <div class="col">
                <div class="ratio ratio-21x9 mb-3">
                    <img src="<?php echo BASE_URL . $blog_config['images'] . $post['image']; ?>" alt="">
                </div>

                <h1 class="card__title"><?php echo $post['title']; ?></h1>

                <small class="text-muted"><?php echo formatDate($post['date']); ?></small>

                <div class="post__body mt-3">
                    <p><?php echo nl2br($post['content']); ?></p>
                </div>
            </div>
        </div>
    </main>
    <!-- :::::: End Post :::::: -->

    <?php require_once(ROOT_PATH . '/views/footer.php'); ?>