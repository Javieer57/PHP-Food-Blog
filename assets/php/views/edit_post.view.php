<?php require './assets/php/views/header.php';?>
<title>Edit post | Cook Blog</title>
</head>

<body>
    <?php require './assets/php/views/navbar.view.php';?>

    <main class="container mb-5">
        <div class="row">
            <div class="col">
                <h2>Edit post</h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

                    <div class="mb-3">
                        <label class="form-label" for="title">Title</label>

                        <input class="form-control" id="title" name="title" type="text" value="<?php echo $post['title']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="info">Description</label>

                        <textarea class="form-control" name="info" id="info" maxlength="200" style="resize: none;" aria-describedby="postDescription"><?php 
                            echo $post['info']; 
                        ?></textarea>
                        <div id="postDescription" class="form-text">
                            Maximum 200 characters
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="content">Content</label>

                        <textarea class="form-control" name="content" id="content"><?php 
                            echo $post['content']; 
                        ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="thumb">Image of the post</label>

                        <input accept="image/.jpg, image/.png" id="thumb" name="thumb" class="form-control" type="file" aria-describedby="postThumb">

                        <input name="saved_thumb" value="<?php echo $post['image']; ?>" type="hidden">
                        <div id="postThumb" class="form-text">
                            Only images .jpg or .png
                        </div>
                    </div>

                    <div class="row mb-3">
                        <p>Actual image</p>

                        <div class="col col-sm-6 col-md-4 col-lg-2">
                            <img src="<?php echo IMG_DIRECTION . 'blog/list/' . $post['image']; ?>" alt="">
                        </div>
                    </div>

                    <input class="btn bt-dark text-light" type="submit" value="Save post">
                </form>

                <?php if(!empty($errores)): ?>
                <p><b><?php echo $errores; ?></b></p>
                <?php endif ?>
            </div>
        </div>
    </main>

    <?php require './assets/php/views/footer.php'; ?>