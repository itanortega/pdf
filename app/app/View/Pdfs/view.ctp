<div class="pdfs view">
<h2><?php echo __('Pdf'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pdf['Pdf']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pdf['Usuario']['email'], array('controller' => 'usuarios', 'action' => 'view', $pdf['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($pdf['Pdf']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($pdf['Pdf']['ubicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pdf['Pdf']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pdf['Pdf']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pdf'), array('action' => 'edit', $pdf['Pdf']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pdf'), array('action' => 'delete', $pdf['Pdf']['id']), array(), __('Are you sure you want to delete # %s?', $pdf['Pdf']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pdfs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pdf'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
