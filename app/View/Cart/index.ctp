<h1>Shopping Cart</h1>

<table>
    <tr>
        <th width="80">ITEM</th>
        <th width="80">PRICE</th>
        <th width="80">QUANTITY</th>
        <th width="80">SUBTOTAL</th>
    </tr>
    <?php foreach ($items as $item): ?>
    <tr>
        <td><?php echo $this->Html->image($item['Item']['image']); ?></td>
        <td><?php echo $this->Html->link($item['Item']['title'], array('controller' => 'item', 'action' => 'view')); ?></td>
        <td><?php echo $item['Product']['price']; ?></td>
        <!-- <td><?php echo $this->Form->input('quantity-' . $item['Item']['id'], array('div' => false, 'class' => 'numeric', 'label' => false, 'size' => 2, 'maxlength' => 2, 'value' => $item['quantity'])); ?></td> -->
        <td><?php echo $item['subtotal']; ?></td>
        <td><?php echo $item['Item']['id']; ?>"></td>
    </tr>
    <?php endforeach; ?>
</table>