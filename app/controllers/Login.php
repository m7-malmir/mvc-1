<?php

class Login 
{
    use Controller;
    public function index()
    {
        $this->view('login');
    }
    // public function edit($a = '', $b = '', $c = '')
    // {
    //     show('from the edit function');
    //     $this->view('home');
    // }
}