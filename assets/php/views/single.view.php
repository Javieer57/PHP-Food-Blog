<?php require './assets/php/views/header.php';?>

<title><?php echo $post['title']; ?> | Cook Blog</title>
</head>

<body>
    <?php require './assets/php/views/navbar.view.php';?>

    <!-- :::::: Start Post :::::: -->
    <main class="container my-4">
        <div class="row">
            <div class="col">
                <div class="ratio ratio-21x9 mb-5" style="background-image: url(<?php echo IMG_DIRECTION . $post['image']; ?>);">
                </div>

                <h1 class="card__title h1" style="font-size: 2.5rem;"><?php echo $post['title']; ?></h1>
                <small class="text-muted"><?php echo formatDate($post['date']); ?></small>

                <div class="post__body mt-4">
                    <?php echo html_entity_decode($post['content'], ENT_HTML5, "UTF-8"); ?>
                </div>
            </div>
        </div>
    </main>
    <!-- :::::: End Post :::::: -->

    <?php require './assets/php/views/footer.php';?>