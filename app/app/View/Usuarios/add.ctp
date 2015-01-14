<div class="usuarios form">
<?php 
	echo $this->Form->create('Usuario'); 

	$pass=$this->requestAction('/Configs/obtenerval/password default');
?>
	<fieldset>
		<legend><?php echo __('Nuevo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('email');
		echo $this->Form->input('pass',array('Label'=>'Contraseña','type'=>'password','value'=>$pass));
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<?php echo $this->element('menu');?>



