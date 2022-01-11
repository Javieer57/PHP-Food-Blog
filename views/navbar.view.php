<!-- :::::: Start Header :::::: -->
<header class="container-fluid grey-border-bottom">
    <div class="container py-4">
        <div class="row row-cols-auto align-items-center">
            <div class="col d-flex gap-4">
                <a class="header__icon" href="javascript:;">
                    <i class="fa-fw fab fa-facebook-f"></i>
                </a>
                <a class="header__icon" href="javascript:;">
                    <i class="fa-fw fab fa-youtube"></i>
                </a>
                <a class="header__icon" href="javascript:;">
                    <i class="fa-fw fab fa-twitter"></i>
                </a>
                <a class="header__icon" href="javascript:;">
                    <i class="fa-fw fab fa-instagram"></i>
                </a>
            </div>
            <div class="col offset-3 me-auto">
                <a class="title_1 text_uppercase header__logo justify-content-center" href="<?php echo BASE_URL; ?>">MINIMAG</a>
            </div>
            <div class="col d-flex gap-4">
                <button class="header__icon reset-button">
                    <i class="fa-fw fas fa-search"></i>
                </button>
                <?php if(!isset($_SESSION['usuario'])): ?>
                <a class="header__icon" href="<?php echo BASE_URL; ?>login.php">
                    <i class="fa-fw fas fa-user"></i>
                </a>
                <?php else: ?>
                <a class="header__icon" href="<?php echo BASE_URL; ?>cerrar.php">
                    <i class="fa-fw fas fa-sign-out-alt"></i>
                </a>
                <?php endif ?>
            </div>
        </div>
    </div>
</header>
<!-- :::::: End Header :::::: -->

<!-- :::::: Start Navegation :::::: -->
<div class="container-fluid grey-border-bottom">
    <div class="container">
        <div class="row row-cols-auto justify-content-center">
            <div class="col">
                <nav class="nav gap-4">
                    <a class="text_uppercase nav__link" href="javascript:;">HOME</a>
                    <a class="text_uppercase nav__link" href="javascript:;">CATEGORIES <i class="fa-fw fas fa-chevron-down"></i></a>
                    <a class="text_uppercase nav__link" href="javascript:;">CONTACT</a>
                    <a class="text_uppercase nav__link" href="javascript:;">ABOUT US</a>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- :::::: End Navegation :::::: -->