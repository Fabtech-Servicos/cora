<!--<a href="https://api.whatsapp.com/send?l=pt&amp;phone=5579999780838">-->
<!--    <img src="https://i.imgur.com/ryESuZ5.png" style="height:80px; position:fixed; bottom: 25px;-->
<!--     right: 25px; z-index:99999;" data-selector="img"></a>-->
<!--<div class="tp-banner-container fullwidthbanner">-->


<div id="rev-slider" class="tp-banner">
    <ul>
        <!-- SLIDE ONE -->
        <?php foreach ($sliders as $key => $slider): ?>
            <li data-index="slider<?= $key + 1 ?>" data-transition="fade" data-slotamount="5" data-masterspeed="700"
                data-title="winter">
                <!-- MAIN IMAGE -->
                <img src="<?= "/files/Sliders/photo/" . $slider->photo ?>" alt="slidebg3" data-bgfit="cover"
                     data-bgposition="center center"
                     data-bgrepeat="no-repeat">

<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h1 style="color: #f7f7f7; font-size: 60px; ">--><?//= $slider->description ?><!--</h1>-->
<!--                </div>-->

                <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                     data-x="110"
                     data-y="310"
                     data-speed="500"
                     data-start="1000"
                     data-easing="Back.easeOut"
                     data-endspeed="500"
                     style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                </div>

                <div class="tp-caption tp-small-heading sfb"
                     data-x="360"
                     data-y="370"
                     data-speed="500"
                     data-start="1100"
                     data-easing="Back.easeOut"
                     data-endspeed="500"
                     style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                >

                </div>
            </li>
        <?php endforeach; ?>
        <!-- SLIDE ONE END -->

        <!-- SLIDE TWO -->
    </ul>
</div><!-- .tp-banner end -->
</div><!-- .tp-banner-container end -->




<!-- .page-content solicitar serviço start -->
<div class="page-content quote style-1 custom-background bkg-darkgrey dark mb-70 service">
    <!-- .container start -->
    <div class="container" id="cont">
        <!-- .row start -->
        <div class="row mb-0" style="margin-bottom: 20px !important; ">
            <!-- .col-md-9 start -->
            <div class="col-md-4 col-sm-4 col-xs-12 mb-0" id="solicitar" >
                <div class="quote-content">
                    <div class="text">
                        <h3 style="text-align: left">DADOS & INSIGHTS</h3>
                    </div>
                </div>
            </div><!-- .col-md-9 end -->

            <div class="col-md-2 col-sm-2 col-xs-12 mb-0" id="solicitar" >
                <p class="phones">
                    <a href="tel:+5579998967722"><i class="rh rh-phone"> <img id="mg" style="height: 30px; float: left" src="/images/svg/telefone.svg" class="img-responsive" alt="tel icon"/></i> <small>(79)</small> 99896-7722</a>
                </p>
            </div>

            <!-- .col-md-3 start -->
            <div class="col-md-4 col-sm-4 col-xs-12 mb-50">
                <div class="quote-btn">
                    <a href="/contato">
                        <div class="btn btn-primary float-right" id="btso">
                            <img style="height: 30px; float: right; margin-left: 10px; padding-bottom: 3px;" src="/images/svg/email.svg" class="img-responsive" alt="email icon">
                            Entre em Contato
                        </div>
                    </a>
<!--                    <img src="/images/animation-black-white.gif">-->
                </div>
            </div><!-- .col-md-3 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<!-- .page-content solicitar serviço end -->


<!-- .container start -->
<div class="container">
    <!-- .row start -->
    <div class="row mb-0">
        <!-- .col-md-12 start -->
        <div class="col-md-12 centered mb-0">
            <div class="custom-heading style-2" >
                <h2 style="font-size: 36px !important;">Serviços</h2>

            </div><!-- .custom-heading end -->
        </div><!-- .col-md-12 end -->
    </div><!-- .row end -->
</div><!-- .container end -->



<div class="page-content">
    <div class="container">
        <div class="row" id="servv">
            <?php foreach ($servic as $serv): ?>
                <div class="col-md-4 col-sm-12">
                    <div class="feature-box style-2">
                        <div class="feature-body">
                            <div class="custom-heading style-1">
                                <h4><?php echo $serv->title ?></h4>
                            </div><!-- .custom-heading end -->

                         <?= strlen($serv->description) >  90 ? substr($serv->description, 0, 90) . "..." : $serv->description ?>

                        </div><!-- .feature-body end -->
                    </div><!-- .feature-box-end -->
                    <div data-widget-id="wid_1520863172_3f9ynuv6p"
                         class="moto-widget moto-widget-button moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-small"
                         data-widget="button">
                        <a href="servico/<?= $serv->id ?>" data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span
                                class="fa moto-widget-theme-icon"></span><button id="bs" style="color:#f7f7f7 !important; width: fit-content; text-align: center; background: #0084ca" type="button" class="btn btn-secondary" data-dismiss="modal">Ver Mais Detalhes
                            </button></a>
                    </div>
                </div><!-- .col-md-6 end -->
            <?php endforeach;?>
        </div><!-- .container end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<!-- .page-content start -->
<div class="page-content quote style-2 custom-img-background dark bkg-img1">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row mb-0">
            <!-- .col-md-12 start -->
            <?php foreach ($missions as $mission): ?>
                <div class="col-md-12 centered mb-0" id="somos" style="background-color: rgba(0,0,0,0.7); padding: 25px 20px; border-radius: 3px;-webkit-border-radius: 3px;">
                    <div class="custom-heading style-2">
                        <h2 style="text-shadow:#000 1px -1px, #000 -1px 1px, #000 1px 1px, #000 -1px -1px; color: #f7f7f7"> <?php echo $mission->title ?></h2>
                    </div><!-- .custom-heading end -->
                    <div class="text triggerAnimation animated" data-animate='fadeInDown'
                         style="text-shadow:#000 1px -1px, #000 -1px 1px, #000 1px 1px, #000 -1px -1px">
                        <?php echo  $mission->description ?>
                    </div>
                    <!--                    <p class="author-name triggerAnimation animated" data-animate='fadeInDown'>InnovarSeg</p>-->
                </div>
            <?php endforeach; ?>
            <!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content.custom-img-background end -->

<!-- blog start -->
<div class="page-content custom-background bkg-black dark mb-70" style="background-color: #fff">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row mb-0">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered mb-0">
                <div class="custom-heading style-2" >
                    <h2 style="font-size: 36px !important; color:#333">Blog</h2>

                </div><!-- .custom-heading end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->

    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <?php foreach ($blog as $post): ?>
                <div class="col-md-4 col-sm-12">
                    <div class="feature-box style-2">
                        <div class="feature-body" style="background: #fff; color: #333">
                            <div class="t">
                                <img class="bg-front"  style=" width: 360px; height: 224px;
                                        object-fit: cover;" src="<?= "/files/Blog/photo/" . $post->photo ?>">
                                <!--     -moz-available firefox-->
                            </div>
                            <div class="post-name">
                                <h4 style="color: #333"><?= $post->title ?></h4>
                            </div>
                            <div class="post-date" style="margin-bottom: 10px">
                                <span style="font-style: italic; color: #0084ca"><?= $post->date ?> | <?= $post->signature ?></span>
                            </div>
                            <div class="post-body">
                                <span class="desc-blog-front"> <?= strlen($post->description) >  90 ? substr($post->description, 0, 90) . "..." : $post->description ?></span>
                            </div>
                            <small style="color: #333 !important;"><a href="/blog/post/<?= $post->id ?>">Continue Lendo</a></small>
                            <hr>

                        </div><!-- .feature-body end -->
                    </div><!-- .feature-box-end -->
                </div><!-- .col-md-6 end -->
            <?php endforeach; ?>
        </div><!-- .container end -->
        <!-- .container-fluid start -->
            <a style="justify-content: center; display: flex;margin-bottom: 50px;margin-top: -40px;" href="/blog/blog" data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span
                    class="fa moto-widget-theme-icon"></span><button id="bs" style="color:#f7f7f7 !important; width: fit-content; text-align: center; background: #0084ca" type="button" class="btn btn-secondary" data-dismiss="modal">
                    Ver Mais
                </button></a>
    </div>
<!--    end blog-->


    <div class="page-content custom-img-background dark bkg-img2">
        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="feature-box style-1">
                        <div class="feature-body">
                                <span class="icon-container triggerAnimation animated" data-animate='zoomIn'>
                                    <img style="max-width: 43px" src="/images/cora.png" class="img-responsive" alt="painting icon"/>
                                </span>
                            <div class="custom-heading">
                                <a href="/servicos">
                                    <h4>Conheça nossos serviços</h4>
                                </a>
                            </div><!-- .custom-heading end -->

                            <p style="color: #f7f7f7">
                                Clique aqui e conheça nossor serviços
                            </p>

                        </div><!-- .feature-body end -->
                    </div><!-- .feature-box-end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-6 col-sm-6" id="ctc">
                    <div class="feature-box style-1">
                        <div class="feature-body">
                                <span class="icon-container triggerAnimation animated" data-animate='zoomIn'>
                                    <img src="/images/svg/email.svg" class="img-responsive" alt="email icon"/>
                                </span>
                            <div class="custom-heading">
                                <a href="/contato">
                                    <h4>Entre em contato</h4>
                                </a>
                            </div><!-- .custom-heading end -->

                            <p style="color: #f7f7f7">
                                Se você tiver alguma dúvida, entre em contato conosco.
                            </p>

                        </div><!-- .feature-body end -->
                    </div><!-- .feature-box-end -->
                </div><!-- .col-md-4 end -->

            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>
    <div class="page-content custom-background bkg-black dark mb-70" style="background-color: #fff !important;  ">
        <!-- .container start -->
        <!-- Instagram Início -->
        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row mb-0">
                <!-- .col-md-12 start -->
                <div class="col-md-12 centered mb-0">
                    <div class="custom-heading style-2" >
                        <h2 style="font-size: 36px !important; color:#333">Siga Nosso Instagram</h2>

                    </div><!-- .custom-heading end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div>
        <div class="instagram-wrapper">
            <div class="instagramArrows">
                <span onclick="slideInsta('right')"></span>
                <span onclick="slideInsta('left')"></span>
            </div>
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="instagram-photos">
                            <div>
                                <div class="instImg"></div>
                                <a href="#" class="instImgInfo" target="_blank">
                                    <div class="fbjs">
                                        <div class="instLike">
                                            <span></span>
                                            <p></p>
                                        </div>
                                        <div class="instComm">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <div class="instImg"></div>
                                <a href="#" class="instImgInfo" target="_blank">
                                    <div>
                                        <div class="instLike">
                                            <span></span>
                                            <p></p>
                                        </div>
                                        <div class="instComm fbox">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <div class="instImg"></div>
                                <a href="#" class="instImgInfo" target="_blank">
                                    <div class="fbjs">
                                        <div class="instLike">
                                            <span></span>
                                            <p></p>
                                        </div>
                                        <div class="instComm fbox">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <div class="instImg"></div>
                                <a href="#" class="instImgInfo" target="_blank">
                                    <div class="fbjs">
                                        <div class="instLike">
                                            <span></span>
                                            <p></p>
                                        </div>
                                        <div class="instComm fbox">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <div class="instImg"></div>
                                <a href="#" class="instImgInfo" target="_blank">
                                    <div class="fbjs">
                                        <div class="instLike">
                                            <span></span>
                                            <p></p>
                                        </div>
                                        <div class="instComm fbox">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div id="its">
                                <div class="instImg"></div>
                                <a href="#" class="instImgInfo" target="_blank">
                                    <div class="fbjs">
                                        <div class="instLike">
                                            <span></span>
                                            <p></p>
                                        </div>
                                        <div class="instComm fbox">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim Instagram -->
        </div>
    </div>
</div>

<!-- .page-content.custom-img-background end -->

<?php $this->start('script-footer') ?>

<script>
    window.onload = function () {
        let width = screen.width;

        let height = screen.height;

        if (width <= 800 || height <= 600) {
            document.getElementById("insta-right").click();
            document.getElementById("insta-right").click();
            document.getElementById("insta-right").click();
        }
    }

    if (document.querySelector('.instagram-wrapper')) {

        const url = '/instagram';

        $.getJSON('/instagram', [], function (instJSON) {
            let instItemsJSON = instJSON['graphql']['user']['edge_owner_to_timeline_media']['edges'];
            let instagramDivs = document.querySelectorAll('.instagram-photos > div');
            for (let ins = 0; ins < instagramDivs.length; ins++) {
                instagramDivs[ins].querySelector('.instImg').style.backgroundImage = "url('" + instItemsJSON[ins]['node']['display_url'] + "')";
                instagramDivs[ins].querySelector('a').href = "https://www.instagram.com/p/" + instItemsJSON[ins]['node']['shortcode'];
                instagramDivs[ins].querySelector('.instLike p').innerText = instItemsJSON[ins]['node']['edge_liked_by']['count'];
                instagramDivs[ins].querySelector('.instComm p').innerText = instItemsJSON[ins]['node']['edge_media_to_comment']['count'];
            }
        }).fail(function() {
            document.querySelector('.instagram-wrapper').style.display = 'none';
        });
    }

    let positionInstaSlide = 0;

    function slideInsta(direction) {
        if (direction === 'left' && positionInstaSlide !== -2) {
            positionInstaSlide--;
            changeInstaPos();
        } else if (direction === 'right' && positionInstaSlide !== 2) {
            positionInstaSlide++;
            changeInstaPos();
        }

        function changeInstaPos() {
            document.querySelector(".instagram-photos").style.transform = "translate(" + ((positionInstaSlide * 202)) + "px)";
        }

        if (positionInstaSlide === -2) {
            document.querySelector('.instagramArrows span:nth-of-type(2)').style.opacity = "0";
        } else if (positionInstaSlide === 2) {
            document.querySelector('.instagramArrows span:nth-of-type(1)').style.opacity = "0";
        } else {
            document.querySelector('.instagramArrows span:nth-of-type(1)').style.opacity = "1";
            document.querySelector('.instagramArrows span:nth-of-type(2)').style.opacity = "1";
        }
    }


    document.querySelector('.instagram-photos').addEventListener("touchstart", startTouch, false);
    document.querySelector('.instagram-photos').addEventListener("touchmove", moveTouch, false);

    // Swipe Up / Down / Left / Right
    let initialX = null;
    let initialY = null;

    function startTouch(e) {
        initialX = e.touches[0].clientX;
        initialY = e.touches[0].clientY;
    }

    function moveTouch(e) {
        if (initialX === null) {
            return;
        }
        if (initialY === null) {
            return;
        }

        let currentX = e.touches[0].clientX;
        let currentY = e.touches[0].clientY;

        let diffX = initialX - currentX;
        let diffY = initialY - currentY;

        if (Math.abs(diffX) > Math.abs(diffY)) {
            // sliding horizontally
            if (diffX > 0) {
                // swiped left
                slideInsta('left');
            } else {
                // swiped right
                slideInsta('right');
            }
        } else {
            // sliding vertically
            if (diffY > 0) {
                // swiped up
            } else {
                // swiped down
            }
        }

        initialX = null;
        initialY = null;

        e.preventDefault();
     };

    /******************************** Fim - Instagram Script ********************************/

    /******************************** Select2 Script ********************************/
    $(document).ready(function () {
        $('.services').select2({
            placeholder: "Selecione o Serviço"
        });
    });

    /******************************** Fim Select2 Script ********************************/
</script>
<?php $this->end(); ?>
<!--start instagram-->
<style>
    .name-insta {
        font-family: auto;
        margin-bottom: 14px;
        margin-left: -27px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 23px;
        margin-top: 5%;

    }

    .instagram-wrapper, .instagram-photos, .instImgInfo, .instImgInfo > div, .instLike, .instComm {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .instagram-photos > div > a {
        color: inherit;
        font-size: 16px;
        text-decoration: none;
    }

    .instagram-photos {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        transition: 0.28s ease-in-out;
        width: 100%;
        /*margin-bottom: 10px;*/
        /*margin-top: 10px;*/

    }

    .instagram-photos > div {
        height: calc(12vw - 12px);
        position: relative;
        overflow: hidden;
        width: calc(12vw - 12px);
    }

    .instagram-photos .instImg {
        background-size: 110%;
        background-position: center;
        background-repeat: no-repeat;
        display: block;
        position: absolute;
        width: 107%;
        height: 107%;
        -webkit-transition: 0.42s ease;
        -o-transition: 0.42s ease;
        transition: 0.42s ease;
    }

    .instagram-photos > div p {
        color: white;
        font-size: 28px;
        line-height: 42px;
        margin: 0 12px;
        position: relative;
        z-index: 1;
    }

    .instImgInfo {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.6);
        opacity: 0;
        position: relative;
        height: 100%;
        -webkit-transition: 0.4s ease;
        -o-transition: 0.4s ease;
        transition: 0.4s ease;
        z-index: 1;
    }

    .instImgInfo:hover {
        opacity: 1;
    }

    .instImgInfo > div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .instImgInfo span {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: block;
        width: 40px;
        height: 40px;
        background-size: 100%;
    }

    .instLike span {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjMuMjE4IiBoZWlnaHQ9IjIwLjc3NiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gPGc+ICA8dGl0bGU+YmFja2dyb3VuZDwvdGl0bGU+ICA8cmVjdCBmaWxsPSJub25lIiBpZD0iY2FudmFzX2JhY2tncm91bmQiIGhlaWdodD0iNDAyIiB3aWR0aD0iNTgyIiB5PSItMSIgeD0iLTEiLz4gPC9nPiA8Zz4gIDx0aXRsZT5MYXllciAxPC90aXRsZT4gIDxwYXRoIGlkPSJzdmdfMSIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNmZmZmZmYiIGQ9Im0xMS42MDgsMjAuNzc2Yy0yMi42NDcsLTEyLjM1NCAtNi4yNjgsLTI3LjcxMyAwLC0xNy4zNjljNi4yNjksLTEwLjM0NCAyMi42NDksNS4wMTUgMCwxNy4zNjl6Ii8+IDwvZz48L3N2Zz4=);
    }

    .instComm span {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+IDx0aXRsZS8+IDxnPiAgPHRpdGxlPmJhY2tncm91bmQ8L3RpdGxlPiAgPHJlY3QgZmlsbD0ibm9uZSIgaWQ9ImNhbnZhc19iYWNrZ3JvdW5kIiBoZWlnaHQ9IjQwMiIgd2lkdGg9IjU4MiIgeT0iLTEiIHg9Ii0xIi8+IDwvZz4gPGc+ICA8dGl0bGU+TGF5ZXIgMTwvdGl0bGU+ICA8cGF0aCBmaWxsPSIjZmZmZmZmIiBpZD0iT3ZhbCAyNDcgY29weSIgZD0ibTYuNSwxNGMtMC43NjgxOSwwIC0xLjUwNTI2LC0wLjEwMjUxIC0yLjE4OTM0LC0wLjI5MDcxYy0wLjgyMjgyLDAuNjIzMjkgLTIuMTI1MzMsMS40MjE4MSAtMy4zOTgwNiwxLjQyMTgxYzAuNjM5MTYsLTAuNjA0OTcgMC44NTk4NiwtMS43MjgwNiAwLjkyNjUyLC0yLjY0NjAzYy0xLjEzODIsLTAuOTAwNTUgLTEuODM5MTIsLTIuMTI5ODUgLTEuODM5MTIsLTMuNDg1MDdjMCwtMi43NjE0MiAyLjkxMDE1LC01IDYuNSwtNWMzLjU4OTg1LDAgNi41LDIuMjM4NTggNi41LDVjMCwyLjc2MTQyIC0yLjkxMDE1LDUgLTYuNSw1em0tMS4xNTQ3LC0xMC44NDU0NGMxLjEyNjQ4LC0wLjcyMDk1IDIuNTc0NzYsLTEuMTU0NTYgNC4xNTQ3LC0xLjE1NDU2YzMuNTg5ODUsMCA2LjUsMi4yMzg1OCA2LjUsNWMwLDAuOTA2MDcgLTAuMzEzMzEsMS43NTU4NSAtMC44NjExMywyLjQ4ODczYy0wLjAyMywwLjg3Njg4IDAuMDQwMywyLjc4MjcyIDAuOTQ4NTMsMy42NDIzN2MtMS4yNzM5MywwIC0yLjU3NzY5LC0wLjgwMDAzIC0zLjQwMDM4LC0xLjQyMzU3YzAuODI2MzMsLTAuOTAyODggMS4zMTI5OCwtMi4wMTA1NSAxLjMxMjk4LC0zLjIwNzUzYzAsLTMuMDM3NTcgLTMuMTM0MDEsLTUuNSAtNywtNS41Yy0wLjU3MDA1LDAgLTEuMTI0MTgsMC4wNTM1NCAtMS42NTQ3LDAuMTU0NTZ6bTAsMCIvPiA8L2c+PC9zdmc+);
    }

    .instagramArrows {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: none;
        height: 284px;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-transition: 0.32s;
        -o-transition: 0.32s;
        transition: 0.32s;
        width: 100%;
    }

    .instagramArrows span {
        height: 46px;
        width: 46px;
        background-color: black;
        opacity: 0.9;
        z-index: 2;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;
        -webkit-transition: 0.26s;
        -o-transition: 0.26s;
        transition: 0.26s;
    }

    .instagramArrows span:nth-of-type(1) {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+IDxnPiAgPHRpdGxlPmJhY2tncm91bmQ8L3RpdGxlPiAgPHJlY3QgZmlsbD0ibm9uZSIgaWQ9ImNhbnZhc19iYWNrZ3JvdW5kIiBoZWlnaHQ9IjQwMiIgd2lkdGg9IjU4MiIgeT0iLTEiIHg9Ii0xIi8+IDwvZz4gPGc+ICA8dGl0bGU+TGF5ZXIgMTwvdGl0bGU+ICA8cGF0aCBpZD0ic3ZnXzEiIGZpbGw9IiNmZmZmZmYiIGQ9Im03LjcwMSwxNC4yNzZsOS41ODYsLTkuNTg1YzAuODc5LC0wLjg3OCAyLjMxNywtMC44NzggMy4xOTUsMGwwLjgwMSwwLjhjMC44NzgsMC44NzcgMC44NzgsMi4zMTYgMCwzLjE5NGwtNy4zMTUsNy4zMTVsNy4zMTUsNy4zMTVjMC44NzgsMC44NzggMC44NzgsMi4zMTcgMCwzLjE5NGwtMC44MDEsMC44Yy0wLjg3OCwwLjg3OSAtMi4zMTYsMC44NzkgLTMuMTk1LDBsLTkuNTg2LC05LjU4N2MtMC40NzIsLTAuNDcgLTAuNjgxLC0xLjEwMiAtMC42NDcsLTEuNzIyYy0wLjAzNCwtMC42MiAwLjE3NSwtMS4yNTIgMC42NDcsLTEuNzI0eiIvPiA8L2c+PC9zdmc+);
    }

    .instagramArrows span:nth-of-type(2) {
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+IDxnPiAgPHRpdGxlPmJhY2tncm91bmQ8L3RpdGxlPiAgPHJlY3QgZmlsbD0ibm9uZSIgaWQ9ImNhbnZhc19iYWNrZ3JvdW5kIiBoZWlnaHQ9IjQwMiIgd2lkdGg9IjU4MiIgeT0iLTEiIHg9Ii0xIi8+IDwvZz4gPGc+ICA8dGl0bGU+TGF5ZXIgMTwvdGl0bGU+ICA8cGF0aCBpZD0ic3ZnXzEiIGZpbGw9IiNmZmZmZmYiIGQ9Im0yNC4yOTEsMTQuMjc2bC05LjU4NiwtOS41ODZjLTAuODc4LC0wLjg3OCAtMi4zMTcsLTAuODc4IC0zLjE5NSwwbC0wLjgsMC44Yy0wLjg3OCwwLjg3NyAtMC44NzgsMi4zMTYgMCwzLjE5NGw3LjMxNCw3LjMxNmwtNy4zMTUsNy4zMTVjLTAuODc4LDAuODc4IC0wLjg3OCwyLjMxNyAwLDMuMTk0bDAuOCwwLjhjMC44NzgsMC44NzkgMi4zMTcsMC44NzkgMy4xOTUsMGw5LjU4NiwtOS41ODdjMC40NzIsLTAuNDcxIDAuNjgyLC0xLjEwMyAwLjY0NywtMS43MjNjMC4wMzYsLTAuNjE5IC0wLjE3NCwtMS4yNTEgLTAuNjQ2LC0xLjcyM3oiLz4gPC9nPjwvc3ZnPg==);
    }

    @media (min-width: 992px) {
        .instagram-photos > div:nth-of-type(3n) .instImg {
            left: -6%;
        }

        .instagram-photos > div:nth-of-type(3n+1) .instImg {
            right: -6%;
        }

        .instagram-photos > div:nth-of-type(3n+2) .instImg {
            bottom: -6%;
        }

        .instagram-photos > div:hover .instImg {
            -webkit-transition: 0.62s ease;
            -o-transition: 0.62s ease;
            transition: 0.62s ease;
        }

        .instagram-photos > div:nth-of-type(3n):hover .instImg {
            left: -1%;
        }

        .instagram-photos > div:nth-of-type(3n+1):hover .instImg {
            right: -1%;
        }

        .instagram-photos > div:nth-of-type(3n+2):hover .instImg {
            bottom: -1%;
        }
    }

    @media (max-width: 991px) {
        .instagram-wrapper {
            overflow: hidden;
            width: 100%;
            height: 320px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: relative;
        }

        .instagram-photos {
            position: absolute;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            width: auto;
        }

        .instagram-photos > div {
            width: 250px;
            height: 250px;
            margin: 6px;
        }

        .instagram-photos .instImg {
            height: 100%;
            width: 100%;
        }

        .instagramArrows {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
    }
</style>
<!--end instagram-->



<!--scrpit modal-->
<!--<script>-->
<!--    $(function () {-->
<!--        $('[data-toggle="tooltip"]').tooltip()-->
<!--    })-->
<!---->
<!--    // Initialize popover component-->
<!--    $(function () {-->
<!--        $('[data-toggle="popover"]').popover()-->
<!--    })-->
<!--</script>-->
<!--scrpit modal-->









