<?php require_once(ROOT_PATH . '/views/header.php');?>
<title>Home | Cook Blog</title>
</head>

<body>
    <!-- :::::: Start Navbar :::::: -->
    <?php require_once(ROOT_PATH . '/views/navbar.view.php');?>
    <!-- :::::: End Navbar :::::: -->

    <!-- :::::: Start Posts :::::: -->
    <div class="grid">
        <?php foreach($posts as $post): ?>
        <div class="card text_center">
            <div class="card__img">
                <img src="<?php echo BASE_URL . $blog_config['images'] . $post['image']; ?>" alt="">
            </div>
            <div class="card__contenido">
                <a href="single_post.php?id=<?php echo $post['id']; ?>">
                    <h3 class="card__title text_capitalize">
                        <?php echo $post['title']; ?>
                    </h3>
                </a>
                <div class="divider"></div>
                <p class="card__text">
                    <?php echo $post['info']; ?>
                </p>
                <a href="single_post.php?id=<?php echo $post['id']; ?>" class="card__readbtn text_uppercase">read more</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div><!-- :::::: End Posts :::::: -->

    <!-- :::::: Start Pagination :::::: -->
    <?php require_once(ROOT_PATH . '/views/paginacion.php'); ?>
    <!-- :::::: End Pagination :::::: -->

    <!-- :::::: Start Footer :::::: -->
    <?php require_once(ROOT_PATH . '/views/footer.php'); ?>