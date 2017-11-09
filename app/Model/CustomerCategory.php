<?php
App::uses('AppModel', 'Model');

class CustomerCategory extends AppModel
{
    /**
     * hasManyのリレーション
     *
     */
    public $hasMany = [
        'Customer' => [
            'className' => 'Customer',
            'foreignKey' => 'customer_category_id'
        ]
    ];
}