<div class="borrows form">
<?php echo $this->Form->create('Borrow'); ?>
	<fieldset>
		<legend><?php echo __('Edit Borrow'); ?></legend>
	<?php
		echo $this->Form->input('id',array('class'=>'form-control round-form'));
		echo $this->Form->input('retrievedate',array('class'=>'form-control round-form'));
		echo $this->Form->input('client_id',array('class'=>'form-control round-form'));
		echo $this->Form->input('film_id',array('class'=>'form-control round-form'));
                echo $this->Form->input('copies',array('class'=>'form-control round-form'));
		echo $this->Form->input('retrieved',array('class'=>'form-control round-form'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Borrow.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Borrow.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
