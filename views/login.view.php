<?php require_once(ROOT_PATH . '/views/header.php');?>
<title>Log In | Cook Blog</title>
</head>

<body>
    <?php require_once(ROOT_PATH . '/views/navbar.view.php');?>

    <section class="container my-5">
        <div class="row">
            <div class="col-5 mx-auto">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login" class="needs-validation" novalidate>
                    <div class="row mb-3">
                        <div class="col-2">
                            <label for="user" class="col-form-label">User:</label>
                        </div>

                        <div class="col">
                            <input class="form-control" type="text" name="usuario" id="user" value="<?php echo isset($_POST['usuario']) ? $_POST['usuario'] : '' ?>" required>
                            <div class="valid-feedback">
                                Valid user.
                            </div>
                            <div class="invalid-feedback">
                                Please type a user.
                            </div>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <label for="pass" class="col-form-label">Password:</label>
                        </div>

                        <div class="col ">
                            <input type="password" name="pass" id="pass" placeholder="*****" class="form-control" required>
                            <div class="valid-feedback">
                                Valid password
                            </div>
                            <div class="invalid-feedback">
                                Please type a password.
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                </form>
                <?php if(!empty($errores)): ?>
                <p><b><?php echo $errores; ?></b></p>
                <?php endif ?>
            </div>
        </div>
    </section>


    <?php require_once(ROOT_PATH . '/views/footer.php'); ?>