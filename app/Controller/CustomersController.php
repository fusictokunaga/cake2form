<?php

App::uses('AppController', 'Controller');

class CustomersController extends AppController
{

    public $components = array('Transition.Transition');

    /**
     * 各申込への入り口
     *
     */
    public function index()
    {

    }

    /**
     *申込フォーム入力
     *
     */
    public function register()
    {
        //customerCategoriesテーブル
        $customerCategories = ClassRegistry::init('CustomerCategory');

       $customerCategoryId = $this->passedArgs['customer_category'];
       $customerCategory = $customerCategories->findById($customerCategoryId);

       $this->set(compact('customerCategory'));

        $this->Transition->checkData('check');
    }

    /**
     * 入力されたデータをチェック
     *
     */
    public function check()
    {
        $this->Transition->automate(
            'register', // 前のアクション
            'submit',   // 次のアクション
            'Customer'
        );

        $this->set('data', $this->Transition->mergedData()['Customer']);

    }

    public function submit()
    {
        $this->Transition->checkPrev([
            'register',
            'check'
        ]);

        $customerData = $this->Transition->mergedData();

        $this->Customer->create();
        if ($this->Customer->save($customerData)) {
            $this->Transition->clearData();
            return $this->redirect(['action' => 'complete']);
        }

        $this->redirect(['error']);
    }

    public function complete()
    {
        /**
         * //リレーション情報が取れているか確認
         * $customerCategories = ClassRegistry::init('CustomerCategory');
         * $customerCategory = $customerCategories->find();
         * debug($customerCategory);
         */

    }

    public function error()
    {

    }
}