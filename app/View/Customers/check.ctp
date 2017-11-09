<div id="register-form">
  <h2 id="register-title">○○○○○申込み 確認画面</h2>

  <table class="table">
    <tr>
      <th id="register-table-th">
        お名前(漢字)
      </th>
      <td id="register-table-td">
        <?= $data['last_name'] . $data['first_name']; ?>
      </td>
    </tr>
    <tr>
      <th id="register-table-th">
        お名前(フリガナ)
      </th>
      <td id="register-table-td">
        <?= h($data['last_name_kana']); ?>
        <?= h($data['first_name_kana']); ?>
      </td>
    </tr>
    <tr>
      <th id="register-table-th">
        生年月日
      </th>
      <td id="register-table-td">
        <?= $data['birthday']; ?>
      </td>
    </tr>
    <tr>
      <th id="register-table-th">
        番号
      </th>
      <td id="register-table-td">
        <?= $data['number']; ?>
      </td>
    </tr>
    <tr>
      <th id="register-table-th">
        携帯電話
      </th>
      <td id="register-table-td">
        <?= $data['mobile_phone1'] . '-' . $data['mobile_phone2'] . '-' . $data['mobile_phone3']; ?>
      </td>
    </tr>
    <tr>
      <th id="register-table-th">
        自宅携帯電話
      </th>
      <td id="register-table-td">
        <?= $data['home_phone1'] . '-' . $data['home_phone2'] . '-' . $data['home_phone3']; ?>
      </td>
    </tr>
    <tr>
      <th id="register-table-th">
        メールアドレス
      </th>
      <td id="register-table-td">
        <?= $data['email']; ?>
      </td>
    </tr>

  </table>
</div>

<div id="submit-button">
  <?= $this->Form->create('Customer'); ?>
  <?= $this->Form->button('修正', ['controller' => 'customers', 'action' => 'register'], ['id' => 'beside-object']); ?>
  <?= $this->Form->end(['label' => '送信する', 'id' => 'beside-object']); ?>
</div>