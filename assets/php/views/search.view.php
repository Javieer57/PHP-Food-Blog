<?php require './assets/php/views/header.php'; ?>
<title>Search | Cook Blog</title>
</head>

<body>
    <?php require './assets/php/views/navbar.view.php'; ?>

    <!-- :::::: Start Search Results :::::: -->
    <main class="container mb-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-5">Resultados de <i><?php echo $search; ?></i></h2>

                <?php foreach($search_results as $resultado): ?>
                <div class="mb-5">
                    <h2>
                        <a href="single.php?id=<?php echo $resultado['id']; ?>">
                            <?php echo $resultado['title']; ?>
                        </a>
                    </h2>

                    <!-- <p>
                        <?php echo formatDate($resultado['date']); ?>
                    </p> -->

                    <!-- <img src="<?php echo BASE_URL.$blog_config['images'].$resultado['image']; ?>" alt=""> -->

                    <p>
                        <?php echo $resultado['info']; ?>
                    </p>

                    <a href="single.php?id=<?php echo $resultado['id']; ?>">leer más</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <!-- :::::: End Search Results :::::: -->

    <?php require './assets/php/views/pagination.php'; ?>
    <?php require './assets/php/views/footer.php'; ?>