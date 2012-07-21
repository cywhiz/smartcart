<h2>Search Books</h2>
<?php 
    echo $this->$form->create('Item', array('action' => 'search'));
    echo $this->$form->input("q", array('label' => 'Search for'));
    echo $this->$form->end("Search");
?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
    </tr>

	<?php foreach($results as $user) : ?>
        <tr>
        <td><?php echo $user['Item']['id'] ?></td>
        <td><?php echo $user['Item']['title'] ?></td>
        </tr>
    <?php endforeach; ?>
 </table>