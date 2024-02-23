<?php

class Home 
{
    use Controller;
    public function index()
    {
        $data['username']=empty($_SESSION['USER']) ? 'user':  $_SESSION['USER']->email;
        $this->view('home',$data);
    }
    // public function edit($a = '', $b = '', $c = '')
    // {
    //     show('from the edit function');
    //     $this->view('home');
    // }
}