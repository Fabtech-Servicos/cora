<?php $this->layout = 'AdminLTE.login'; ?>

<!-- /.box-body -->

 <img src="/images/logo.png" style="max-width: 300px; ">

    <?php echo $this->Form->create(); ?>
    <div class="box-body">
        <?php
        echo $this->Form->control('username');
        echo $this->Form->control('password');
        ?>
        <div style="margin: 0 auto;display: block; text-align: center">
        <?php echo $this->Form->button(__('Submit')); ?>
        </div>
        <?php echo $this->Form->end(); ?>

    </div>

