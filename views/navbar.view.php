<!-- :::::: Start Header :::::: -->
<header class="container-fluid grey-border-bottom">
    <div class="header container">
        <div class="header__icons-wrap header__left">
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
        <a class="title_1 text_uppercase" href="<?php echo BASE_URL; ?>">MINIMAG</a>
        <div class="header__icons-wrap header__right">
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
</header><!-- :::::: End Header :::::: -->

<!-- :::::: Start Navegation :::::: -->
<nav class="container-fluid grey-border-bottom">
    <div class="nav container">
        <div class="nav__links-wrap">
            <a class="text_uppercase nav__link" href="javascript:;">HOME</a>
            <a class="text_uppercase nav__link" href="javascript:;">CATEGORIES <i class="fa-fw fas fa-chevron-down"></i></a>
            <a class="text_uppercase nav__link" href="javascript:;">CONTACT</a>
            <a class="text_uppercase nav__link" href="javascript:;">ABOUT US</a>
        </div>
    </div>
</nav><!-- :::::: End Navegation :::::: -->