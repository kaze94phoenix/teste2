<div class="films form">
<?php echo $this->Form->create('Film'); ?>
	<fieldset>
		<legend><?php echo __('Edit Film'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title',array('class'=>'form-control round-form'));
		echo $this->Form->input('sinopse',array('class'=>'form-control round-form'));
		echo $this->Form->input('category',array('class'=>'form-control round-form'));
		echo $this->Form->input('actor',array('class'=>'form-control round-form'));
		echo $this->Form->input('author',array('class'=>'form-control round-form'));
		echo $this->Form->input('status_id',array('class'=>'form-control round-form'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Film.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Film.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('controller' => 'borrows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'borrows', 'action' => 'add')); ?> </li>
	</ul>
</div>
