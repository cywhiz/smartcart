<h2>Admin Panel</h2>
<p><?php echo $this->Html->link('Add user', array('controller' => 'users', 'action' => 'add')); ?></p>
<p><?php echo $this->Html->link('Add item', array('controller' => 'items', 'action' => 'add')); ?></p>
<p><?php echo $this->Html->link('Modify/delete items', array('controller' => 'items', 'action' => 'admin_index')); ?></p>
<p><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></p>