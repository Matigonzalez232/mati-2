<?php
require_once "Config/Autoload.php";
Config\Autoload::run();

$template = new Clases\TemplateSite();
$f = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$config = new Clases\Config();
$enviar = new Clases\Email();
$emailData = $config->viewEmail();
$captchaData = $config->viewCaptcha();
#Se carga la configuración de email
$data = [
    "filter" => ['contenidos.area = "contacto"'],
];
$contenidoContacto = $contenidos->list($data, $_SESSION['lang']);
#Información de cabecera
$template->set("title", $contenidoContacto['titulo_contacto']["data"]['titulo'] . " | " . TITULO);

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
                        <h2 class="title"><?= $contenidoContacto['titulo_contacto']["data"]['titulo'] ?></h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= URL ?>"><?= $contenidoContacto['titulo_contacto']["data"]['subtitulo'] ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $contenidoContacto['titulo_contacto']["data"]['titulo'] ?></li>
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
    Start Contact-item
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="contact-item-section ptb-120">
    <div class="contact-item-element-one">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-71.png" alt="element">
    </div>
    <div class="contact-item-element-two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-72.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <?php foreach ($contenidoContacto as $key => $item) {
                if ($item['data']['destacado'] != 1) continue;
            ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="contact-item text-center">
                        <div class="contact-icon-area">
                            <div class="contact-icon">
                                <i class="<?= $item['data']['keywords'] ?>"></i>
                            </div>
                        </div>
                        <div class="contact-content">
                            <h3 class="title"><?= $item['data']['titulo'] ?></h3>
                            <p><a href="mailto:"><?= $item['data']['subtitulo'] ?></a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Contact-item
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<div class="contact-section ptb-120">

    <div class="contact-element-one">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-73.png" alt="element">
    </div>
    <div class="contact-element-two">
        <img src="<?= URL ?>/assets/theme/assets/images/element/element-74.png" alt="element">
    </div>
    <?php
    if (isset($_POST['submit'])) {

        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $asunto = $_POST["asunto"];
        $mensaje = $_POST["mensaje"];
        if (!empty($nombre) && !empty($email) && !empty($mensaje) && !empty($telefono)  && !empty($asunto)) {
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
    <div class="container">
        <form class="contact-form " method="post" role="form">
            <div class="row justify-content-center mb-25-none">
                <div class="col-xl-6 col-lg-6 form-group">
                    <label>Enter Name</label>
                    <input type="text" name="nombre" class="form--control" placeholder="Jhon david smith" required>
                </div>
                <div class="col-xl-6 col-lg-6 form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form--control" placeholder="jhonsmith@gmail.com" required>
                </div>
                <div class="col-xl-6 col-lg-6 form-group">
                    <label>Your Phone</label>
                    <input type="text" name="telefono" class="form--control" placeholder="+1 (900) 696 3600" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                </div>
                <div class="col-xl-6 col-lg-6 form-group">
                    <label>Select Subject</label>
                    <div class="contact-select">
                        <select class="form--control" name="asunto" required>
                            <option value="1">Web Development</option>
                            <option value="2">Web Design</option>
                            <option value="3">Digital Marketing</option>
                            <option value="4">Search SEO</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 form-group">
                    <label>Write Message</label>
                    <textarea name="mensaje" class="form--control" required placeholder="Write Here ..."></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 form-group text-center">
                    <button type="submit" name="submit" class="btn--base mt-20">Send Now <i class="fas fa-arrow-right ml-2"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Map
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="map-area">
    <iframe src="<?= $contenidoContacto['mapa']["data"]['link'] ?>" style="border:0" allowfullscreen></iframe>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Map
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php $template->themeEnd() ?>