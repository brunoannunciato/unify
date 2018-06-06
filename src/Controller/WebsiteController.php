<?php

namespace App\Controller;

use App\Controller\AppController;

class WebsiteController extends AppController
{
    public function register()
    {
        $this->set('class', 'cadastro');
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
