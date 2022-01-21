<?php require './assets/php/views/header.php'; ?>

<title>New post | Cook Blog</title>
</head>

<body>
    <?php require './assets/php/views/navbar.view.php'; ?>

    <main class="container">
        <h2 class="card__title h1 mb-4" style="font-size: 2.5rem;">New post</h2>

        <div class="row">
            <div class="col">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label" for="title">Title</label>

                        <input class="form-control" type="text" name="title" id="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="info">Description</label>

                        <textarea class="form-control" name="info" id="info" maxlength="200" style="resize: none;" aria-describedby="postDescription"><?php 
                            echo isset($_POST['info']) ? $_POST['info'] : '';
                        ?></textarea>
                        <div id="postDescription" class="form-text">
                            Maximum 200 characters
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="content">Content</label>

                        <textarea class="form-control" name="content" id="content"><?php 
                            echo isset($_POST['content']) ? $_POST['content'] : '';
                        ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="thumb">Thumb</label>

                        <input class="form-control" type="file" name="thumb" id="thumb" accept="image/.jpg, image/.png" required>
                        <div id="thumb" class="form-text">
                            Only images .jpg or .png
                        </div>
                    </div>

                    <input class="btn btn-dark text-light" type="submit" value="Save post">
                </form>
            </div>
        </div>
    </main>




    <!-- <?php if(!empty($errores)): ?>
    <p><b><?php echo $errores; ?></b></p>
    <?php endif ?> -->

    <?php
require 'footer.php';
?>