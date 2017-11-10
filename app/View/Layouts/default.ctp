<!DOCTYPE html>
<html>
  <head>
	<?= $this->Html->charset() ?>
	<title>
	  <?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>

	<!--システム独自のcss-->
	<?= $this->element('css') ?>
	<!--外部から取得したcss-->
	<?= $this->Html->css('jQuery/validationEngine.jquery.css') ?>

	<?= $this->fetch('meta') ?>

  </head>
  <body>

    <div id="Header">
	</div>

    <div class="container">
	  <?= $this->Flash->render() ?>
	  <?= $this->fetch('content'); ?>

	  <!--外部から取得したjs-->
	  <!--リアルタイムバリデーションのためにも、こちらを先に定義しないとエラーが発生-->
	  <?= $this->Html->script('jQuery/jquery-1.8.2.min.js') ?>
	  <?= $this->Html->script('jQuery/jquery.validationEngine.js') ?>
	  <?= $this->Html->script('jQuery/jquery.validationEngine-ja.js') ?>
	  <!--システム独自のjs-->
	  <?= $this->element('js') ?>

    </div>
  </body>
</html>