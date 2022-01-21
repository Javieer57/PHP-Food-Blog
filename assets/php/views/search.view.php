<?php require './assets/php/views/header.php'; ?>
<title>Search '<?php echo $search; ?>' | Cook Blog</title>
</head>

<body>
    <?php require './assets/php/views/navbar.view.php'; ?>


    <main class="container mb-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-5 card__title h1" style="font-size: 2.5rem;">Search results: <i class="fw-light"><?php echo $search; ?></i></h2>

                <!-- :::::: Start Search Results :::::: -->
                <?php foreach($search_results as $result): ?>
                <article class="mb-3 p-4" style="border: 1px solid rgba(0,0,0,.125);">
                    <h2 class=" card__title h2 ">
                        <a href="<?php echo BASE_URL . 'single.php?id=' . $result['id']; ?>">
                            <?php echo $result['title']; ?>
                        </a>
                    </h2>

                    <p class="mb-0"><?php echo $result['info']; ?></p>

                    <!-- <a class="card__readbtn" href="<?php echo BASE_URL . 'single.php?id=' . $result['id']; ?>" aria-label="Read <?php echo $search; ?>">Read more</a> -->
                </article>
                <?php endforeach; ?>
                <!-- :::::: End Search Results :::::: -->
            </div>
        </div>
    </main>



    <?php require './assets/php/views/pagination.php'; ?>
    <?php require './assets/php/views/footer.php'; ?>