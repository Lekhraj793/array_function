<?php
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);

//compare the intersect values of array. we compare the value of array1 against to array2.
//output:- Array ( [a] => green [0] => red )