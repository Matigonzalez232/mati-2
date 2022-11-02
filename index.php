<?php
require_once "Config/Autoload.php";
Config\Autoload::run();
$contenidos = new Clases\Contenidos();
$template = new Clases\TemplateSite();
$f = new Clases\PublicFunction();
$config = new Clases\Config();
$enviar = new Clases\Email();
$emailData = $config->viewEmail();
$template->themeInit();
//<<---------------------LINEA 769 FALTA CAMBIAR UN LINK---------------->>
$data_introduccion = [
    "filter" => ['contenidos.cod = "inicio-introduccion"']
];
$data_slider_inicio = [
    "images" => true,
    "filter" => ['contenidos.cod = "slider-inicio"']

];
$data_video_inicio = [
    "filter" => ['contenidos.cod = "inicio_video"']
];
$panel_1 = [
    "images" => true,
    "filter" => ['contenidos.cod = "inicio_panel_1"']

];
$panel_2 = [
    "images" => true,
    "filter" => ['contenidos.cod = "inicio_panel_2"']

];
$data_introduccion_servicios = [
    "images" => true,
    "filter" => ['contenidos.cod = "2dc7dae926"']

];
$data_area_portfolio = [
    "images" => true,
    "filter" => ['contenidos.area = "portfolio"']

];

$data_contactar = [
    "images" => true,
    "filter" => ['contenidos.cod = "2e8139cfa0"']
];
$data_area_team = [
    "images" => true,
    "filter" => ['contenidos.area = "testimonios"']

];
$data_testimonios = [
    "images" => true,
    "filter" => ['contenidos.area = "reseñas"']
];
$data_area_contacto = [
    "images" => true,
    "filter" => ['contenidos.area = "contacto"']

];
$data_area_novedades = [
    "images" => true,
    "filter" => ['contenidos.area = "novedades_inicio"']

];
var_dump(URL);

//cambiar las consultas de inicio para que sea una sola de area ----------------
$contactar = $contenidos->list($data_contactar, 'es', true);
$area_portfolio = $contenidos->list($data_area_portfolio, 'es', false);
$introduccion_servicios = $contenidos->list($data_introduccion_servicios, 'es', true);
$panel_nosotros_somos_1 = $contenidos->list($panel_1, 'es', true);
$panel_nosotros_somos_2 = $contenidos->list($panel_2, 'es', true);
$inicio_nosotros_somos = $contenidos->list(["filter" => ['contenidos.cod = "08f0db6d57"']], 'es', true);
$inicio_introduccion = $contenidos->list($data_introduccion, 'es', true);
$inicio_video = $contenidos->list($data_video_inicio, 'es', true);
$area_team = $contenidos->list($data_area_team, 'es', false);
$testimonios = $contenidos->list($data_testimonios, 'es', false);
$info_contacto = $contenidos->list($data_area_contacto, 'es', false);
$novedades = $contenidos->list($data_area_novedades, 'es', false);
$lista_servicios = $contenidos->list(["order" => ' contenidos.orden ASC ', "images" => true, "filter" => ['contenidos.area = "servicios_list_inicio"']], 'es');
$slider = $contenidos->list($data_slider_inicio, 'es', true);

?>
<section class="banner-section two">
    <div class="banner-element-four">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-6.png" alt="element">
    </div>
    <div class="banner-element-five">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-7.png" alt="element">
    </div>
    <div class="banner-element-eightteen">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-53.png" alt="element">
    </div>
    <div class="banner-element-nineteen">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-6.png" alt="element">
    </div>
    <div class="banner-element-twenty">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-7.png" alt="element">
    </div>
    <div class="banner-element-twenty-one">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-7.png" alt="element">
    </div>
    <div class="banner-element-twenty-two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-54.png" alt="element">
    </div>
    <div class="banner-element-twenty-three">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-55.png" alt="element">
    </div>
    <div class="banner-element-twenty-four">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-56.png" alt="element">
    </div>
    <div class="banner-element-twenty-six">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-64.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center mb-30-none">
            <div class="col-xl-12 mb-30">
                <div class="banner-content two">
                    <div class="banner-content-header" data-aos="fade-up" data-aos-duration="1200">
                        <h1 class="title"><?= $inicio_introduccion['data']['titulo'] ?></h1>
                        <h1 class="title"><?= $inicio_introduccion['data']['subtitulo'] ?></h1>
                    </div>
                    <div class="banner-area">
                        <div class="banner-text">
                            <span><?= $inicio_introduccion['data']['keywords'] ?></span>
                        </div>
                        <div class="banner-left-content">
                            <div class="banner-left-video">
                                <div class="circle">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                        <defs>
                                            <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                        </defs>
                                        <circle cx="150" cy="100" r="75" fill="none" />
                                        <g>
                                            <use xlink:href="#circlePath" fill="none" />
                                            <text fill="#3249b3">
                                                <textPath xlink:href="#circlePath"><?= $inicio_video['data']['titulo'] ?></textPath>
                                            </text>
                                        </g>
                                    </svg>
                                </div>
                                <div class="video-main">
                                    <div class="promo-video">
                                        <div class="waves-block">
                                            <div class="waves wave-1"></div>
                                            <div class="waves wave-2"></div>
                                            <div class="waves wave-3"></div>
                                        </div>
                                    </div>
                                    <a class="video-icon video" data-rel="lightcase:myCollection" href="<?= $inicio_video['data']['link'] ?>">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="banner-left-arrow">
                                <img src="<?= URL ?>/assets/theme/assets/images/element/element-1.png" alt="element">
                            </div>
                            <div class="banner-left-intro">
                                <span><?= $inicio_video['data']['subtitulo'] ?></span>
                            </div>
                            <div class="banner-left-footer">
                                <h3 class="title"><?= $inicio_introduccion['data']['contenido'] ?></h3>
                                <p><?= $inicio_introduccion['data']['description'] ?></p>
                                <div class="banner-left-btn">
                                    <a href="<?= URL ?>/contacto.php" class="btn--base active">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-thumb">
                            <img src="<?= URL ?>/assets/theme/assets/images/element/element-52.png" alt="element">
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
    Start Statistics
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="statistics-section pb-120">
    <div class="statistics-element-one">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-39.png" alt="element">
    </div>
    <div class="statistics-element-two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-60.png" alt="element">
    </div>
    <div class="statistics-element-three">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-26.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="statistics-left-content">
                    <h2 class="title"><?= $inicio_nosotros_somos['data']['titulo'] ?></h2>
                    <p><?= $inicio_nosotros_somos['data']['contenido'] ?></p>
                    <div class="statistics-left-btn">
                        <!-- agregar el link -->
                        <a href="<?= URL ?>/empresa.php" class="custom-btn">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="statistics-item-area">
                    <div class="row mb-30-none">
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                            <div class="statistics-item">
                                <div class="statistics-icon">
                                    <img src="<?= URL ?>/assets/theme/assets/images/icon/icon-8.png" alt="icon">
                                </div>
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="10"><?= $panel_nosotros_somos_1['data']['description'] ?></h3>
                                        <h3 class="title"><?= $panel_nosotros_somos_1['data']['subtitulo'] ?></h3>
                                    </div>
                                    <p><?= $panel_nosotros_somos_1['data']['titulo'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                            <div class="statistics-item">
                                <div class="statistics-icon">
                                    <img src="<?= URL ?>/assets/theme/assets/images/icon/icon-9.png" alt="icon">
                                </div>
                                <div class="statistics-content">
                                    <div class="odo-area">
                                        <h3 class="odo-title odometer" data-odometer-final="120"><?= $panel_nosotros_somos_2['data']['description'] ?></h3>
                                        <h3 class="title"><?= $panel_nosotros_somos_2['data']['subtitulo'] ?></h3>
                                    </div>
                                    <p><?= $panel_nosotros_somos_2['data']['titulo'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Statistics
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Overview
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="overview-section pb-120">
    <div class="overview-element">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-24.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="overview-thumb">
                    <img src="<?= $introduccion_servicios['images'][0]['url'] ?>">
                    <div class="overview-thumb-element">
                        <img src="<?= $introduccion_servicios['images'][1]['url'] ?>" alt="element">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="overview-content">
                    <h2 class="title"><?= $introduccion_servicios['data']['titulo'] ?></h2>
                    <p><?= $introduccion_servicios['images']['contenido'] ?></p>
                    <div class="overview-btn">
                        <a href="<?= URL ?>/servicios.php" class="btn--base active"><?= $introduccion_servicios['images']['link'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Overview
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-section two pb-120">
    <div class="service-element-one two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-23.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-60-none">
            <?php foreach ($lista_servicios as $key => $item) { ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                    <div class="service-item two">
                        <div class="service-icon">
                            <img src="<?= $item['images'][0]['url'] ?>" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><?= $item['data']['titulo'] ?></h3>
                            <p><?= $item['data']['contenido'] ?></p>
                            <div class="service-btn">
                                <a href="<?= URL ?>/servicios.php" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Project
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="project-section two">
    <div class="project-element-one two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-60.png" alt="element">
    </div>
    <div class="project-element-two two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-65.png" alt="element">
    </div>
    <div class="container-fluid p-0">
        <div class="project-area">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-2 offset-xl-2 col-md-12 col-lg-4 mb-30">
                    <div class="project-left-content">
                        <div class="logo-icon">
                            <img src="<?= $area_portfolio['07e5a9d2a2']['images'][0]['url'] ?>" alt="favicon">
                        </div>
                        <h2 class="title"><?= $area_portfolio['07e5a9d2a2']['data']['titulo'] ?></h2>
                        <p><?= $area_portfolio['07e5a9d2a2']['data']['contenido'] ?></p>
                        <div class="project-left-btn">
                            <a href="<?= URL ?>/portfolios" class="btn--base active"><?= $area_portfolio['07e5a9d2a2']['data']['subtitulo'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-8 col-lg-8 mb-30">
                    <div class="project-slider-area">
                        <div class="slider-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="slider-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="project-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($area_portfolio as $key => $item) {
                                    if ($item['data']['destacado'] == 1) continue;
                                ?>
                                    <div class="swiper-slide">
                                        <div class="project-thumb two">
                                            <img src="<?= $item['images'][0]['url'] ?>" alt="project">
                                            <div class="project-overlay">
                                                <div class="overlay-content">
                                                    <h4 class="title"><a href="<?= URL ?>/portfolios"><?= $item['data']['subtitulo'] ?> <br> <?= $item['data']['description'] ?></a></h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Project
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="about-section pt-120">
    <div class="about-element-one two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-39.png" alt="element">
    </div>
    <div class="container">
        <div class="about-area">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="box-wrapper two">
                        <div class="box3"></div>
                        <div class="box1">
                            <div class="box-element-one">
                                <img src="<?= URL ?>/assets/theme/assets/images/element/element-59.png" alt="element">
                            </div>
                            <div class="box-element-two">
                                <img src="<?= URL ?>/assets/theme/assets/images/element/element-7.png" alt="element">
                            </div>
                        </div>
                        <div class="box2">
                            <div class="box-element-five">
                                <img src="<?= URL ?>/assets/theme/assets/images/element/element-16.png" alt="element">
                            </div>
                            <div class="box-element-six">
                                <img src="<?= URL ?>/assets/theme/assets/images/element/element-7.png" alt="element">
                            </div>
                        </div>
                    </div>
                    <div class="about-thumb">
                        <img src="<?= $contactar['images'][0]['url'] ?>" alt="element">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content">
                        <h2 class="title"><?= $contactar['data']['titulo'] ?><span class="text--base"><?= $contactar['data']['description'] ?></span></h2>
                        <p class="para"><?= $contactar['data']['contenido'] ?></p>
                        <div class="about-btn">
                            <a href="<?= URL ?>/contacto" class="btn--base"><?= $contactar['data']['keywords'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Brand
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="brand-section pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="brand-slider-area">
                    <div class="brand-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($slider['images'] as $key => $item) { ?>

                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <img src="<?= $item['url'] ?>" alt="brand">
                                    </div>

                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Brand
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Team
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="team-section two ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-header-wrapper">
                    <div class="section-header">
                        <h2 class="section-title"><?= $area_team['titulo']['data']['titulo'] ?></h2>
                        <p><?= $area_team['titulo']['data']['contenido'] ?></p>
                    </div>
                    <div class="slider-nav-area">
                        <div class="slider-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="slider-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-12">
                <div class="team-slider-area two">
                    <div class="team-slider two">
                        <div class="swiper-wrapper">
                            <?php foreach ($area_team as $key => $item) {
                                if ($item['data']['destacado'] == 1) continue;
                            ?>
                                <div class="swiper-slide">
                                    <div class="team-item">
                                        <div class="team-thumb">
                                            <img src="<?= $item['images'][0]['url'] ?>" alt="team">
                                            <div class="team-social-area">
                                                <ul class="team-social">
                                                    <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title"><a href="team-details.html"><?= $item['data']['titulo'] ?></a></h3>
                                            <span class="sub-title"><?= $item['data']['subtitulo'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }  ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Team
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Client
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="client-section two pb-120">
    <div class="client-element-one two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-66.png" alt="element">
    </div>
    <div class="client-element-two two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-45.png" alt="element">
    </div>
    <div class="client-element-three">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-46.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="section-header">
                    <h2 class="section-title"><?= $testimonios['abb70728d8']['data']['titulo'] ?></h2>
                    <p><?= $testimonios['abb70728d8']['data']['subtitulo'] ?></p>
                </div>
            </div>
        </div>
        <div class="client-area">
            <div class="row justify-content-center align-items-end mb-30-none">
                <div class="col-xl-8 col-lg-8 col-md-6 mb-30">
                    <div class="client-slider-area two">
                        <div class="client-slider-two">
                            <div class="swiper-wrapper">

                                <?php foreach ($testimonios as $key => $item) {
                                    if ($item['data']['destacado']) continue;
                                ?>
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-quote">
                                                    <img src="<?= URL ?>/assets/theme/assets/images/client/quote-2.png" alt="client">
                                                </div>
                                                <div class="client-thumb">
                                                    <img src="<?= $item['images'][0]['url'] ?>" alt="client">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p><?= $item['data']['contenido'] ?></p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-left">
                                                    <h4 class="title"><?= $item['data']['titulo'] ?></h4>
                                                    <span class="sub-title"><?= $item['data']['subtitulo'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="client-right-thumb">
                        <img src="<?= $testimonios['abb70728d8']['images'][0]['url'] ?>" alt="client">
                        <div class="client-thumb-element">
                            <img src="<?= $testimonios['abb70728d8']['images'][1]['url'] ?>" alt="element">
                        </div>
                        <div class="client-thumb-overlay">
                            <div class="client-thumb-video">
                                <div class="video-main">
                                    <div class="promo-video">
                                        <div class="waves-block">
                                            <div class="waves wave-1"></div>
                                            <div class="waves wave-2"></div>
                                            <div class="waves wave-3"></div>
                                        </div>
                                    </div>
                                    <a class="video-icon video" data-rel="lightcase:myCollection" href="<?= $testimonios['abb70728d8']['data']['link'] ?>">
                                        <i class="las la-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-pagination"></div>
                <div class="slider-prev">
                    <i class="las la-long-arrow-alt-left"></i>
                </div>
                <div class="slider-next">
                    <i class="las la-long-arrow-alt-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Client
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="contact-section two pb-120">
    <div class="container">
        <div class="contact-element-one">
            <img src="<?= URL ?>/assets/theme/assets/images/element/element-6.png" alt="element">
        </div>
        <div class="contact-element-two">
            <img src="<?= URL ?>/assets/theme/assets/images/element/element-39.png" alt="element">
        </div>
        <div class="contact-element-three">
            <img src="<?= URL ?>/assets/theme/assets/images/element/element-26.png" alt="element">
        </div>
        <div class="contact-element-four">
            <img src="<?= URL ?>/assets/theme/assets/images/element/element-7.png" alt="element">
        </div>
        <div class="contact-area">
            <div class="contact-element-five">
                <img src="<?= URL ?>/assets/theme/assets/images/element/element-60.png" alt="element">
            </div>
            <div class="contact-element-six">
                <img src="<?= URL ?>/assets/theme/assets/images/element/element-60.png" alt="element">
            </div>
            <div class="row mb-30-none">
                <div class="col-xl-5 col-lg-5 mb-30">
                    <div class="contact-thumb">
                        <img src="<?= URL ?>/assets/theme/assets/images/contact.png" alt="contact">
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 mb-30">
                    <?php
                    if (isset($_POST['submit'])) {

                        $nombre = $_POST["nombre"];
                        $telefono = $_POST["telefono"];
                        $email = $_POST["email"];
                        $asunto = $_POST["asunto"];
                        $mensaje = $_POST["mensaje"];
                        // isset($_POST) ? var_dump($_POST) : "";
                        if (!empty($nombre) && !empty($email) && !empty($mensaje) && !empty($telefono)  && !empty($asunto)) {

                            //MENSAJE A USUARIO
                            $mensajeFinal = "<b>Gracias por realizar tu consulta, te contactaremos a la brevedad.</b><br/>";
                            $mensajeFinal .= "<b>Consulta</b>: " . $mensaje . "<br/>";

                            $enviar->set("asunto", "Realizaste tu consulta.");
                            $enviar->set("receptor", $email);
                            $enviar->set("emisor", $emailData['data']['remitente']);
                            $enviar->set("mensaje", $mensajeFinal);
                            // $enviar->emailEnviar();

                            //MENSAJE AL ADMIN
                            $mensajeFinalAdmin = "<b>Nueva consulta desde la web.</b><br/>";
                            $mensajeFinalAdmin .= "<b>Nombre</b>: " . $nombre . " <br/>";
                            $mensajeFinalAdmin .= "<b>telefono</b>: " . $telefono . "<br/>";
                            $mensajeFinalAdmin .= "<b>Email</b>: " . $email . "<br/>";
                            $mensajeFinalAdmin .= "<b>Asunto</b>: " . $asunto . "<br/>";
                            $mensajeFinalAdmin .= "<b>Consulta</b>: " . $mensaje . "<br/>";

                            $enviar->set("asunto", "Nueva consulta desde la web :" . $asunto);
                            $enviar->set("receptor", $emailData['data']['remitente']);
                            $enviar->set("mensaje", $mensajeFinalAdmin);
                            $enviar->emailEnviar();
                            //mensaje de success
                            echo "<div class='alert alert-success'><p>Se ha enviado el email</p></div>";
                        } else {
                            //echo error
                            echo "<div class='alert alert-danger'>fallo</div>";
                        }
                    }
                    ?>
                    <div class="contact-form-area">
                        <div class="contact-form-header">
                            <div class="left">
                                <h2 class="title"><?= $info_contacto['ec594b6a48']['data']['titulo'] ?> <span class="text--base"><?= $info_contacto['ec594b6a48']['data']['subtitulo'] ?></span></h2>
                                <p><?= $info_contacto['ec594b6a48']['data']['contenido'] ?></p>
                            </div>
                            <div class="right">
                                <div class="circle">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                        <defs>
                                            <path id="circlePathtwo" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                        </defs>
                                        <circle cx="150" cy="100" r="75" fill="none" />
                                        <g>
                                            <use xlink:href="#circlePathtwo" fill="none" />
                                            <text fill="#3249b3">
                                                <textPath xlink:href="#circlePathtwo"><?= $info_contacto['ec594b6a48']['data']['description'] ?></textPath>
                                            </text>
                                        </g>
                                    </svg>
                                </div>
                                <div class="contact-logo">
                                    <img src="<?= $info_contacto['ec594b6a48']['images'][1]['url'] ?>" alt="favicon">
                                </div>
                            </div>
                        </div>
                        <form class="contact-form" method="post" role="form">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <input type="text" class="form--control" name="nombre" placeholder="Your Name">
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <input type="email" class="form--control" name="email" placeholder="Your Email">
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <input type="text" class="form--control" name="telefono" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <div class="contact-select">
                                        <select class="form--control" name="asunto">
                                            <option value="1">Service Required</option>
                                            <option value="2">Web Design</option>
                                            <option value="3">Digital Marketing</option>
                                            <option value="4">Search SEO</option>
                                            <option value="5">Web Development</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 form-group">
                                    <textarea name="mensaje" class="form--control" placeholder="Write Message..."></textarea>
                                </div>
                                <div class="col-xl-12 form-group custom-form-group mt-20">
                                    <div class="form-group custom-check-group">
                                        <input type="checkbox" id="level-1">
                                        <label for="level-1">I'm Agree With <a href="#0" class="text--base">Terms & Conditions</a></label>
                                    </div>
                                    <button type="submit" name="submit" class="btn--base">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="blog-section pb-120">
    <div class="blog-element">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-47.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="section-header">
                    <h2 class="section-title"><?= $novedades['titulo_novedades']['data']['titulo'] ?></h2>
                    <p><?= $novedades['titulo_novedades']['data']['subtitulo'] ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <?php foreach ($novedades as $key => $item) {
                if ($item['data']['destacado'] == 1) continue;
                $link = URL . "/blog_details/" . $item['data']['area'] . "/" . $f->normalizar_link($item['data']['titulo']) . "/" . $item['data']['cod'];
            ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="<?= $item['images'][0]['url'] ?>" alt="blog">
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <span><?= $item['data']['subtitulo'] ?></span>
                            </div>
                            <h3 class="title"><a href="<?= $link ?>"><?= $item['data']['titulo'] ?></a></h3>
                            <p><?= $item['data']['contenido'] ?></p>
                            <div class="blog-post-meta two">
                                <span class="user"><?= $item['data']['description'] ?></span>
                                <span class="date"><?= $item['data']['keywords'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php
$template->themeEnd();
?>