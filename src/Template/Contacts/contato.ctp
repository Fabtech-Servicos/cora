<?php $this->assign('title', 'Contato - '); ?>
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <h1 style="color: #f7f7f7;
    text-shadow: 2px 2px #000;"><span></span>Contato</h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
            <!-- .col-md-6 start -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

'<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">'
                <div class="custom-heading">
                    <h2>Fale Conosco</h2>
                </div><!-- .custom-heading end -->
                             <!-- .contact-form start -->
                <div class="contact-form">
                    <?php echo $this->Form->create()?>
                    <div class="wpcf7">
                        <div class="form-group">
                            <label>
                                <span class="required">*</span> Nome Completo:
                            </label>
                            <input name="name" type="text" class="wpcf7-text form-control" id="contact-name">
                        </div>

                        <div class="form-group">
                            <label>
                                <span class="required">*</span> Email:
                            </label>

                            <input name="email" class="wpcf7-text form-control" type="email" id="contact-email">
                        </div>

                        <div class="form-group wpcf7-message">
                            <label>
                                <span class="required">*</span> Mensagem:
                            </label>
                            <textarea name="msg" class="wpcf7-textarea form-control" id="contact-message"
                                      rows="4"></textarea>
                        </div>

                        <div id="recaptcha_response" class="g-recaptcha" data-sitekey="YOUR SITE KEY"></div>

                        <input type="submit" class="wpcf7-submit btn btn-primary float-right comment-reply"
                               value="Enviar"/>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div><!-- .comment-form end -->
            </div><!-- .col-md-8 end -->

            <aside class="col-md-4 col-xs-12 aside">
                <ul class="aside-widgets">

                    <!-- .widget.widget-text start -->
                    <li class="widget widget-text">
                        <div class="quote style-3">
                            <div class="feature-body">
                                        <span class="icon-container triggerAnimation animated" data-animate='zoomIn'>
                                            <img src="/images/svg/email.svg" class="img-responsive"
                                                 alt="cordless screw driver icon"/>
                                        </span>
                                <div class="custom-heading style-1">
                                    <a href="contact.html">
                                        <h4>Alguma dúvida?</h4>
                                    </a>
                                </div><!-- .custom-heading end -->
                                <p>
                                    Por favor entre em contato
                                </p>
                            </div><!-- .feature-body end -->
                        </div>
                    </li><!-- .widget-text end -->
                    <li class="widget widget-text">
                        <div class="title">
                            <h2>Dados & Insights</h2>
                        </div>
                        <ul>
                            <li class="strong-item" style="background-color: #222222 !important;">
                                        <span class="icon-container">
                                            <img src="/images/svg/email.svg" class="img-responsive" alt="email icon"/>
                                        </span>
                                Email: contato@dadoseinsights.com.br
                            </li>
                            <li class="strong-item" style="background-color: #222222 !important;">
                                        <span class="icon-container">
                                            <img  style="background-color: #000 !important;" src="/images/svg/telefone.svg" class="img-responsive" alt="email icon"/>
                                        </span>
                                Telefone: (79) 99896-7722
                            </li>
                        </ul>

                    </li><!-- .widget.widget-text end -->

                </ul><!-- .aside-widgets end -->
            </aside><!-- .aside end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
    
</div><!-- .page-content end -->


<!--<div class="eltdf-comment-form" style="margin:8%">-->
<!--    <div class="eltdf-comment-form-inner">-->
<!--            <div id="respond" class="comment-respond">-->
<!--                <h4 id="reply-title" class="comment-reply-title">Entre em contato conosco</h4>-->
<!--                --><?php //echo $this->Form->create() ?>
<!--                    <input id="name" name="name" placeholder="Seu Nome" type="text" value="" aria-required='true'/>-->
<!--                    <input id="email" name="email" placeholder="Email" type="text" value="" aria-required='true'/>-->
<!--                    <textarea id="msg" placeholder="Sua Mensagem" name="msg" cols="15" rows="5" aria-required="true"></textarea>-->
<!--                    <p class="form-submit"><input name="submit" type="submit" id="submit_comment" class="submit" value="Enviar"/> </p>-->
<!--                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">-->
<!--                --><?php //echo $this->Form->end(); ?>
<!--            </div>-->
<!--    </div>-->
<!--</div>-->




