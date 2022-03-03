<!-- :::::: Start Header :::::: -->
<header class="container-fluid grey-border-bottom d-none d-xl-block">
    <div class="container py-4">
        <div class="row row-cols-auto align-items-center">
            <div class="col d-flex gap-4">
                <a class="header__icon" href="javascript:;" title="Facebook"><i aria-hidden="true" class="bi bi-facebook"></i></a>
                <a class="header__icon" href="javascript:;" title="Youtube"><i aria-hidden="true" class="bi bi-youtube"></i></a>
                <a class="header__icon" href="javascript:;" title="Twitter"><i aria-hidden="true" class="bi bi-twitter"></i></a>
                <a class="header__icon" href="javascript:;" title="Instagram"><i aria-hidden="true" class="bi bi-instagram"></i></a>
            </div>

            <div class="col offset-3 me-auto">
                <a class="title_1 text_uppercase header__logo" href="<?php echo BASE_URL; ?>">MINIMAG</a>
            </div>

            <div class="col d-flex gap-4 align-items-center">
                <form class="input-group" action="<?php echo BASE_URL; ?>search.php" method="GET">
                    <input type="text" placeholder="Search a post" aria-label="Search" name="search" class="form-control border-0 border-bottom">
                    <span id="basic-addon1" class="input-group-text border-0 border-bottom bg-transparent"><i class="fa-fw fas fa-search"></i></span>
                </form>

                <?php if(!isset($_SESSION['user'])): ?>
                <a class="header__icon" href="<?php echo BASE_URL; ?>login.php">
                    <i class="fa-fw fas fa-user"></i>
                </a>
                <?php else: ?>
                <a class="header__icon" href="<?php echo BASE_URL; ?>logout.php">
                    <i class="fa-fw fas fa-sign-out-alt"></i>
                </a>
                <?php endif ?>
            </div>
        </div>
    </div>
</header>
<!-- :::::: End Header :::::: -->

<!-- :::::: Start Navbar :::::: -->
<div class="container-fluid grey-border-bottom mb-5 d-none d-xl-block">
    <div class="container">
        <div class="row row-cols-auto justify-content-center">
            <div class="col">
                <nav class="nav py-0 gap-4 align-items-center">
                    <a class="text_uppercase nav__link py-3" href="<?php echo BASE_URL; ?>">HOME</a>
                    <!-- <div class="dropdown">
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
                    </div> -->
                    <a class="text_uppercase nav__link py-3" href="javascript:;">CONTACT</a>
                    <a class="text_uppercase nav__link py-3" href="javascript:;">ABOUT US</a>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- :::::: End Navbar :::::: -->

<!-- <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Never expand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse show" id="navbarsExample01" style="">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
    </div>
</nav> -->

<!-- :::::: Start mobile header :::::: -->
<header class="d-block d-xl-none grey-border-bottom">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center">
                <a class="title_1 text_uppercase header__logo" href="<?php echo BASE_URL; ?>">MINIMAG</a>
                <button class="btn btn-outline-light text-dark fs-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header justify-content-between">
            <?php if(!isset($_SESSION['user'])): ?>
            <a class="header__icon" href="<?php echo BASE_URL; ?>login.php">
                <i class="fa-fw fas fa-user"></i>
            </a>
            <?php else: ?>
            <a class="header__icon" href="<?php echo BASE_URL; ?>logout.php">
                <i class="fa-fw fas fa-sign-out-alt"></i>
            </a>
            <?php endif ?>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body pt-0">

            <nav class="d-inline-flex flex-column">
                <a class="text_uppercase nav__link py-3" href="<?php echo BASE_URL; ?>">HOME</a>
                <a class="text_uppercase nav__link py-3" href="javascript:;">CONTACT</a>
                <a class="text_uppercase nav__link py-3" href="javascript:;">ABOUT US</a>
            </nav>

            <form class="input-group mt-3" action="<?php echo BASE_URL; ?>search.php" method="GET">
                <input type="text" placeholder="Search a post" aria-label="Search" name="search" class="form-control border-0 border-bottom">
                <span id="basic-addon1" class="input-group-text border-0 border-bottom bg-transparent"><i class="fa-fw fas fa-search"></i></span>
            </form>

            <div class="mx-auto d-flex gap-4 mt-5 justify-content-center">
                <a class="header__icon" href="javascript:;" title="Facebook"><i aria-hidden="true" class="bi bi-facebook"></i></a>
                <a class="header__icon" href="javascript:;" title="Youtube"><i aria-hidden="true" class="bi bi-youtube"></i></a>
                <a class="header__icon" href="javascript:;" title="Twitter"><i aria-hidden="true" class="bi bi-twitter"></i></a>
                <a class="header__icon" href="javascript:;" title="Instagram"><i aria-hidden="true" class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
</header>
<!-- :::::: End mobile header :::::: -->