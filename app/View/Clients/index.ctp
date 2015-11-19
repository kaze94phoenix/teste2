<div class="clients index">
    <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i><?php echo __('Clients'); ?></h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('zone'); ?></th>
			<th><?php echo $this->Paginator->sort('disctrict'); ?></th>
			<th><?php echo $this->Paginator->sort('docnr'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['gender']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['zone']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['disctrict']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['docnr']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $client['Client']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
		                      </table>
	                  	  </div>
	<h2><?php echo __('Clients'); ?></h2>
	
	
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add'),array('class'=>'btn btn-round btn-primary', 'type'=>'button')); ?></li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('controller' => 'borrows', 'action' => 'index'),array('class'=>'btn btn-round btn-primary', 'type'=>'button')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'borrows', 'action' => 'add'),array('class'=>'btn btn-round btn-primary', 'type'=>'button')); ?> </li>
	</ul>
</div>
