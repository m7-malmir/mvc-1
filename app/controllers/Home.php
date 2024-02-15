<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
       $model=new Model;
    //    $arr['id']=1;
       $arr['name']='mamad';
       $res=$model->where($arr);
       show($res);
        $this->view('home');
    }
}