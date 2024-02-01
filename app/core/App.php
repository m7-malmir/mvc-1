<?php


class App{

  private  function splitURL(){
        $URL=$_GET['url'] ?? 'home';
        $URL=explode("/", $URL);
        return $URL;
    }
public  function loadController(){
        $URL=$this->splitURL();

       
    }
}

