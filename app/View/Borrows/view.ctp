<div class="borrows view">
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
<h2><?php echo __('Borrow'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retrievedate'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['retrievedate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrow['Client']['name'], array('controller' => 'clients', 'action' => 'view', $borrow['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrow['Film']['title'], array('controller' => 'films', 'action' => 'view', $borrow['Film']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retrieved'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['retrieved']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Borrow'), array('action' => 'edit', $borrow['Borrow']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Borrow'), array('action' => 'delete', $borrow['Borrow']['id']), array(), __('Are you sure you want to delete # %s?', $borrow['Borrow']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Films'), array('controller' => 'films', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Film'), array('controller' => 'films', 'action' => 'add')); ?> </li>
	</ul>
</div>
