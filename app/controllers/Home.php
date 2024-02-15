<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
       $model=new User;
    //    $arr['id']=1;
    $arr['name']='maamd';
  
    $arr['age']=30;
  
       $res=$model->insert($arr);
        show($res);
        $this->view('home');
    }
}