<?php

class Signup 
{
    use Controller;
    public function index()
    {
        $user=new User;
if($user->validate($_POST)){
      $user->insert($_POST);
       redirect('home');
}
        $this->view('signup');
    }
    // public function edit($a = '', $b = '', $c = '')
    // {
    //     show('from the edit function');
    //     $this->view('home');
    // }
}