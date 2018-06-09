<?php

namespace App\Controller;

use App\Controller\AppController;

class WebsiteController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        // $this->Auth->allow(['logout']); // Allow only logout
        $this->loadModel('Users');
    }

    public function register()
    {

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Não foi possível adicionar o usuário.'));
        }

        $schools = $this->Users->Schools->find('list', ['limit' => 200]);

        $this->set('user', $user);
        $this->set('class', 'cadastro');
        $this->set(compact('schools'));
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
        $this->set('class', 'home');

    }

  /**
     * logout Logout
     * @return \Cake\Http\Response|null
     */
    public function logout()
    {
        $this->Flash->success('You are now logged out.');

        return $this->redirect($this->Auth->logout());
    }

    public function profile()
    {
        $this->set('class', 'student-profile');
    }

    public function dashboard()
    {
        $schools = $this->Users->Schools->find()->limit(3); // TODO: fix the query
        $users = $this->Users->find(); // TODO: fix the query

        $this->set(compact('schools', 'users'));
        $this->set('class', 'dashboard');
    }

    public function quiz()
    {
        $this->set('class', 'quiz');
    }
}
