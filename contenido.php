<?php
require_once "Config/Autoload.php";
Config\Autoload::run();

$template = new Clases\TemplateSite();
$f = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();

$filter = [];

isset($_GET["area"]) ?  $filter[] = "contenidos.area = '" . $f->antihack_mysqli($_GET["area"]) . "'" : '';
isset($_GET["cod"]) ?  $filter[] = "contenidos.cod = '" . $f->antihack_mysqli($_GET["cod"]) . "'" : '';


$data = [
    "filter" => $filter,
    "images" => true,
    "category" => true,
    "gallery" => true,
];

#List de contenidos (al ser único el título, solo trae un resultado)
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
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-section two ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="service-item three details">
                    <div class="service-thumb">
                        <img src="<?= $contenidoData['images'][1]['url'] ?>" alt="service">
                    </div>
                    <div class="service-content">
                        <h2 class="title"><?= $contenidoData['data']['titulo'] ?></h2>


                        <?= $contenidoData['data']['contenido'] ?>


                            <blockquote class="two">
                                <div class="quote-area d-flex flex-wrap">
                                    <div class="quote-icon">
                                        <img src="<?= URL ?>/assets/theme/assets/images/client/quote-2.png" alt="quote">
                                    </div>
                                    <div class="quote-shape">
                                        <img src="<?= URL ?>/assets/theme/assets/images/element/element-66.png" alt="element">
                                    </div>
                                    <div class="quote-content-area">
                                        <p class="quote-content">Web optimization alludes to an umbrella of strategies that upgrade your site’s positioning for significant list items. A higher positioning in list items.</p>
                                    </div>
                                </div>
                            </blockquote>
                            <p>Pick our website architecture administrations, and your business can depend on 100% straightforwardness. From our customized statements to our underlying plans, our group gives your organization complete admittance to our website
                                Get free, exact, and moment quote for our website architecture and advancement administrations with our simple to-utilize number cruncher. Our group tailors our website composition administrations to your organization and its one of a kind requirements. That is the reason you can redo each component of our administrations to your organization, items or administrations, and objectives.</p>
                            <div class="contact-section two">
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
                                                        <p>Credibly grow premier ideas rather than bricks-and-clicks str/ategic theme areas.</p>
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
                                                                <label for="level-1">I'm Agree With Softim <a href="#0" class="text--base">Terms & Conditions</a></label>
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
<?php
$template->themeEnd();
?>