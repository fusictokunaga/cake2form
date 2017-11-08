<?php

App::uses('AppController', 'Controller');

class CustomersController extends AppController
{

    public function register()
    {
        if (!$this->request->is('post') || !$this->request->data) {
            return;
        }

        $this->Customer->set($this->request->data);

        switch ($this->request->data['confirm']) {
            case 'confirm':
                $data = $this->request->data['Customer'];
                $this->set(compact('data'));
                $this->render('check');
                break;
            case 'send':
                $this->Customer->create();
                if ($this->Customer->save($this->request->data)) {
                    $this->Flash->success(__('Your post has been saved.'));
                    return $this->redirect(array('action' => 'register'));
                }

                $this->Flash->error(__('Unable to add your post.'));
                break;
        }
    }
}