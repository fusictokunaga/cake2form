<table class="table">
  <tr>
    <th>お名前(漢字)</th>
    <td><?= h($data['last_name']); ?></td>
  </tr>
</table>

        <?php
                echo $this->Form->create('Customer');

                foreach ($this->request->data['Customer'] as $name => $val) {
                echo $this->Form->hidden($name, array('value' => $val));
                }

                echo $this->Form->button('修正する', array(
                'type' => 'submit',
                'name' => 'confirm',
                'value' => 'revise'
                ));

                echo $this->Form->button('送信する', array(
                'type' => 'submit',
                'name' => 'confirm',
                'value' => 'send'
                ));

                echo $this->Form->end();
        ?>