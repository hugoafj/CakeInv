<div class="stocks index">
	<h2><?php echo __('Stocks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('minimo'); ?></th>
			<th><?php echo $this->Paginator->sort('maximo'); ?></th>
			<th><?php echo $this->Paginator->sort('actual'); ?></th>
			<th><?php echo $this->Paginator->sort('products_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($stocks as $stock): ?>
	<tr>
		<td><?php echo h($stock['Stock']['id']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['minimo']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['maximo']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['actual']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stock['Products']['id'], array('controller' => 'products', 'action' => 'view', $stock['Products']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stock['Stock']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stock['Stock']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stock['Stock']['id']), null, __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
