<h2>Shopping Cart</h2>

<?php
    if (isset($cart)) { 
    $total = 0;
?>

<form action="/smartcart/cart/update" method="post">
<table>
    <tr>
        <th></th>
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Quantity</th>
        <th>Unit Price</th>
    </tr>

    <?php foreach ($cart as $id => $quantity): ?>
    <tr>
        <?php
            $this->Item = ClassRegistry::init('Item');
            $item = $this->Item->find('all', array('conditions' => array('Item.id' => $id)));
            $image = $item[0]['Item']['image'];
            $title = $item[0]['Item']['title'];
            $price = $item[0]['Item']['price'];
            $hst = 0.13;
            $total += $price * $quantity;
        ?>
    
        <td><?php echo $this->Html->link('Remove', array('controller' => 'cart', 'action' => 'remove', $id)); ?></td>
        <td><?php echo $this->Html->link($id, array('controller' => 'items', 'action' => 'view', $id)); ?></td>
        <td><?php echo $this->Html->image($image)?></td>
        <td><?php echo $title; ?></td>
        <td><input type="text" name="quantity<?php echo $id; ?>" value="<?php echo $quantity; ?>" size="5" /></td>
        <td><?php echo $this->Number->currency($price); ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Subtotal:</td>
        <td><?php echo $this->Number->currency($total); ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Discount:</td>
        <td>
        <?php
            if (($total - $coupon) <= 0) {
                $coupon = $total;
                $total = 0;
            }
            else
                $total -= $coupon;
            echo $this->Number->currency($coupon);
         ?>
         </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>HST (13%):</td>
        <td><?php echo $this->Number->currency($total*$hst); ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><h2>TOTAL:</h2></td>
        <td><h2><?php echo $this->Number->currency($total*(1+$hst)); ?></h2></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $this->Html->Link("Empty cart", array('controller' => 'cart', 'action' => 'clear')); ?></td>
        <td><?php echo $this->Html->image("checkout.gif", array('url' => array('controller' => 'cart', 'action' => 'checkout'))); ?></td>
    </tr>
</table>

<div class="coupon">
Coupon code: <input type="text" name="coupon" />
<input type="submit" value="Update cart" />
</div>
</form>
<?php } ?>