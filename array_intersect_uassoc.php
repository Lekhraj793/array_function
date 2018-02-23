<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));


//array_intersect_uassoc return same value should be same and case sensitive and key also should be same but case-insensitive

//"strcasecmp" Compare two strings (case-insensitive = HELLO and hELLo will output the same):


?>