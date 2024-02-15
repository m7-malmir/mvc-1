<?php




$arr['name']='maamd';
$arr['id']=2;
$arr['age']=30;

$res=implode(',',array_keys($arr));
print_r($res);
