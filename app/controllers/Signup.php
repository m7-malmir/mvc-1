<?php

class Signup 
{
    use Controller;
    public function index()
    {
        $this->view('signup');
    }
    // public function edit($a = '', $b = '', $c = '')
    // {
    //     show('from the edit function');
    //     $this->view('home');
    // }
}