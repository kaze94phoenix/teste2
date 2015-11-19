<div class="films form">
<?php echo $this->Form->create('Film'); ?>
	<fieldset>
		<legend><?php echo __('Add Film'); ?></legend>
	<?php
		echo $this->Form->input('title',array('class'=>'form-control round-form'));
		echo $this->Form->input('sinopse',array('class'=>'form-control round-form'));
		echo $this->Form->input('category',array('class'=>'form-control round-form'));
		echo $this->Form->input('actor',array('class'=>'form-control round-form'));
		echo $this->Form->input('author',array('class'=>'form-control round-form'));
		echo $this->Form->input('status_id',array('class'=>'form-control round-form'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'),array('class'=>'btn btn-round btn-default', 'type'=>'button')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index'),array('class'=>'btn btn-round btn-primary', 'type'=>'button')); ?></li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('controller' => 'borrows', 'action' => 'index'),array('class'=>'btn btn-round btn-primary', 'type'=>'button')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'borrows', 'action' => 'add'),array('class'=>'btn btn-round btn-primary', 'type'=>'button')); ?> </li>
	</ul>
</div>
