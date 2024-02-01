<?php

class Home extends Controller{
    public function index(){
        echo 'this ia home controller';
    }
}
$home=new Home;
$home->index();