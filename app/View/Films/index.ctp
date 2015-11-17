<div class="films index">
    <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i><?php echo __('Films'); ?></h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		        <th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('sinopse'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('actor'); ?></th>
			<th><?php echo $this->Paginator->sort('author'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		                          </tr>
		                          </thead>
		                          <tbody>
	<?php foreach ($films as $film): ?>
	<tr>
		<td><?php echo h($film['Film']['id']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['title']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['sinopse']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['category']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['actor']); ?>&nbsp;</td>
		<td><?php echo h($film['Film']['author']); ?>&nbsp;</td>
		<td><?php echo h($film['Status']['designation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $film['Film']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $film['Film']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $film['Film']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $film['Film']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
		                      </table>
	                  	  </div>
	<div>
        <span class="badge bg-success"><?php echo $bons?> Bons</span>
        <span class="badge bg-warning"><?php echo $razoaveis?> Razoaveis</span>
        <span class="badge bg-important"><?php echo $maus?> Maus</span>
	</div>
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
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('controller' => 'borrows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'borrows', 'action' => 'add')); ?> </li>
	</ul>
</div>
