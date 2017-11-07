<!DOCTYPE html>
<html>
  <head>
	<?= $this->Html->charset() ?>
	<title>
	  <?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>
	<?= $this->element('css') ?>
	<?= $this->fetch('meta') ?>
  </head>
  <body>

    <div id="Header">
	</div>

    <div class="container">
	  <?= $this->Flash->render() ?>
	  <?= $this->fetch('content'); ?>
	  <?= $this->element('js') ?>
    </div>
  </body>
</html>