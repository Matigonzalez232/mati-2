<?php
require_once "Config/Autoload.php";
Config\Autoload::run();

$template = new Clases\TemplateSite();
$f = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$config = new Clases\Config();
$enviar = new Clases\Email();
$emailData = $config->viewEmail();
$filter = [];

isset($_GET["area"]) ?  $filter[] = "contenidos.area = '" . $f->antihack_mysqli($_GET["area"]) . "'" : '';
isset($_GET["cod"]) ?  $filter[] = "contenidos.cod = '" . $f->antihack_mysqli($_GET["cod"]) . "'" : '';


$data = [
    "filter" => $filter,
    "images" => true,
    "category" => true,
    "gallery" => true,
];
$data_blog = [
    "images" => true,
    "filter" => ['contenidos.area = "Blog"'],
];
#List de contenidos 
$contenidoBlogPrincipal = $contenidos->list($data_blog, $_SESSION['lang']); //contenido principal
$contenidoData = $contenidos->list($data, $_SESSION["lang"], true);
$novedadesRelacionadas = $contenidos->list(["filter" => ["contenidos.area = '" . $f->antihack_mysqli($_GET["area"]) . "'", "contenidos.cod != '" . $f->antihack_mysqli($_GET["cod"]) . "'"], "images" => true, "limit" => 3], $_SESSION["lang"]);

#Si se encontro el contenido se almacena y sino se redirecciona al inicio
if (empty($contenidoData)) $f->headerMove(URL);
#Información de cabecera
$template->set("title", $contenidoData['data']['titulo'] . " | " . TITULO);
$template->set("description", $contenidoData['data']['description']);
$template->set("keywords", $contenidoData['data']['keywords']);
$template->set("imagen", isset($contenidoData['data']['images'][0]['url']) ? $contenidoData['data']['images'][0]['url'] : LOGO);
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
                        <h2 class="title"><?= $contenidoData['data']['titulo'] ?></h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= URL ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $contenidoData['data']['titulo'] ?></li>
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
                    <div class="col-xl-12 mb-60">
                        <div class="blog-item details">
                            <div class="blog-thumb">
                                <img src="<?= $contenidoData['images']['0']['url'] ?>" alt="blog">
                            </div>
                            <div class="blog-content">
                                <!-------------- CONTENIDO -------------->
                                <div class="blog-post-meta">
                                    <span class="user"><?= $contenidoData['data']['description'] ?></span>
                                    <span class="category two"><?= $contenidoData['data']['keywords'] ?></span>
                                </div>
                                <?= $contenidoData['data']['contenido'] ?>
                                <div class="blog-widget-thumb-area">
                                    <div class="row justify-content-center mb-20-none">
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                                            <div class="blog-widget-thumb">
                                                <img src="<?= $contenidoBlogPrincipal['a135f343aa']['images']['0']['url'] ?>" alt="blog">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                                            <div class="blog-widget-thumb">
                                                <img src="<?= $contenidoBlogPrincipal['a135f343aa']['images']['1']['url'] ?>" alt="blog">
                                                <div class="blog-widget-video">
                                                    <div class="video-main">
                                                        <div class="promo-video">
                                                            <div class="waves-block">
                                                                <div class="waves wave-1"></div>
                                                                <div class="waves wave-2"></div>
                                                                <div class="waves wave-3"></div>
                                                            </div>
                                                        </div>
                                                        <a class="video-icon video" data-rel="lightcase:myCollection" href="<?= $contenidoBlogPrincipal['a135f343aa']['data']['link'] ?>">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <blockquote>
                                    <div class="quote-area d-flex flex-wrap">
                                        <div class="quote-icon">
                                            <i class="icon-Producing_Icone"></i>
                                        </div>
                                        <div class="quote-content-area">
                                            <p class="quote-content"><?= $contenidoBlogPrincipal['a135f343aa']['data']['subtitulo'] ?></p>
                                            <span><?= $contenidoBlogPrincipal['a135f343aa']['data']['description'] ?></span>
                                        </div>
                                    </div>
                                </blockquote>
                                <p><?= $contenidoBlogPrincipal['a135f343aa']['data']['contenido'] ?></p>

                                <div class="blog-related-area">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="blog-section-header">
                                                <div class="section-header">
                                                    <h3 class="section-title"><?= $contenidoBlogPrincipal['a135f343aa']['data']['keywords'] ?></h3>
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
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <div class="blog-slider-area">
                                                <div class="blog-slider">
                                                    <div class="swiper-wrapper">
                                                        <?php foreach ($contenidoBlogPrincipal as $key => $item) {
                                                            if ($item['data']['subcategoria'] != "mejor_valorados") continue;
                                                            $link = URL . "/blog_details/" . $item['data']['area'] . "/" . $f->normalizar_link($item['data']['titulo']) . "/" . $item['data']['cod'];
                                                        ?>
                                                            <div class="swiper-slide">
                                                                <div class="blog-item">
                                                                    <div class="blog-thumb">
                                                                        <img src="<?= $item['images'][0]['url'] ?>" alt="blog">
                                                                    </div>
                                                                    <div class="blog-content">
                                                                        <div class="blog-post-meta">
                                                                            <span class="user"><?= $item['data']['description'] ?></span>
                                                                            <span class="category two"> <?= $item['data']['keywords'] ?></span>
                                                                        </div>
                                                                        <h3 class="title"><a href="<?= $link ?>"><?= $item['data']['titulo'] ?></a></h3>
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
                                <!-------------- FIN CONTENIDO -------------->

                                <!-------------- FORMULARIO -------------->
                                <div class="blog-comment-area">
                                    <?php
                                    if (isset($_POST['submit'])) {

                                        $nombre = $_POST["nombre"];
                                        $email = $_POST["email"];
                                        $asunto = "Comentarios";
                                        $mensaje = $_POST["mensaje"];
                                        if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
                                            // isset($_POST) ? var_dump($_POST) : "";
                                            //MENSAJE A USUARIO
                                            $mensajeFinal = "<b>Gracias por realizar tu consulta, te contactaremos a la brevedad.</b><br/>";
                                            $mensajeFinal .= "<b>Consulta</b>: " . $mensaje . "<br/>";

                                            $enviar->set("asunto", "Realizaste tu consulta.");
                                            $enviar->set("receptor", $email);
                                            $enviar->set("emisor", $emailData['data']['remitente']);
                                            $enviar->set("mensaje", $mensajeFinal);
                                            $enviar->emailEnviar();

                                            //MENSAJE AL ADMIN
                                            $mensajeFinalAdmin = "<b>Nueva consulta desde la web.</b><br/>";
                                            $mensajeFinalAdmin .= "<b>Nombre</b>: " . $nombre . " <br/>";
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
                                    <h3 class="title">Leave A Comments</h3>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <form class="comment-form" method="post" role="form">
                                        <div class="row justify-content-center mb-25-none">
                                            <div class="col-xl-6 col-lg-6 form-group">
                                                <input type="text" name="nombre" class="form--control" placeholder="Your name*">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 form-group">
                                                <input type="email" name="email" class="form--control" placeholder="Your email*">
                                            </div>
                                            <div class="col-lg-12 form-group">
                                                <textarea class="form--control" name="mensaje" placeholder="Write message*"></textarea>
                                            </div>
                                            <div class="col-lg-12 form-group">
                                                <button type="submit" name="submit" class="btn--base mt-10">Submit Now <i class="fas fa-arrow-right ml-2"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-------------- FIN FORMULARIO -------------->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 mb-60">

                <div class="sidebar">

                    <!-------------- BARRA DE BUSQUEDAS -------------->
                    <div class="widget-box mb-30">
                        <h4 class="widget-title"><?= $contenidoBlogPrincipal['search_titulo']['data']['titulo'] ?></h4>
                        <div class="search-widget-box">
                            <form class="search-form">
                                <input type="text" name="search" class="form--control" placeholder="Search">
                                <button type="submit"><i class="icon-Search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-------------- FIN BARRA DE BUSQUEDAS -------------->

                    <!-------------- CONTENIDOS RECIENTES -------------->

                    <div class="widget-box mb-30">
                        <h4 class="widget-title"><?= $contenidoBlogPrincipal['titulo_recientes']['data']['titulo'] ?></h4>
                        <div class="popular-widget-box">
                            <?php foreach ($contenidoBlogPrincipal as $key => $item) {
                                if ($item['data']['categoria'] != "publicaciones_recientes") continue;
                                $link = URL . "/blog_details/" . $item['data']['area'] . "/" . $f->normalizar_link($item['data']['titulo']) . "/" . $item['data']['cod'];
                            ?>
                                <div class="single-popular-item d-flex flex-wrap align-items-center">
                                    <div class="popular-item-thumb">
                                        <img src="<?= $item['images'][0]['url'] ?>" alt="blog">
                                    </div>
                                    <div class="popular-item-content">
                                        <span class="blog-date"><?= $item['data']['subtitulo'] ?></span>
                                        <h5 class="title"><a href="<?= $link ?>"><?= $item['data']['titulo'] ?></a></h5>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-------------- FIN CONTENIDOS RECIENTES -------------->

                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php
$template->themeEnd();
?>