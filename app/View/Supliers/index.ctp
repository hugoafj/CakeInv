<div class="supliers index">
	<h2><?php echo __('Supliers'); ?></h2>
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
	foreach ($supliers as $suplier): ?>
	<tr>
		<td><?php echo h($suplier['Suplier']['id']); ?>&nbsp;</td>
		<td><?php echo h($suplier['Suplier']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($suplier['Suplier']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($suplier['Suplier']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($suplier['Suplier']['rfc']); ?>&nbsp;</td>
		<td><?php echo h($suplier['Suplier']['ciudad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $suplier['Suplier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $suplier['Suplier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $suplier['Suplier']['id']), null, __('Are you sure you want to delete # %s?', $suplier['Suplier']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Suplier'), array('action' => 'add')); ?></li>
	</ul>
</div>
