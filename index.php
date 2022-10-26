<?php
require_once "Config/Autoload.php";
Config\Autoload::run();
$contenidos = new Clases\Contenidos();
$template = new Clases\TemplateSite();
$f = new Clases\PublicFunction();
$template->themeInit();

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
$data_introduccion_servicios= [
    "images" => true,
    "filter" => ['contenidos.cod = "2dc7dae926"']

];
$introduccion_servicios=$contenidos->list($data_introduccion_servicios, 'es', true);
$panel_nosotros_somos_1=$contenidos->list($panel_1, 'es', true);
$panel_nosotros_somos_2=$contenidos->list($panel_2, 'es', true);
$inicio_nosotros_somos = $contenidos->list(["filter" => ['contenidos.cod = "08f0db6d57"']], 'es', true);
$inicio_introduccion = $contenidos->list($data_introduccion, 'es', true);
$inicio_video = $contenidos->list($data_video_inicio, 'es', true);

//mostrar la lista
$lista_servicios=$contenidos->list(["images" => true, "filter" => ['contenidos.area = "servicio_list_inicio"']], 'es');

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
                                    <a href="contact.html" class="btn--base active">Contact Us</a>
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
                        <a href="about.html" class="custom-btn">Know More</a>
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
                    <h2 class="title">We specialize in the web development</h2>
                    <p>Our motto includes the core values of the company and describes our philosophy. We moved heaven and earth to make the company’s motto applicable to every member of the team.</p>
                    <div class="overview-btn">
                        <a href="service.html" class="btn--base active">View All Services</a>
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
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                <div class="service-item two">
                    <div class="service-icon">
                        <img src="<?= URL ?>/assets/theme/assets/images/icon/icon-3.png" alt="icon">
                    </div>
                    <div class="service-content">
                        <h3 class="title">IT Management</h3>
                        <p>We rank among the best in the US, Argentina, and Ukraine. Our apps get</p>
                        <div class="service-btn">
                            <a href="service.html" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                <div class="service-item two">
                    <div class="service-icon">
                        <img src="<?= URL ?>/assets/theme/assets/images/icon/icon-4.png" alt="icon">
                    </div>
                    <div class="service-content">
                        <h3 class="title">Data Security</h3>
                        <p>We rank among the best in the US, Argentina, and Ukraine. Our apps get</p>
                        <div class="service-btn">
                            <a href="service.html" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                <div class="service-item two">
                    <div class="service-icon">
                        <img src="<?= URL ?>/assets/theme/assets/images/icon/icon-5.png" alt="icon">
                    </div>
                    <div class="service-content">
                        <h3 class="title">Business Consulting</h3>
                        <p>We rank among the best in the US, Argentina, and Ukraine. Our apps get</p>
                        <div class="service-btn">
                            <a href="service.html" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                <div class="service-item two">
                    <div class="service-icon">
                        <img src="<?= URL ?>/assets/theme/assets/images/icon/icon-6.png" alt="icon">
                    </div>
                    <div class="service-content">
                        <h3 class="title">QA & Testing</h3>
                        <p>We rank among the best in the US, Argentina, and Ukraine. Our apps get</p>
                        <div class="service-btn">
                            <a href="service.html" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
                            <img src="<?= URL ?>/assets/theme/assets/images/fav.png" alt="favicon">
                        </div>
                        <h2 class="title">Softim Recent Projects</h2>
                        <p>Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas distributed</p>
                        <div class="project-left-btn">
                            <a href="project.html" class="btn--base active">View All Projects</a>
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
                                <div class="swiper-slide">
                                    <div class="project-thumb two">
                                        <img src="<?= URL ?>/assets/theme/assets/images/project/project-3.png" alt="project">
                                        <div class="project-overlay">
                                            <div class="overlay-content">
                                                <h4 class="title"><a href="project-details.html">Brand redesign meanwhile <br> focusing product</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-thumb two">
                                        <img src="<?= URL ?>/assets/theme/assets/images/project/project-4.png" alt="project">
                                        <div class="project-overlay">
                                            <div class="overlay-content">
                                                <h4 class="title"><a href="project-details.html">Brand redesign meanwhile <br> focusing product</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-thumb two">
                                        <img src="<?= URL ?>/assets/theme/assets/images/project/project-5.png" alt="project">
                                        <div class="project-overlay">
                                            <div class="overlay-content">
                                                <h4 class="title"><a href="project-details.html">Brand redesign meanwhile <br> focusing product</a></h4>
                                            </div>
                                        </div>
                                    </div>
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
                        <img src="<?= URL ?>/assets/theme/assets/images/element/element-58.png" alt="element">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content">
                        <h2 class="title">Have a project in mind? <span class="text--base">Let's connect</span></h2>
                        <p class="para">We rank among the best in the US, Argentina, and Ukraine. Our apps get featured as best in class, & our clients love our work.</p>
                        <p>Welcome To Softim, a software development company, helps to digitize businesses by focusing on client’s business challenges, needs, pain points and providing business-goals-oriented software solutions.</p>
                        <div class="about-btn">
                            <a href="contact.html" class="btn--base">Send Message</a>
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
                        <h2 class="section-title">Softim Expert Team</h2>
                        <p>We rank among the best in the US, Argentina, and Ukraine. Our apps get featured as best in class, and our clients love our work.</p>
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
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-thumb">
                                        <img src="<?= URL ?>/assets/theme/assets/images/team/team-5.png" alt="team">
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
                                        <h3 class="title"><a href="team-details.html">Nilkusa Agawal</a></h3>
                                        <span class="sub-title">Sr. Marketer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-thumb">
                                        <img src="<?= URL ?>/assets/theme/assets/images/team/team-4.png" alt="team">
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
                                        <h3 class="title"><a href="team-details.html">Abhisek Roy</a></h3>
                                        <span class="sub-title">Havey Truck Instructor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-thumb">
                                        <img src="<?= URL ?>/assets/theme/assets/images/team/team-6.png" alt="team">
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
                                        <h3 class="title"><a href="team-details.html">Rashmika Mandana</a></h3>
                                        <span class="sub-title">Lady Instructor</span>
                                    </div>
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
                    <h2 class="section-title">Hear from happy customers</h2>
                    <p>Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas distributed for stand-alone web-readiness.</p>
                </div>
            </div>
        </div>
        <div class="client-area">
            <div class="row justify-content-center align-items-end mb-30-none">
                <div class="col-xl-8 col-lg-8 col-md-6 mb-30">
                    <div class="client-slider-area two">
                        <div class="client-slider-two">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="<?= URL ?>/assets/theme/assets/images/client/quote-2.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="<?= URL ?>/assets/theme/assets/images/client/client-4.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to make money on you. Unlike.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title">Randall Schwartz</h4>
                                                <span class="sub-title">Sr. Consultant</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="<?= URL ?>/assets/theme/assets/images/client/quote-2.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="<?= URL ?>/assets/theme/assets/images/client/client-5.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to make money on you. Unlike.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title">Andru Smith</h4>
                                                <span class="sub-title">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="<?= URL ?>/assets/theme/assets/images/client/quote-2.png" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="<?= URL ?>/assets/theme/assets/images/client/client-4.png" alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>We teach martial arts because we love it — not because we want to make money on you. Unlike.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title">Randall Schwartz</h4>
                                                <span class="sub-title">Sr. Consultant</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="client-right-thumb">
                        <img src="<?= URL ?>/assets/theme/assets/images/client/client-big.png" alt="client">
                        <div class="client-thumb-element">
                            <img src="<?= URL ?>/assets/theme/assets/images/element/element-67.png" alt="element">
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
                                    <a class="video-icon video" data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/LRhrNC-OC0Y">
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
                    <div class="contact-form-area">
                        <div class="contact-form-header">
                            <div class="left">
                                <h2 class="title">Get in Touch <span class="text--base">Let's Talk</span></h2>
                                <p>Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas.</p>
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
                                                <textPath xlink:href="#circlePathtwo">Softim it solution Softim it solution Softim it solution Softim it solution</textPath>
                                            </text>
                                        </g>
                                    </svg>
                                </div>
                                <div class="contact-logo">
                                    <img src="<?= URL ?>/assets/theme/assets/images/fav.png" alt="favicon">
                                </div>
                            </div>
                        </div>
                        <form class="contact-form">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <input type="text" class="form--control" placeholder="Your Name">
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <input type="email" class="form--control" placeholder="Your Email">
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <input type="text" class="form--control" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <div class="contact-select">
                                        <select class="form--control">
                                            <option value="1">Service Required</option>
                                            <option value="2">Web Design</option>
                                            <option value="3">Digital Marketing</option>
                                            <option value="4">Search SEO</option>
                                            <option value="5">Web Development</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 form-group">
                                    <textarea class="form--control" placeholder="Write Message..."></textarea>
                                </div>
                                <div class="col-xl-12 form-group custom-form-group mt-20">
                                    <div class="form-group custom-check-group">
                                        <input type="checkbox" id="level-1">
                                        <label for="level-1">I'm Agree With <a href="#0" class="text--base">Terms & Conditions</a></label>
                                    </div>
                                    <button type="submit" class="btn--base">Send Message</button>
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
                    <h2 class="section-title">Softim Latest Posts</h2>
                    <p>Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas distributed for stand-alone web-readiness.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="<?= URL ?>/assets/theme/assets/images/blog/blog-1.png" alt="blog">
                    </div>
                    <div class="blog-content">
                        <div class="blog-category">
                            <span>Business</span>
                        </div>
                        <h3 class="title"><a href="blog-details.html">It was popularised in the 1960s
                                with the release</a></h3>
                        <p>We teach martial arts because we love it — not because we want to make</p>
                        <div class="blog-post-meta two">
                            <span class="user">By : Smith Roy</span>
                            <span class="date">24th March, 2022</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="<?= URL ?>/assets/theme/assets/images/blog/blog-2.png" alt="blog">
                    </div>
                    <div class="blog-content">
                        <div class="blog-category">
                            <span>Software</span>
                        </div>
                        <h3 class="title"><a href="blog-details.html">Making it look like readable
                                English Language.</a></h3>
                        <p>We teach martial arts because we love it — not because we want to make</p>
                        <div class="blog-post-meta two">
                            <span class="user">By : Smith Roy</span>
                            <span class="date">24th March, 2022</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="<?= URL ?>/assets/theme/assets/images/blog/blog-3.png" alt="blog">
                    </div>
                    <div class="blog-content">
                        <div class="blog-category">
                            <span>Design</span>
                        </div>
                        <h3 class="title"><a href="blog-details.html">It is a long established fact that a
                                reader will be</a></h3>
                        <p>We teach martial arts because we love it — not because we want to make</p>
                        <div class="blog-post-meta two">
                            <span class="user">By : Smith Roy</span>
                            <span class="date">24th March, 2022</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="footer-section two">
    <div class="footer-element-three">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-40.png" alt="element">
    </div>
    <div class="footer-element-seven two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-39.png" alt="element">
    </div>
    <div class="footer-element-eight">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-7.png" alt="element">
    </div>
    <div class="footer-area ptb-120">
        <div class="footer-area-element">
            <img src="<?= URL ?>/assets/theme/assets/images/element/element-57.png" alt="element">
        </div>
        <div class="container">
            <div class="footer-top-area">
                <div class="row mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <ul class="footer-contact-list">
                                <li>
                                    <span class="sub-title">Call us</span>
                                    <h4 class="link-title"><a href="tel:0369569032">+11 0369 569 032</a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <ul class="footer-contact-list">
                                <li>
                                    <span class="sub-title">Write to Us</span>
                                    <h4 class="link-title"><a href="mailto:">info@example.com</a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <ul class="footer-contact-list">
                                <li>
                                    <span class="sub-title">Office hours</span>
                                    <h4 class="link-title">Mon-Sat 9:00 - 7:00</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="row mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <h5 class="title">About us</h5>
                            <p>Treker was founded in 1991 by a group of safety-focused professionals who created The Wingman Standard for rigorously vetting air charter operators.</p>
                            <ul class="footer-social">
                                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                        <div class="footer-widget">
                            <h4 class="title">Explore Softim</h4>
                            <ul class="footer-list">
                                <li><a href="#0">Account</a></li>
                                <li><a href="#0">Privacy Policy</a></li>
                                <li><a href="#0">Affilitate</a></li>
                                <li><a href="#0">Program</a></li>
                                <li><a href="#0">Our Partner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                        <div class="footer-widget">
                            <h5 class="title">Quick Links</h5>
                            <ul class="footer-list">
                                <li><a href="#0">Account</a></li>
                                <li><a href="#0">Privacy Policy</a></li>
                                <li><a href="#0">Affilitate</a></li>
                                <li><a href="#0">Program</a></li>
                                <li><a href="#0">Our Partner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <h5 class="title">Sign up Newsletter</h5>
                            <form class="footer-subscribe-form">
                                <input type="email" class="form--control" placeholder="Enter Mail">
                                <button type="submit"><i class="las la-angle-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrapper two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area">
                        <div class="footer-logo">
                            <a class="site-logo site-title" href="index.html"><img src="<?= URL ?>/assets/theme/assets/images/logo-two.png" alt="site-logo"></a>
                        </div>
                        <p>Copyright © 2022 <a href="index.html">Softim</a>. All Rights Reserved. Designed by ThemeIM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
$template->themeEnd();
?>