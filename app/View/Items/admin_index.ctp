<h1>Books</h1>
<table>
    <tr>
        <th>ID</th>
	<th>Image</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
    </tr>

    <?php foreach ($items as $item): ?>
    <tr>
        <td><?php echo $this->Html->link($item['Item']['id'],array('controller' => 'items', 'action' => 'view', $item['Item']['id'])); ?></td>
	<td><?php echo $this->Html->image($item['Item']['image'])?></td>
	<td><?php echo $item['Item']['title']; ?></td>
	<td><?php echo $item['Item']['author']; ?></td>
	<td><?php echo $item['Item']['price']; ?></td>
	<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $item['Item']['id'])); ?></td>
        <td><?php echo $this->Form->postLink('Delete',array('action' => 'delete', $item['Item']['id']),array('confirm' => 'Are you sure you want to delete this item?')); ?></td>
    <td>
    
    </td>
    </tr>
    <?php endforeach; ?>
</table>