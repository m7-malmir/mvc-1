<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
       //$model=new User;
    //    $arr['name']='mmm';
    //    $arr['age']=99;
      
    //    $res=$model->insert($arr);
    show('from the index function');
        $this->view('home');
    }
    public function edit($a = '', $b = '', $c = '')
    {
        show('from the edit function');
        $this->view('home');
    }
}