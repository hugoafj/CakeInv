<div class="proveedores index">
	<h2><?php echo __('Proveedores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('rfc'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($proveedores as $proveedor): ?>
	<tr>
		<td><?php echo h($proveedor['Proveedor']['id']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['rfc']); ?>&nbsp;</td>
		<td><?php echo h($proveedor['Proveedor']['ciudad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proveedor['Proveedor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proveedor['Proveedor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proveedor['Proveedor']['id']), null, __('Are you sure you want to delete # %s?', $proveedor['Proveedor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('action' => 'add')); ?></li>
	</ul>
</div>
