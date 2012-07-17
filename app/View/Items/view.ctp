<h1><?php echo h($item['Item']['title']); ?></h1>

<?php echo $this->Html->image($item['Item']['image'])?>
<?php echo "ID = ".h($item['Item']['id']); ?>
<?php echo "Author: ".h($item['Item']['author']); ?>
<?php echo "Price = ".h($item['Item']['price']); ?>
