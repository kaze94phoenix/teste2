<div class="statuses view">
<h2><?php echo __('Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($status['Status']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Designation'); ?></dt>
		<dd>
			<?php echo h($status['Status']['designation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status'), array('action' => 'edit', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status'), array('action' => 'delete', $status['Status']['id']), array(), __('Are you sure you want to delete # %s?', $status['Status']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Films'); ?></h3>
	<?php if (!empty($status['Film'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Sinopse'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Actor'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($status['Film'] as $film): ?>
		<tr>
			<td><?php echo $film['id']; ?></td>
			<td><?php echo $film['title']; ?></td>
			<td><?php echo $film['sinopse']; ?></td>
			<td><?php echo $film['category']; ?></td>
			<td><?php echo $film['actor']; ?></td>
			<td><?php echo $film['author']; ?></td>
			<td><?php echo $film['status_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'films', 'action' => 'view', $film['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'films', 'action' => 'edit', $film['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'films', 'action' => 'delete', $film['id']), array(), __('Are you sure you want to delete # %s?', $film['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
