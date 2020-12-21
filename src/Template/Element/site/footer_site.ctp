<!-- #footer-wrapper start -->
<div id="footer-wrapper">
    <!-- #footer start -->
    <footer id="footer">
        <!-- .container start -->

        <div class="container">
            <div class="row" style="text-align:center;">
                <div style="display:inline-block;">
                    <h3 style="color:#FFF;font-size:16px;">Conheça a Dados & Insights</h3>
                    <a style="margin-right:1rem;" target="_blank" href="#">
                        <svg viewBox="0 0 33 32" width="32px" height="32px"><g fill="none" fill-rule="evenodd" transform="translate(.333)"><circle cx="16" cy="16" fill="#000000" r="16"></circle><image height="19.2" width="19.2" x="6.4" href="https://ph-cdn3.ecosweb.com.br/imagens01/pwa/assets/icons/ic-instagram.png" y="6.4"></image></g></svg>
                    </a>
                </div>

            </div>

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-3 start -->
                <div class="redes">
                <div class="col-md-6 col-sm-12">
                    <a href="#">
                        <img id="flogo" style="max-width: 280px" src="/images/logo_high_resolution_white.png" class="img-responsive" alt="Construction HTML Template"/>
                    </a>

                </div>
                    <!-- .col-md-3 end -->
                </div>

            <div class="col-md-6 col-sm-12" >
                    <div class="footer-info">
                   <span class="icon-container"><img style="" src="/images/svg/whats.png" class="img-responsive" alt="whats icon"/>
                   </span><a href="https://api.whatsapp.com/send?l=pt&amp;phone=5579998967722" target="_blank"><strong>WhatsApp:</strong> (79) 99896-7722</a>
                    </div>

                </div><!-- .col-md-3 end -->
                <div class="col-md-6 col-sm-12" id="link" style="margin-left: 584px;margin-top: -22px;">
                    <div class="footer-info">
                                <span class="icon-container">
                                    <img src="/images/svg/email.svg" class="img-responsive" alt="email icon"/>
                                </span>
                        <a href="/contato"><strong>Email:</strong>contato@dadoseinsights.com.br</a>
                    </div>
                </div><!-- .col-md-3 end -->
                <!-- .col-md-3 start -->
            </div>

        </div><!-- .container end -->
    </footer><!-- #footer end -->
</div><!-- #footer-wrapper end -->

<!-- #copyright-container start -->
<div id="copyright-container">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6 col-sm-6">
                <p><strong>© Dados & Insights</strong> <?php echo  date('Y')?>. Todos os direitos reservados</p>
            </div><!-- .col-md-6 end -->

            <!-- .col-md-6 start -->
            <div class="col-md-6 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="/">Início</a></li>
                    <li><a href="/sobre/5">O que fazemos</a></li>
                    <li><a href="/sobre/6">Como fazemos</a></li>
                    <li><a href="/sobre/7"> Benefícios</a></li>
                    <li><a href="/servicos">Serviços</a></li>
                    <li><a href="/contato">Contato</a></li>
                </ul>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->

    <a href="#" class="scroll-up">
                <span class="icon-container">
                    <img src="/images/svg/arrowup.svg" class="img-responsive" alt="arrow icon"/>
                </span>
    </a>

</div><!-- .copyright-container end -->


<script src="/js/site/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="/bootstrap/js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="/js/site/jquery.scripts.min.js"></script><!-- modernizr, retina... -->
<script src="/rs-plugin/js/jquery.themepunch.tools.min.js"></script><!-- Revolution slider script -->
<script src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script><!-- Revolution slider script -->
<script src="/js/site/jquery.magnific-popup.min.js"></script><!-- used for video lightbox -->
<script src='/owl-carousel/owl.carousel.min.js'></script><!-- Carousels script -->
<script src="/js/site/retina.js"></script><!-- retina script -->
<script src="/js/site/include.js"></script><!-- custom js functions -->
<script src="/js/site/select2.min.js"></script><!-- custom js functions -->
<script src="/js/site/jquery.mask.js"></script><!-- custom js functions -->



<!--js menu fixo-->
<!--<script>-->
<!--    window.onload = function(e) {-->
<!--        var offset = document.getElementsByClassName('header-wrapper header-transparent')[0].offsetTop;-->
<!--        var menu = document.getElementsByClassName('header-wrapper header-transparent')[0];-->
<!---->
<!--        document.addEventListener('scroll', function() {-->
<!--            if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset) {-->
<!--                menu.style.position = 'fixed';-->
<!--            } else {-->
<!--                menu.style.position = 'initial';-->
<!--            }-->
<!--        });-->
<!--    }-->
<!--</script>-->
<!--js menu fixo-->

<script>
    /* <![CDATA[ */
    jQuery(document).ready(function ($) {
        'use strict';

        jQuery('#rev-slider').revolution(
            {
                dottedOverlay: "none",
                delay: 9000,
                startwidth: 1170,
                startheight: 600,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 3,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview5",
                touchenabled: "on",
                onHoverStop: "off",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                keyboardNavigation: "on",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                forceFullWidth: "off",
                fullScreenAlignForce: "off",
                minFullScreenHeight: "400",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                hideTimerBar: "on"
            });

        $('.video-post').magnificPopup({
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>'
            }
        });

        // GALLERY CAROUSEL
        $('#gallery-carousel').owlCarousel({
            items: 5, //5 items above 1000px browser width
            itemsCustom: [[0, 1], [600, 2], [1000, 4], [1300, 5]],
            autoPlay: true,
            pagination: false,
            navigation: true
        });

        // GALLERY CAROUSEL
        $('#gallery-carousel2').owlCarousel({
            items: 5, //5 items above 1000px browser width
            itemsCustom: [[0, 1], [600, 2], [1000, 4], [1300, 5]],
            autoPlay: true,
            pagination: false,
            navigation: true
        });
    });

        // TESTIMONIAL CAROUSEL START
        $('#testimonial-carousel').owlCarousel({
            items: 2, //2 items above 1000px browser width
            itemsCustom: [[0, 1], [600, 2], [1000, 2]],
            autoPlay: true,
            pagination: false,
            navigation: true
        });

    $( document ).ready(function() {
        const elementos = [];

        $.each($('.nav a'), (key, val) => {
            const item = $(val);
            elementos.push(item);
        });

        for(let item of elementos) {
            if(item.attr('href').includes(window.location.pathname)) {
                const liItem = item.parent();
                liItem.attr('class', 'current-menu-item');
                break;
            }
        }
    });
</script>


<?= $this->fetch('script-footer') ?>


