<div id="register-form">
  <h2 id="register-title"><?= $customerCategory['CustomerCategory']['name'] ?>フォーム</h2>

  <div id="explanation-text">
    申込者本人が記入してください。
    <br/>
    <br/>
    後日、連絡します。
  </div>
  <?= $this->Form->create('Customer') ?>
  <?= $this->Form->hidden('customer_category_id', ['value' => $customerCategory['CustomerCategory']['id']]) ?>
  <div>
    <table class="table">
      <tr>
        <th id="register-table-th">
          お名前(漢字) (*必須)
        </th>
        <td id="register-table-td">
          <div id="beside-object">
            <label>姓</label>
              <?= $this->Form->input('last_name', ['label' => false, 'type' => 'text']); ?>
          </div>
          <div id="beside-object">
            <label>名</label>
              <?= $this->Form->input('first_name', ['label' => false, 'type' => 'text']); ?>
          </div>
          <br/>
          例）島 太郎
        </td>
      </tr>
      <tr>
        <th id="register-table-th">
          お名前(フリガナ) (*必須)
        </th>
        <td id="register-table-td">
          <div id="beside-object">
            <label>セイ</label>
              <?= $this->Form->input('last_name_kana', ['label' => false, 'type' => 'text']); ?>
          </div>
          <div id="beside-object">
            <label>メイ</label>
              <?= $this->Form->input('first_name_kana', ['label' => false, 'type' => 'text']); ?>
          </div>
          <br/>
          例）シマ タロウ
        </td>
      </tr>
      <tr>
        <th id="register-table-th">
          生年月日 (*必須)
        </th>
        <td id="register-table-td">
          <?= $this->Form->input('birthday', ['label' => false, 'type' => 'text']); ?>
        </td>
      </tr>
      <tr>
        <th id="register-table-th">
          番号 (*必須)
        </th>
        <td id="register-table-td">
          <?= $this->Form->input('number', ['label' => false, 'type' => 'text']); ?>
        </td>
      </tr>
    </table>
    <div>
       携帯電話、自宅電話番号のいずれかは必ず入力
    </div>
    <table class="table">
      <tr>
        <th id="register-table-th">
          携帯番号
        </th>
        <td id="register-table-td">
          <div id="beside-object">
            <?= $this->Form->input('mobile_phone1', ['label' => false, 'type' => 'text']); ?>
          </div>
          <div id="beside-object">-</div>
          <div id="beside-object">
            <?= $this->Form->input('mobile_phone2', ['label' => false, 'type' => 'text']); ?>
          </div>
          <div id="beside-object">-</div>
          <div id="beside-object">
            <?= $this->Form->input('mobile_phone3', ['label' => false, 'type' => 'text']); ?>
          </div>
        </td>
      </tr>
      <tr>
        <th id="register-table-th">
          自宅電話番号
        </th>
        <td id="register-table-td">
          <div id="beside-object">
            <?= $this->Form->input('home_phone1', ['label' => false, 'type' => 'text']); ?>
          </div>
          <div id="beside-object">-</div>
          <div id="beside-object">
            <?= $this->Form->input('home_phone2', ['label' => false, 'type' => 'text']); ?>
          </div>
          <div id="beside-object">-</div>
          <div id="beside-object">
            <?= $this->Form->input('home_phone3', ['label' => false, 'type' => 'text']); ?>
          </div>
        </td>
      </tr>
      <tr>
        <th id="register-table-th">
          メールアドレス
        </th>
        <td id="register-table-td">
          <?= $this->Form->input('email', ['label' => false, 'type' => 'text']); ?>
        </td>
      </tr>
      <tr>
        <th id="register-table-th">
          メールアドレス (確認用)
        </th>
        <td id="register-table-td">
          <?= $this->Form->input('email_check', ['label' => false, 'type' => 'text']); ?>
        </td>
      </tr>
    </table>
  </div>
  <div id="submit-button">
    <?= $this->Form->button('確認', array(
      'type' => 'submit',
      'name' => 'confirm',
      'value' => 'confirm'
    )); ?>
    <?= $this->Form->end(); ?>
  </div>
</div>
