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
    "filter" => ['contenidos.area = "servicios"'],
];
$data_contactar = [
    "images" => true,
    "filter" => ['contenidos.cod = "2e8139cfa0"']
];
$data_empresa = [
    "filter" =>  ['contenidos.area = "empresa"'],
    "images" => true,
];
$data_area_desarrollo = [
    "filter" =>  ['contenidos.area = "desarrollo"'],
    "images" => true,
];
$contenidoEmpresa = $contenidos->list($data_empresa, 'es', false);
$contactar = $contenidos->list($data_contactar, 'es', true);
$contenidoServicio = $contenidos->list($data, $_SESSION['lang']); //contenido principal
$desarrollo = $contenidos->list($data_area_desarrollo, 'es');
#Información de cabecera
$template->set("title", $contenidoServicio['742038848d']["data"]['titulo'] . " | " . TITULO);

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
                        <h2 class="title"><?= $contenidoServicio['742038848d']['data']['titulo'] ?></h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= URL ?>"><?= $contenidoServicio['742038848d']['data']['subtitulo'] ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $contenidoServicio['742038848d']['data']['keywords'] ?></li>
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
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-section two ptb-120">
    <div class="service-element-one">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-34.png" alt="element">
    </div>
    <div class="service-element-two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-35.png" alt="element">
    </div>
    <div class="service-element-three">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-36.png" alt="element">
    </div>
    <div class="service-element-four">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-36.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <?php foreach ($contenidoServicio as $key => $item) {
                if ($item['data']['destacado'] == 1) continue;
                $link = URL . "/c/" . $item['data']['area'] . "/" . $f->normalizar_link($item['data']['titulo']) . "/" . $item['data']['cod'];
            ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="<?= $item['images'][0]['url'] ?>" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="<?= $link ?>"><?= $item['data']['titulo'] ?></a></h3>
                            <p><?= $item['data']['description'] ?></p>
                            <div class="service-btn">
                                <a href="<?= $link ?>" class="custom-btn"><?= $contenidoServicio['742038848d']['data']['description'] ?> <i class="icon-Group-2361 ml-2"></i></a>
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
    Start Process
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="process-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="section-header">
                    <h2 class="section-title mb-0"><?= $desarrollo['ad70434a66']['data']['titulo'] ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            <?php foreach ($desarrollo as $key => $item) {
                if ($item['data']['destacado'] == 1) continue;
            ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="process-item text-center">
                        <div class="process-icon-area">
                            <div class="process-element">
                                <div class="process-number">
                                    <span><?= $item['data']['subtitulo'] ?></span>
                                </div>
                                <div class="process-dot">
                                    <span></span>
                                </div>
                            </div>
                            <div class="process-icon">
                                <img src="<?= $item['images'][0]['url'] ?>" alt="icon">
                            </div>
                        </div>
                        <div class="process-content">
                            <h3 class="title"><?= $item['data']['titulo'] ?></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Process
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="about-section ptb-120">
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
<?php $template->themeEnd() ?>