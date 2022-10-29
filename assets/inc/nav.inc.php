<header class="header-section two">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <a class="site-logo site-title" href="index.html"><img src="<?= URL ?>/assets/theme/assets/images/logo-three.png" alt="site-logo"></a>
                        <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu">


                                <li><a <?= CANONICAL == URL . "/" ? "active" : ""; ?> href="<?= URL ?>">Home</a></a></li>

                                <li><a <?= CANONICAL == URL . "/" ? "active" : ""; ?> href="<?= URL ?>/empresa.php">About</a></li>

                                <li><a <?= CANONICAL == URL . "/" ? "active" : ""; ?> href="<?= URL ?>/servicios.php">Services</a></li>


                                <li><a <?= CANONICAL == URL . "/" ? "active" : ""; ?> href="<?= URL ?>/portfolio.php">Portfolio</a></li>


                                <li><a <?= CANONICAL == URL . "/" ? "active" : ""; ?> href="<?= URL ?>/blog.php">Blog</a></li>

                                <li></li>
                            </ul>
                            <div class="header-right">
                                <div class="header-action-area">
                                    <div class="header-action">
                                        <a  href="contacto.php" class="btn--base">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- <div class="preloader">
    <div class="drawing" id="loading">
        <div class="loading-dot"></div>
    </div>
</div> -->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="cursor"></div>
<div class="cursor-follower"></div>