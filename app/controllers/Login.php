<?php

class Login 
{
    use Controller;
    public function index()
    {
        $data=[];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            if ($user->validate($_POST)) {
                $user->insert($_POST);
                //redirect('signup');
            }
            $data['errors'] = $user->errors;
        }
        $this->view('login');
    }
    // public function edit($a = '', $b = '', $c = '')
    // {
    //     show('from the edit function');
    //     $this->view('home');
    // }
}