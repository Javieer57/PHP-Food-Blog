<?php require './assets/php/views/header.php';?>
<title>Admin | Cook Blog</title>
</head>

<body>
    <?php require './assets/php/views/navbar.view.php';?>

    <main class="container my-5">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-between">
                <h2 class="card__title h1 mb-0" style="font-size: 2.5rem;">Admin</h2>
                <a class="btn btn-dark" href="new_post.php">New post</a>
            </div>
        </div>

        <!-- :::::: Start Posts :::::: -->
        <div class="row my-5">
            <?php foreach($posts as $post): ?>
            <div class="col-12 mb-3 d-flex justify-content-between align-items-center py-4 border">
                <h3 class="h4 font-title mb-0">
                    <?php echo $post['title']; ?>
                </h3>

                <div class="actions d-flex gap-3">
                    <a class="d-flex flex-column text-center btn gap-2 " href="<?php echo BASE_URL . "edit.php?id=" . $post['id']; ?>">
                        <i class="fa-fw mx-auto fas fa-edit"></i>
                        Edit
                    </a>
                    <a class="d-flex flex-column text-center btn gap-2 " href="<?php echo BASE_URL . "single.php?id=" . $post['id']; ?>">
                        <i class="fa-fw mx-auto fas fa-eye"></i>
                        See
                    </a>
                    <a class="d-flex flex-column text-center btn gap-2 " href="<?php echo BASE_URL . "delete.php?id=" . $post['id']; ?>">
                        <i class="fa-fw mx-auto fas fa-trash"></i>
                        Delete
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- :::::: End Posts :::::: -->
    </main>

    <?php require './assets/php/views/pagination.php'; ?>
    <?php require './assets/php/views/footer.php'; ?>