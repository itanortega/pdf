<div class="usuarios index">
	<h2><?php echo __('Lista de Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>E-mail</th>
			<th>Activo</th>
			<th class="actions">Acciones</th>
		</tr>
	<?php
	foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Está seguro de eliminar al usuario: %s?', $usuario['Usuario']['nombres']." ".$usuario['Usuario']['apellidos'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<?php echo $this->element('menu');?>
