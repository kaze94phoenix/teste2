<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('gender');
		echo $this->Form->input('zone');
		echo $this->Form->input('disctrict');
		echo $this->Form->input('docnr');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('controller' => 'borrows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'borrows', 'action' => 'add')); ?> </li>
	</ul>
</div>
