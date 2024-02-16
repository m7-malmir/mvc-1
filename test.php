<?php

$arr=['name','age'];

$data=['name','age'];

if(!empty($arr)){
    foreach ($data as $key => $value) {
        if(!in_array($key,$arr)){
            unset($data[$key]);
        }
    }
}
data[]
print_r($arr);
