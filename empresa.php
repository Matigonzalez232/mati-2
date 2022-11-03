<?php
require_once "Config/Autoload.php";
Config\Autoload::run();

$template = new Clases\TemplateSite();
$f = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();


$data = [
    "filter" =>  ['contenidos.area = "empresa"'],
    "images" => true,
];
$data_contactar = [
    "images" => true,
    "filter" => ['contenidos.cod = "2e8139cfa0"']
];
$data_area_team = [
    "images" => true,
    "filter" => ['contenidos.area = "equipo"']

];
$data_testimonios = [
    "images" => true,
    "filter" => ['contenidos.area = "reseñas"']
];
$data_slider_inicio = [
    "images" => true,
    "filter" => ['contenidos.cod = "slider-inicio"']

];
$testimonios = $contenidos->list($data_testimonios, 'es', false);
$contactar = $contenidos->list($data_contactar, 'es', true);
$area_team = $contenidos->list($data_area_team, 'es', false);
$slider = $contenidos->list($data_slider_inicio, 'es', true);


#List de contenidos (al ser único el título, solo trae un resultado)
$contenidoEmpresa = $contenidos->list($data, $_SESSION["lang"], false);
// if (empty($contenidoData)) $f->headerMove(URL);
#Si se encontro el contenido se almacena y sino se redirecciona al inicio



#Información de cabecera
$template->set("title", $contenidoEmpresa['titulo_empresa']["data"]['titulo'] . " | " . TITULO);
$template->set("description", "");
$template->set("keywords", "");
$template->set("imagen", LOGO);
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
                        <h2 class="title"><?= $contenidoEmpresa['titulo_empresa']["data"]['titulo'] ?></h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= URL ?>"><?= $contenidoEmpresa['titulo_empresa']["data"]['subtitulo'] ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $contenidoEmpresa['titulo_empresa']["data"]['titulo'] ?></li>
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
    Start About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="about-section ptb-120">
    <div class="about-element-one two">
        <img src="<?= $contenidoEmpresa['who_we_are']["images"][0]['url'] ?>" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="about-content two">
                    <h3 class="title"><?= $contenidoEmpresa['who_we_are']["data"]['titulo'] ?></h3>
                    <p class="para"><?= $contenidoEmpresa['who_we_are']["data"]['subtitulo'] ?></p>
                    <p><?= $contenidoEmpresa['who_we_are']["data"]['contenido'] ?></p>
                    <div class="about-btn two">
                        <a href="<?= URL ?>/contacto.php" class="btn--base"><?= $contenidoEmpresa['who_we_are']["data"]['link'] ?></a>
                        <span><?= $contenidoEmpresa['who_we_are']["data"]['keywords'] ?> <a href="tel:<?= $contenidoEmpresa['who_we_are']["data"]['description'] ?>">+<?= $contenidoEmpresa['who_we_are']["data"]['description'] ?></a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="about-thumb two">
                    <img src="<?= URL ?>/assets/theme/assets/images/element/element-68.png" alt="element">
                    <div class="about-thumb-element-one">
                        <img src="<?= URL ?>/assets/theme/assets/images/element/element-60.png" alt="element">
                    </div>
                    <div class="about-thumb-element-two">
                        <img src="<?= URL ?>/assets/theme/assets/images/element/element-60.png" alt="element">
                    </div>
                    <div class="about-thumb-video">
                        <div class="circle">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                </defs>
                                <circle cx="150" cy="100" r="75" fill="none" />
                                <g>
                                    <use xlink:href="#circlePath" fill="none" />
                                    <text fill="#ffffff">
                                        <textPath xlink:href="#circlePath"><?= $contenidoEmpresa['video_we']['data']['subtitulo'] ?></textPath>
                                    </text>
                                </g>
                            </svg>
                        </div>
                        <div class="video-main">
                            <a class="video-icon video" data-rel="lightcase:myCollection" href="<?= $contenidoEmpresa['video_we']['data']['link'] ?>">
                                <i class="fas fa-play"></i>
                            </a>
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
    Start Agency
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="agency-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="agency-content text-center">
                    <div class="agency-logo-text">
                        <span><?= $contenidoEmpresa['titulo_agency']['data']['subtitulo'] ?></span>
                    </div>
                    <h2 class="title"><?= $contenidoEmpresa['titulo_agency']['data']['titulo'] ?></h2>
                </div>
                <div class="agency-statistics-area">
                    <div class="row justify-content-center mb-30-none">
                        <?php foreach ($contenidoEmpresa as $key => $item) {
                            if ($item['data']['destacado'] != 1) continue;
                        ?>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="<?= $item['data']['subtitulo'] ?>"><?= $item['data']['keywords'] ?></h3>
                                            <h3 class="title"><?= $item['data']['description'] ?></h3>
                                        </div>
                                        <p><?= $item['data']['titulo'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Agency
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="about-section ">
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
                                $link = URL . "/team_details/" . $item['data']['area'] . "/" . $f->normalizar_link($item['data']['titulo']) . "/" . $item['data']['cod'];
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
                                            <h3 class="title"><a href="<?= $link?>"><?= $item['data']['titulo'] ?></a></h3>
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
    Start Brand
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="brand-section pb-120">
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

<?php
$template->themeEnd();
?>