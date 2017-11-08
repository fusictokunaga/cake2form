<?php

App::uses('AppController', 'Controller');

class CustomersController extends AppController {

    public function register()
    {
        if ($this->request->is('post')) {
            $this->Customer->create();
            if ($this->Customer->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'register'));
            }

            $this->Flash->error(__('Unable to add your post.'));
        }
    }
}