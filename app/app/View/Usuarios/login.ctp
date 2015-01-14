<div class="usuarios form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Usuario'); ?>
    <fieldset>
        <legend>
            <?php echo __('Login'); ?>
        </legend>
        <?php echo $this->Form->input('email',array('label'=>'Email'));
        echo $this->Form->input('pass',array('label'=>'Password','type'=>'password'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Entrar')); ?>
</div>