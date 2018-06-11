<?php

namespace App\Controller;

use App\Controller\AppController;

class WebsiteController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Users');
        $this->loadModel('Schools');
        $this->loadModel('Answers');
        $this->loadModel('Questions');
    }

    public function register()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Conta criada com sucesso.'));

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
            $this->Flash->error('Usuário ou senha incorretos.');
        }
        $this->set('class', 'home');
    }

  /**
     * logout Logout
     * @return \Cake\Http\Response|null
     */
    public function logout()
    {
        $this->Flash->success('Você está desconectado agora.');

        return $this->redirect($this->Auth->logout());
    }

    public function profile($id = null)
    {
        $profile = $this->Users->find()->where(['id' => $id])->first();
        $school = $this->Schools->find()->where(['id' => $profile['school_id']])->first();

        $this->set(compact('profile', 'school'));
        $this->set('class', 'student-profile');
    }

    public function dashboard()
    {
        $schools = $this->Schools->find()->limit(3);
        $users = $this->Users->find()->where(['id !=' => $this->Auth->user('id')])->limit(5);

        $this->set(compact('schools', 'users'));
        $this->set('class', 'dashboard');
    }

    public function quiz()
    {
        $questions = $this->Questions->find('all')->contain('Answers')->limit(10);

        $this->set(compact('questions'));
        $this->set('class', 'quiz');
    }

    public function result()
    {
        $this->set('class', 'result');
    }
}
