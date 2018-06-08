<?php

namespace App\Controller;

use App\Controller\AppController;

class WebsiteController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Users');
    }

    public function register()
    {

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'register']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }

        $schools = $this->Users->Schools->find('list', ['limit' => 200]);

        $this->set('user', $user);
        $this->set('class', 'cadastro');
        $this->set(compact('schools'));
    }

    public function login()
    {

        $this->set('class', 'home');


    }

    public function profile()
    {
        $this->set('class', 'student-profile');
    }

    public function dashboard()
    {
        $this->set('class', 'dashboard');
    }

    public function quiz()
    {
        $this->set('class', 'quiz');
    }
}
