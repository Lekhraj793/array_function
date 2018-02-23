<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "brown", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);


//compare the intersection of arrays with keys. this is case-sensitive.
//mean b and B are two diffrent value.

