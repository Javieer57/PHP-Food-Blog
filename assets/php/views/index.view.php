<?php require 'assets/php/views/header.php'; ?>
<title>Home | Cook Blog</title>
</head>

<body>
    <?php require 'assets/php/views/navbar.view.php'; ?>

    <!-- :::::: Start Posts :::::: -->
    <main class="container my-5">
        <div class="row row-cols-3 g-5">
            <?php foreach($posts as $post): ?>
            <section class="col">
                <div class="card text-center h-100">
                    <img class="card__img card-img-top" src="<?php echo BASE_URL . $blog_config['images'] . $post['image']; ?>" alt="">
                    <div class="card-body pb-0">
                        <span class="card-category text-uppercase mb-2 d-block ">Food</span>
                        <a href="single.php?id=<?php echo $post['id']; ?>">
                            <h3 class="card__title text-capitalize d-inline-block mb-0">
                                <?php echo $post['title']; ?>
                            </h3>
                        </a>
                        <div class="divider my-3 mx-auto"></div>
                        <div class="card__text">
                            <?php echo $post['info']; ?>
                        </div>
                    </div>
                    <div class="card-footer py-3">
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="card__readbtn text_uppercase">read more</a>
                    </div>
                </div>
            </section>
            <?php endforeach; ?>
        </div>
    </main>
    <!-- :::::: End Posts :::::: -->

    <?php require 'assets/php/views/pagination.php'; ?>
    <?php require 'assets/php/views/footer.php'; ?>