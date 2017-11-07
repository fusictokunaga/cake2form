<!DOCTYPE html>
<html>
  <head>
	<?= $this->Html->charset() ?>
	<title>
	  <?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>
	<?= $this->fetch('meta') ?>
	<?= $this->Html->css('boostrap/bootstrap.css') ?>
	<?= $this->Html->css('boostrap/bootstrap.min.css') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
  </head>
  <body>

    <div id="Header">
	</div>

    <div class="container">
	  <?= $this->Flash->render() ?>
	  <?= $this->fetch('content'); ?>
    </div>
  </body>
</html>