<?php

$userdb=Array
(
    [0] => Array
        (
            "uid" => '100',
            "name" => 'Sandra Shush',
            "url"=> 'urlof100'
        ),

    [1] => Array
        (
            "uid" => '5465',
            "name" => 'Stefanie Mcmohn',
            "pic_square" => 'urlof100'
        ),

    [2] => Array
        (
            "uid" => '40489',
            "name" => 'Michael',
            "pic_square" => 'urlof40489'
        )
);

//array_column return the value of single column in this use for return uid column. then array_search is search specific value(40489). output::-- 2; because uid=>40489 is avalable in 2nd array

$key = array_search(40489, array_column($userdb, 'uid'));
echo "<pre>";
 print_r($key);