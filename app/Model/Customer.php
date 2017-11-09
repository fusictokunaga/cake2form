<?php
  App::uses('AppModel', 'Model');

class Customer extends AppModel
{
    /**
     * belongsToのリレーション
     *
     */

    public $belongsOTo = [
        'CustomerCategory' => [
            'className' => 'CustomerCategory',
            'foreignKey' => 'customer_category_id'
        ]
    ];
}