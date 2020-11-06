<?php echo $this->element('site/head_site'); ?>
<body>
<div class="header-wrapper header-transparent" style="   position: -webkit-sticky; /* Necessário para funcionar no Safari */
    position: sticky;">
    <?php echo $this->element('site/header_site'); ?>
</div>


<?= $this->fetch('content') ?>




<?php echo $this->element('site/footer_site'); ?>
</body>
