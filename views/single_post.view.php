<?php require_once(ROOT_PATH . '/views/header.php');?>

<title><?php echo $post['title']; ?> | Cook Blog</title>
</head>

<body>
    <!-- :::::: Start Navbar :::::: -->
    <?php require_once(ROOT_PATH . '/views/navbar.view.php');?>
    <!-- :::::: End Navbar :::::: -->

    <!-- :::::: Start Post :::::: -->
    <div class="">
        <h2><?php echo $post['title']; ?></h2>

        <p><?php echo formatDate($post['date']); ?></p>

        <img src="<?php echo BASE_URL . $blog_config['images'] . $post['image']; ?>" alt="">

        <p><?php echo nl2br($post['content']); ?></p>
    </div><!-- :::::: End Post :::::: -->

    <!-- :::::: Start Footer :::::: -->
    <?php require_once(ROOT_PATH . '/views/footer.php'); ?>