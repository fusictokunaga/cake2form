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


    /**
     * バリデーション
     */

    public $validate = [
        'last_name' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
                'allowEmpty' => false,
                'message' => '入力してください'
            ]
        ],
        'first_name' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
                'allowEmpty' => false,
                'message' => '入力してください'
            ]
        ],
        'email' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
                'allowEmpty' => false,
                'message' => '入力してください'
            ]
        ]
    ];
}