<?php
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
//array_diff use the diffrent values or compare array.

print_r($result);

//compare $array1 to against $aaray2 by array_diff function then $array1 values not exist in $array2 is print.
?>