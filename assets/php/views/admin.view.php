<?php require './assets/php/views/header.php';?>
<title>Admin | Cook Blog</title>
</head>

<body>
    <?php require './assets/php/views/navbar.view.php';?>

    <main class="container my-5">
        <div class="row">
            <div class="col">
                <h2 class="card__title">Admin</h2>
                <a href="nuevo_post.php">Nuevo post</a>

            </div>
        </div>
        <div class="row my-5">
            <div class="col">
                <!-- :::::: Start Posts :::::: -->
                <?php foreach($articulos as $articulo): ?>
                <div class="mb-4">
                    <h3 class="h4 font-title">
                        <?php echo $articulo['title']; ?>
                    </h3>

                    <a href="edit_post.php?id=<?php echo $articulo['id']; ?>">Editar</a>
                    <a href="single.php?id=<?php echo $articulo['id']; ?>">Ver</a>
                    <a href="borrar.php?id=<?php echo $articulo['id']; ?>">Borrar</a>
                </div>
                <?php endforeach; ?>
                <!-- :::::: End Posts :::::: -->

            </div>
        </div>
    </main>

    <?php require './assets/php/views/pagination.php'; ?>
    <?php require './assets/php/views/footer.php'; ?>