<div id="register-form">
  <h2 id="register-title">各申込みリンク画面</h2>
  <div>
    <?= $this->Html->link('初回申込', ['action' => 'register', 'customer_category' => 1]) ?>
  </div>
  <div>
    <?= $this->Html->link('2回目申込', ['action' => 'register', 'customer_category' => 2]) ?>
  </div>
  <div>
    <?= $this->Html->link('3回以上申込', ['action' => 'register', 'customer_category' => 2]) ?>
  </div>
</div>