<section class="content-header">
  <h1>
    About
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Title') ?></dt>
            <dd><?= h($about->title) ?></dd>
            <dt scope="row"><?= __('Title Vision') ?></dt>
            <dd><?= h($about->title_vision) ?></dd>
            <dt scope="row"><?= __('Title Mission') ?></dt>
            <dd><?= h($about->title_mission) ?></dd>
            <dt scope="row"><?= __('Photo') ?></dt>
            <dd><?= h($about->photo) ?></dd>
            <dt scope="row"><?= __('Photo Dir') ?></dt>
            <dd><?= h($about->photo_dir) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($about->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($about->created) ?></dd>
            <dt scope="row"><?= __('Modifield') ?></dt>
            <dd><?= h($about->modifield) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Description') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($about->description); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Vision') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($about->vision); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Mission') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($about->mission); ?>
        </div>
      </div>
    </div>
  </div>
</section>
