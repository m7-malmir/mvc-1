<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path = '../app/models/';

    include $path.$className.'.php';
}
require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';


