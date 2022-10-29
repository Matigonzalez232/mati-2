<?php
require_once "Config/Autoload.php";
Config\Autoload::run();

$template = new Clases\TemplateSite();
$f = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$config = new Clases\Config();

$captchaData = $config->viewCaptcha();
#Se carga la configuración de email
$data = [
    "images" => true,
    "filter" => ['contenidos.area = "Blog"'],
];


$contenidoBlog = $contenidos->list($data, $_SESSION['lang']); //contenido principal
#Información de cabecera
$template->set("title", $contenidoBlog['blog_titulo']["data"]['titulo'] . " | " . TITULO);

$template->set("description", "Envianos tus dudas y nosotros te asesoramos");
$template->set("keywords", "");
$template->themeInit();
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section two inner">
    <div class="banner-element-four two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-5.png" alt="element">
    </div>
    <div class="banner-element-five two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-7.png" alt="element">
    </div>
    <div class="banner-element-nineteen two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-6.png" alt="element">
    </div>
    <div class="banner-element-twenty-two two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-69.png" alt="element">
    </div>
    <div class="banner-element-twenty-three two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-70.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center mb-30-none">
            <div class="col-xl-12 mb-30">
                <div class="banner-content two">
                    <div class="banner-content-header">
                        <h2 class="title"><?= $contenidoBlog['blog_titulo']["data"]['titulo'] ?></h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><?= $contenidoBlog['blog_titulo']["data"]['subtitulo'] ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $contenidoBlog['blog_titulo']["data"]['titulo'] ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="blog-section ptb-120">
    <div class="container">
        <div class="row justify-content-center mb-60-none">
            <div class="col-xl-8 col-lg-8 mb-60">
                <div class="row justify-content-center mb-60-none">
                    <?php foreach ($contenidoBlog as $key => $item) {
                        if ($item['data']['categoria'] != "fedf0a0aea") continue;
                        if (isset($item['data']['link'])) {
                    ?>
                            <div class="col-xl-12 mb-60">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="<?= $item['images'][0]['url'] ?>" alt="blog">
                                        <div class="blog-classic-video">
                                            <div class="video-main">
                                                <a class="video-icon video" data-rel="lightcase:myCollection" href="<?= $item['data']['link'] ?>">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <span class="user"><?= $item['data']['description'] ?></span>
                                            <span class="category two"><?= $item['data']['keywords'] ?></span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html"><?= $item['data']['titulo'] ?></a></h3>
                                        <p><?= $item['data']['contenido'] ?></p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html" class="custom-btn"><?= $item['data']['subtitulo'] ?> <i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>


                            <div class="col-xl-12 mb-60">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="<?= $item['images'][0]['url'] ?>" alt="blog">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <span class="user"><?= $item['data']['description'] ?></span>
                                            <span class="category two"><?= $item['data']['keywords'] ?></span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html"><?= $item['data']['titulo'] ?></a></h3>
                                        <p><?= $item['data']['contenido'] ?></p>
                                        <div class="blog-btn">
                                            <a href="<?= URL ?>/blog.php" class="custom-btn"><?= $item['data']['subtitulo'] ?> <i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 mb-60">
                <div class="sidebar">
                    <div class="widget-box mb-30">
                        <h4 class="widget-title"><?= $contenidoBlog['search_titulo']['data']['titulo'] ?></h4>
                        <div class="search-widget-box">
                            <form class="search-form">
                                <input type="text" name="search" class="form--control" placeholder="Search">
                                <button type="submit"><i class="icon-Search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="widget-box mb-30">
                        <h4 class="widget-title"><?= $contenidoBlog['titulo_recientes']['data']['titulo'] ?></h4>
                        <div class="popular-widget-box">
                            <?php foreach ($contenidoBlog as $key => $item) {
                                if ($item['data']['categoria'] != "publicaciones_recientes") continue;
                            ?>
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
                                        <img src="<?= $item['images'][0]['url'] ?>" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date"><?= $item['data']['subtitulo'] ?></span>
                                        <h5 class="title"><a href="<?= URL ?>/blog.php"><?= $item['data']['titulo'] ?></a></h5>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="widget-box mb-30">
                        <h4 class="widget-title"><?= $contenidoBlog['Categories_titulo']['data']['titulo'] ?></h4>
                        <div class="category-widget-box">
                            <ul class="category-list">
                                <?php foreach ($contenidoBlog as $key => $item) {
                                    if ($item['data']['categoria'] != "categorias") continue;
                                ?>
                                    <li><a href="#0"><i class="fas fa-chevron-right"></i> <?= $item['data']['titulo'] ?> <span><?= $item['data']['subtitulo'] ?></span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-box">
                        <h4 class="widget-title"><?= $contenidoBlog['tag_titulo']['data']['titulo'] ?></h4>
                        <div class="tag-widget-box">
                            <ul class="tag-list">
                                <?php foreach ($contenidoBlog as $key => $item) {
                                    if ($item['data']['categoria'] != "tags") continue;

                                ?>
                                    <li><a href="#0"><?= $item['data']['titulo']?></a></li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul class="pagination">
                <li class="page-item prev">
                    <a class="page-link" href="#" rel="prev" aria-label="Prev &raquo;">PREV</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">01</a></li>
                <li class="page-item active" aria-current="page"><span class="page-link">02</span></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link" href="#">04</a></li>
                <li class="page-item"><a class="page-link" href="#">05</a></li>
                <li class="page-item next">
                    <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">NEXT</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->





<?php $template->themeEnd() ?>