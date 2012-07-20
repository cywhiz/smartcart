<h2>Your Shopping Cart</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>



    <?php 
    if (isset($cart)) {
    foreach ($cart as $id => $quantity): ?>
    <tr>
    <?php
    $this->Item = ClassRegistry::init('Item');
    $item = $this->Item->find('all', array('conditions' => array('Item.id' => $id)));
    ?>

    
        <td><?php echo $this->Html->link($item[0]['Item']['id'], array('controller' => 'items', 'action' => 'view', $item[0]['Item']['id'])); ?></td>
        <td><?php echo $this->Html->image($item[0]['Item']['image'])?></td>
        <td><?php echo $item[0]['Item']['title']; ?></td>
        <td><?php echo $quantity; ?></td>
        <td><?php echo $item[0]['Item']['price']; ?></td>
        <td><?php echo $this->Html->link('Remove', array('controller' => 'cart', 'action' => 'remove', $item[0]['Item']['id'])); ?></td>
    </tr>
    <?php endforeach;} ?>
</table>

<?php echo $this->Html->link("Empty cart", array('controller' => 'cart', 'action' => 'clear')); ?>