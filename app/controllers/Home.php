<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
       $model=new User;
       $arr['name']='';
       $arr['age']='null';
      
       $res=$model->insert($arr);
        show($res);
        $this->view('home');
    }
}