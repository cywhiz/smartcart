<h2>Add Book</h2>
<?php
echo $this->Form->create('Item');
echo $this->Form->input('id');
echo $this->Form->input('title');
echo $this->Form->input('author');
echo $this->Form->input('price');
echo $this->Form->input('image');
echo $this->Form->end('Add book');
?>