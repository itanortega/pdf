<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Cambiar Password'); ?></legend>
	<?php
		echo $this->Form->input('passold',array('label'=>'Contrase&nacute;a antigua:','type'=>'password')); 
		echo $this->Form->input('pass',array('label'=>'Contrase&nacute;a Nueva:','type'=>'password'));        
		echo $this->Form->input('confirmacion',array('label'=>'Confirmaci&oacute;n:','type'=>'password'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cambiar password')); ?>
</div>
<?php echo $this->element('menu');?>