<h1>Edit Item</h1>
<?php
echo $this->Form->create('Item', array('action' => 'edit'));
echo $this->Form->input('title');
echo $this->Form->input('author');
echo $this->Form->input('price');
echo $this->Form->input('image');
echo $this->Form->end('Update');
?>