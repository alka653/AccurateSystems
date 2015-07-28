<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>EscolApp | <?= $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= $this->Html->css(array('bootstrap.min', 'style.min')) ?>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<?= $this->Html->script(array('bootstrap.min')) ?>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?= $this->element('nav') ?>
		<?= $this->fetch('content') ?>
		<?= $this->element('footer') ?>
	</body>
</html>