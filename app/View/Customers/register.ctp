<div id="register-form">
  <h2 id="register-title">○○○○○申込み</h2>

  <div>
    <table class="table">
      <thead>
        <tr>
          <th>
            2. お申込み人情報
            <br/>
            (1) 本人について
          </th>
          <td>
          </td>
        </tr>
      </thead>
      <tr>
        <th id="register-table-th">
          お名前(漢字) (*必須)
        </th>
        <td id="register-table-td">
          <div id="beside-object">
                <label>姓</label>
                <?= $this->Form->input('last_name', ['label' => false]); ?>
          </div>
          <div id="beside-object">
                <label>名</label>
                <?= $this->Form->input('first_name', ['label' => false]); ?>
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
            <?= $this->Form->input('last_name_kana', ['label' => false]); ?>
          </div>
          <div id="beside-object">
            <label>メイ</label>
            <?= $this->Form->input('first_name_kana', ['label' => false]); ?>
          </div>
          <br/>
          例）シマ タロウ
        </td>
      </tr>
      <tr>
        <th id="register-table-th">
          性別 (*必須)
        </th>
        <td id="register-table-td">
          <?= $this->Form->radio('gender', ['label' => false]); ?>
        </td>
      </tr>
    </table>
  </div>
  <div id="submit-button">
    <?= $this->Form->button('確認'); ?>
  </div>
  <?= $this->Form->end(); ?>
</div>
