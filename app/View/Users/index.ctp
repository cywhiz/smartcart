<h1>Users</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
	<td><?php echo $user['User']['id']; ?></td>
  
	<td><?php echo $user['User']['username']; ?></td>
	<td><?php echo $user['User']['password']; ?></td>
  <td><?php echo $user['User']['created']; ?></td>
  <td><?php echo $user['User']['modified']; ?></td>
  <td>
    </tr>
    <?php endforeach; ?>
<?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add')); ?>
</table>