

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php 
$contenidos = new Clases\Contenidos();
$data_area_footer = [
  "images" => true,
  "filter" => ['contenidos.area = "footer"']
];
$footer = $contenidos->list($data_area_footer, 'es', false);

?>
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
                                    <span class="sub-title"><?= $footer['b766c89ec8']['data']['titulo'] ?></span>
                                    <h4 class="link-title"><a href="<?= $footer['b766c89ec8']['data']['link'] ?>"><?= $footer['b766c89ec8']['data']['contenido'] ?></a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <ul class="footer-contact-list">
                                <li>
                                    <span class="sub-title"><?= $footer['4021fd3602']['data']['titulo'] ?></span>
                                    <h4 class="link-title"><a href="<?= $footer['4021fd3602']['data']['link'] ?>"><?= $footer['4021fd3602']['data']['contenido'] ?></a></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <ul class="footer-contact-list">
                                <li>
                                    <span class="sub-title"><?= $footer['599fdb9cae']['data']['titulo'] ?></span>
                                    <h4 class="link-title"><?= $footer['599fdb9cae']['data']['contenido'] ?></h4>
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
                            <h5 class="title"><?= $footer['aboutUs']['data']['titulo'] ?></h5>
                            <p><?= $footer['aboutUs']['data']['contenido'] ?></p>
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
                            <h4 class="title"><?= $footer['1b737655d9']['data']['titulo'] ?></h4>
                            <ul class="footer-list">
                                <li><a href="<?= URL ?>">Home</a></li>
                                <li><a href="<?= URL ?>/empresa.php">About</a></li>
                                <li><a href="<?= URL ?>/servicios.php">Services</a></li>
                                <li><a href="<?= URL ?>/portfolio.php">Portfolio</a></li>
                                <li><a href="<?= URL ?>/blog.php">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                        <div class="footer-widget">
                            <h5 class="title"><?= $footer['cad25ca119']['data']['titulo'] ?></h5>
                            <ul class="footer-list">
                                <li><a href="<?= URL ?>">Home</a></li>
                                <li><a href="<?= URL ?>/empresa.php">About</a></li>
                                <li><a href="<?= URL ?>/c/servicios">Services</a></li>
                                <li><a href="<?= URL ?>/portfolios">Portfolio</a></li>
                                <li><a href="<?= URL ?>/blogs">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <h5 class="title"><?= $footer['60d9ac645c']['data']['titulo'] ?></h5>
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
                            <a class="site-logo site-title" href="<?= URL ?>"><img src="<?= $footer['copyright_footer']['images'][0]['url'] ?>" alt="site-logo"></a>
                        </div>
                        <p><?= $footer['copyright_footer']['data']['titulo'] ?> <a href="index.html"><?= $footer['copyright_footer']['data']['subtitulo'] ?></a><?= $footer['copyright_footer']['data']['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts theme -->
  <script src="<?= URL ?> /assets/theme/assets/js/jquery-3.6.0.min.js"></script>
  <!-- bootstrap js -->
  <script src="<?= URL ?> /assets/theme/assets/js/bootstrap.min.js"></script>
  <!-- swipper js -->
  <script src="<?= URL ?> /assets/theme/assets/js/swiper.min.js"></script>
  <!-- lightcase js-->
  <script src="<?= URL ?> /assets/theme/assets/js/lightcase.js"></script>
  <!-- odometer js -->
  <script src="<?= URL ?> /assets/theme/assets/js/odometer.min.js"></script>
  <!-- viewport js -->
  <script src="<?= URL ?> /assets/theme/assets/js/viewport.jquery.js"></script>
  <!-- aos js file -->
  <script src="<?= URL ?> /assets/theme/assets/js/aos.js"></script>
  <!-- nice select js -->
  <script src="<?= URL ?> /assets/theme/assets/js/jquery.nice-select.js"></script>
  <!-- isotope js -->
  <script src="<?= URL ?> /assets/theme/assets/js/isotope.pkgd.min.js"></script>
  <!-- tweenMax js -->
  <script src="<?= URL ?> /assets/theme/assets/js/TweenMax.min.js"></script>
  <!-- main -->
  <script src="<?= URL ?> /assets/theme/assets/js/main.js"></script>
<!-- End scrips theme -->

<!-- Scripts CMS -->
<script src="<?= URL ?>/assets/js/services/lang.js"></script>
<script src="<?= URL ?>/assets/js/lightbox.js"></script>
<script src="<?= URL ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?= URL ?>/assets/js/select2.min.js"></script>
<script src="<?= URL ?>/assets/js/bootstrap-notify.min.js"></script>
<script src="<?= URL ?>/assets/js/toastr.min.js"></script>
<script src="<?= URL ?>/assets/js/services/services.js"></script>
<script src="<?= URL ?>/assets/js/services/email.js"></script>
<script src="<?= URL ?>/assets/js/services/search.js"></script>
<script src="<?= URL ?>/assets/js/services/products.js"></script>
<script src="<?= URL ?>/assets/js/services/user.js"></script>
<script src="<?= URL ?>/assets/js/services/cart.js"></script>
<script src="<?= URL ?>/assets/js/sticky/sticky-sidebar.min.js"></script>
<!-- Fin Scripts CMS -->

