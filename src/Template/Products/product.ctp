<!-- .page-content start -->
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <h1>Fotos<span></span></h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<!-- .page-content start -->
<div class="page-content">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <div class="col-md-12 centered triggerAnimation animated" data-animate='fadeIn'>
                <ul class="breadcrumb filters">
                    <!--                    <li class="active"><a href="#" data-filter="*">All</a></li>-->
                    <!--                    <li><a href="#" data-filter=".interior">Interior</a></li>-->
                    <!--                    <li><a href="#" data-filter=".exterior">Exterior</a></li>-->
                    <!--                    <li><a href="#" data-filter=".remodeling">Remodeling</a></li>-->
                </ul>
            </div><!-- .col-md-12 end -->
        </div><!-- .row.gallery-filters end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<div class="page-content">
    <div class="container">
        <div class="row mb-40">
            <ul id="galleryitems" class="isotope isotopeitems-full">
                <?php foreach ($fotos as $foto): ?>
                    <li class="col-xs-6 col-md-4 isotope-item interior">
                        <figure class="gallery-item-container">
                            <div class="gallery-img">
                                <img style="max-width: 500px; width: 100%;height: 250px; object-fit: cover"
                                     src="<?= "/files/Products/photo/" . $foto->photo ?>" class="img-responsive"
                                     alt="Construction HTML Template"/>
                                <div class="hover-mask-container">
                                    <!-- .hover-zoom end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .gallery-img end -->
                        </figure><!-- .gallery-item-container end -->
                        <div class="custom-heading style-1">

                            <h4><?php echo $foto->name ?></h4>

                        </div>
                    </li><!-- .isotope-item end -->
                <?php endforeach; ?>
            </ul><!-- #galleryitems.isotope end -->
        </div><!-- .row end -->
        <div class="paginator">
            <ul class="pagination">
                <?php echo $this->Paginator->first('<< ' . __('Primeira')); ?>
                <?php echo $this->Paginator->prev('< ' . __('Anterior')); ?>
                <?php echo $this->Paginator->numbers(); ?>
                <?php echo $this->Paginator->next(__('Próximo') . ' >'); ?>
                <?php echo $this->Paginator->last(__('Última') . ' >>'); ?>
            </ul>
        </div>
    </div><!-- .container-fluid end -->
</div><!-- .page-content end -->

<!--                paginação-->


