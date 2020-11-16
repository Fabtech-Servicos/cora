<!-- .container start -->
<div class="container">
    <!-- .row start -->
    <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="feature-box style-2">
                    <div class="feature-body" style="background: #fff; color: #333">
                        <div class="t">
                            <img class="bg-all2"  style=" width: 100%" src="<?= "/files/Blog/photo/" . $post->photo ?>">
                            <!--                            -moz-available firefox-->
                        </div>
                        <div class="post-name">
                            <h4 style="color: #333"><?= $post->title ?></h4>
                        </div>
                        <div class="post-date" style="margin-bottom: 10px">
                            <span style="font-style: italic; color: #0084ca"><?= $post->date ?> | <?= $post->signature ?></span>
                        </div>
                        <div class="post-body">
                            <span class="desc-blog-front"> <?= $post->description ?></span>
                        </div>

                    </div><!-- .feature-body end -->
                </div><!-- .feature-box-end -->
            </div><!-- .col-md-6 end -->
    </div><!-- .container end -->

</div>
<!--    end blog-->
