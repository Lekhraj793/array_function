<?php
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "b" => "brown", "c"=>"yellow", "red");

print_r(array_uintersect_assoc($array1, $array2, "strcasecmp"));

//should be keys are same in both array.


