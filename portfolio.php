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
    "filter" => ['contenidos.area = "galeria"'],
];


$contenidoGaleria = $contenidos->list($data, $_SESSION['lang']); //contenido principal
#Información de cabecera
$template->set("title", $contenidoGaleria['25013683a9']["data"]['titulo'] . " | " . TITULO);

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
                        <h2 class="title"><?= $contenidoGaleria['25013683a9']["data"]['titulo'] ?></h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= URL ?>"><?= $contenidoGaleria['25013683a9']["data"]['subtitulo'] ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $contenidoGaleria['25013683a9']["data"]['titulo'] ?></li>
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
    Start Gallery
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="gallery-section ptb-120">
    <div class="container">
        <div class="gallery-filter-wrapper">
            <div class="button-group filter-btn-group">
                <button class="active" data-filter="*"><?= $contenidoGaleria['all']["data"]['titulo'] ?></button>
                <button data-filter="<?= $contenidoGaleria['design']["data"]['subtitulo'] ?>"><?= $contenidoGaleria['design']["data"]['titulo'] ?></button>
                <button data-filter="<?= $contenidoGaleria['webdev']["data"]['subtitulo'] ?>"><?= $contenidoGaleria['webdev']["data"]['titulo'] ?></button>
                <button data-filter="<?= $contenidoGaleria['marketing']["data"]['subtitulo'] ?>"><?= $contenidoGaleria['marketing']["data"]['titulo'] ?></button>
                <button data-filter="<?= $contenidoGaleria['appdev']["data"]['subtitulo'] ?>"><?= $contenidoGaleria['appdev']["data"]['titulo'] ?></button>
            </div>
            <div class="grid">
                <?php foreach ($contenidoGaleria as $key => $item) {
                    if ($item['data']['destacado'] == 1) continue
                ?>
                    <div class="grid-item <?= $item['data']['subtitulo'] ?>">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="<?= $item['images'][0]['url'] ?>" alt="gallery">
                                <div class="gallery-thumb-overlay">
                                    <div class="gallery-icon">
                                        <a class="img-popup" data-rel="lightcase:myCollection" href="<?= $item['images'][0]['url'] ?>"><img src="<?= $contenidoGaleria['icon']['images'][0]['url'] ?>" alt="icon"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Gallery
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php $template->themeEnd() ?>