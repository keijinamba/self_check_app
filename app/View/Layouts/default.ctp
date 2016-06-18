<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body class="<?php echo (true)? 'pc' : 'mb';?>">
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->fetch('script'); ?>
</body>
</html>
