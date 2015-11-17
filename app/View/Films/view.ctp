<div class="films view">
    <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>First Name</th>
		                              <th>Last Name</th>
		                              <th>Username</th>
		                          </tr>
		                          </thead>
		                          <tbody>
		                          <tr>
		                              <td>1</td>
		                              <td>Mark</td>
		                              <td>Otto</td>
		                              <td>@mdo</td>
		                          </tr>
		                          <tr>
		                              <td>2</td>
		                              <td>Jacob</td>
		                              <td>Thornton</td>
		                              <td>@fat</td>
		                          </tr>
		                          <tr>
		                              <td>3</td>
		                              <td>Larry</td>
		                              <td>the Bird</td>
		                              <td>@twitter</td>
		                          </tr>
		                          </tbody>
		                      </table>
	                  	  </div>
<h2><?php echo __('Film'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($film['Film']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($film['Film']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinopse'); ?></dt>
		<dd>
			<?php echo h($film['Film']['sinopse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($film['Film']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actor'); ?></dt>
		<dd>
			<?php echo h($film['Film']['actor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($film['Film']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Id'); ?></dt>
		<dd>
			<?php echo h($film['Film']['status_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Film'), array('action' => 'edit', $film['Film']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Film'), array('action' => 'delete', $film['Film']['id']), array(), __('Are you sure you want to delete # %s?', $film['Film']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('controller' => 'borrows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'borrows', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Borrows'); ?></h3>
	<?php if (!empty($film['Borrow'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Retrievedate'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Film Id'); ?></th>
		<th><?php echo __('Retrieved'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($film['Borrow'] as $borrow): ?>
		<tr>
			<td><?php echo $borrow['id']; ?></td>
			<td><?php echo $borrow['retrievedate']; ?></td>
			<td><?php echo $borrow['client_id']; ?></td>
			<td><?php echo $borrow['film_id']; ?></td>
			<td><?php echo $borrow['retrieved']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'borrows', 'action' => 'view', $borrow['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'borrows', 'action' => 'edit', $borrow['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'borrows', 'action' => 'delete', $borrow['id']), array(), __('Are you sure you want to delete # %s?', $borrow['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'borrows', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
