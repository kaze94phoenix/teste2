<div class="borrows index">
    <div class="content-panel">
        <?php echo $this->Form->create(array('controller'=>'borrows', 'action'=>'findperdate'));
        echo $this->Form->input('find',array('placeholder'=>'Pesquisa por data YYYY-MM-DD','class'=>'form-control round-form','type'=>'text'));
        echo $this->Form->submit('Pesquisar',array('class'=>'btn btn-round btn-default'));
        echo $this->Form->end();
        ?>
	                  	  	  <h4><i class="fa fa-angle-right"></i><?php echo __('Borrows'); ?></h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('retrievedate'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('film_id'); ?></th>
			<th><?php echo $this->Paginator->sort('retrieved'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($borrows as $borrow): ?>
	<tr>
		<td><?php echo h($borrow['Borrow']['id']); ?>&nbsp;</td>
		<td><?php echo h($borrow['Borrow']['retrievedate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($borrow['Client']['name'], array('controller' => 'clients', 'action' => 'view', $borrow['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($borrow['Film']['title'], array('controller' => 'films', 'action' => 'view', $borrow['Film']['id'])); ?>
		</td>
		<td><?php echo h($borrow['Borrow']['retrieved']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $borrow['Borrow']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $borrow['Borrow']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $borrow['Borrow']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $borrow['Borrow']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
		                      </table>
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
		<li><?php echo $this->Html->link(__('New Borrow'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
