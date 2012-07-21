<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php echo $this->Html->css('cake.generic'); ?>
</head>
<body>
	<div id="container">
		<div id="header">
            <?php echo $this->Html->image('logo.png'); ?><br /><br />
            <?php echo $this->Html->link('View Books', array('controller' => 'items', 'action' => 'index')); ?> | 
            <?php echo $this->Html->link('Cart', array('controller' => 'cart', 'action' => 'index')); ?> | 
            <?php echo $this->Html->link('Admin Panel', array('controller' => 'users', 'action' => 'index')); ?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo "&copy SmartCart 2012."; ?>
		</div>
	</div>
</body>
</html>
