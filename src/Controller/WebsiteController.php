<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class WebsiteController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Users');
        $this->loadModel('Schools');
        $this->loadModel('Answers');
        $this->loadModel('Questions');
        $this->loadModel('Scores');
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
        $id = $this->Auth->user('id');

        // $schools = $this->Schools->find()->limit(3);
        $query = "SELECT schools.id, schools.name, SUM(users.score) as score_total
        FROM schools
        INNER JOIN users ON schools.id = users.school_id
        GROUP BY schools.id
        ORDER BY score_total DESC";

        $connection = ConnectionManager::get('default');
        $schools = $connection->execute($query)->fetchAll('assoc');

        // $users = $this->Users->find()->where(['id !=' => $id])->contain('Schools')->limit(5);
        $users = $this->Users->find()->where(['Users.id !=' => $id])->contain('Schools')->toArray();

        $this->set(compact('schools', 'users'));
        $this->set('class', 'dashboard');
    }

    public function quiz()
    {
        if ($this->request->is('post')) {
            // Get the score post
            $score = $this->request->getData('score');

            // Set the user data
            $userTable = TableRegistry::get('Users');
            $user = $userTable->newEntity();
            $user = $userTable->get($this->Auth->user('id'));
            $user->score = $user->score + ($score*10);

            if ($userTable->save($user)) {
                $id = $this->Auth->user('id');
                $userData = $this->Users->find()->where(['Users.id' => $id])->contain('Schools')->first()->toArray();
                $this->Auth->setUser($userData);
                return $this->redirect(['action' => 'result']);
            }
        }

        $questions = $this->Questions->find('all')->contain('Answers')->limit(10);

        $this->set(compact('questions'));
        $this->set('class', 'quiz');
    }

    public function result()
    {
        $this->set('class', 'result');
    }

    public function site()
    {
        $this->viewBuilder()->setLayout('site');
    }
}
