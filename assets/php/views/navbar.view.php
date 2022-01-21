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
            <div class="col d-flex gap-4 align-items-center">
                <form class="input-group" action="<?php echo BASE_URL; ?>search.php" method="GET">
                    <input type="text" placeholder="Search a post" aria-label="Search" name="search" class="form-control border-0 border-bottom">
                    <span id="basic-addon1" class="input-group-text border-0 border-bottom bg-transparent"><i class="fa-fw fas fa-search"></i></span>
                </form>
                <!-- <button class="header__icon reset-button">
                    <i class="fa-fw fas fa-search"></i>
                </button> -->
                <a class="header__icon" href="http://localhost/blog/logout.php">
                    <i class="fa-fw fas fa-sign-out-alt"></i>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- :::::: End Header :::::: -->

<!-- :::::: Start Navbar :::::: -->
<div class="container-fluid grey-border-bottom mb-5">
    <div class="container">
        <div class="row row-cols-auto justify-content-center">
            <div class="col">
                <nav class="nav py-0 gap-4 align-items-center">
                    <a class="text_uppercase nav__link py-3" href="<?php echo BASE_URL; ?>">HOME</a>
                    <div class="dropdown">
                        <a class="dropdown-toggle text_uppercase nav__link py-3" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:;">CATEGORIES
                            <i class="fa-fw fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">Food</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Bakery</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Dessert</a>
                            </li>
                        </ul>
                    </div>
                    <a class="text_uppercase nav__link py-3" href="javascript:;">CONTACT</a>
                    <a class="text_uppercase nav__link py-3" href="javascript:;">ABOUT US</a>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- :::::: End Navbar :::::: -->