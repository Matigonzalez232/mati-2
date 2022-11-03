<?php
require_once "Config/Autoload.php";
Config\Autoload::run();
$config = new Clases\Config();
$enviar = new Clases\Email();
$emailData = $config->viewEmail();
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
$data_area_contacto = [
    "images" => true,
    "filter" => ['contenidos.area = "contacto"']

];
#List de contenidos (al ser único el título, solo trae un resultado)
$contenidoData = $contenidos->list($data, $_SESSION["lang"], true);
$novedadesRelacionadas = $contenidos->list(["filter" => ["contenidos.area = '" . $f->antihack_mysqli($_GET["area"]) . "'", "contenidos.cod != '" . $f->antihack_mysqli($_GET["cod"]) . "'"], "images" => true, "limit" => 3], $_SESSION["lang"]);
$info_contacto = $contenidos->list($data_area_contacto, 'es', false);

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