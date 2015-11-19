<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control round-form'));
		echo $this->Form->radio('gender',array('M'=>'M','F'=>'F'));
		echo $this->Form->input('zone',array('class'=>'form-control round-form'));
		echo $this->Form->input('disctrict',array('class'=>'form-control round-form'));
		echo $this->Form->input('docnr',array('class'=>'form-control round-form'));
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
