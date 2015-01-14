<div class="configs form">
<?php 
	echo $this->Form->create('Config'); 
	$parametro=$this->requestAction('/Configs/obtenernombreconfig/'.$idconfig);
?>
	<fieldset>
		<legend><?php echo __('Modificar '.$parametro); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('valor',array('type'=>'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar')); ?>
</div>
<?php echo $this->element('menu');?>

