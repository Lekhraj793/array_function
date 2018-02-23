<?php
$input = array(12, 10, 9);

$result = array_pad($input, 5, 2);
// result is array(12, 10, 9, 0, 0)

//$result = array_pad($input, -7, -1);
// result is array(-1, -1, -1, -1, 12, 10, 9)

//$result = array_pad($input, 2, "noop");
// not padded

echo "<pre>";
print_r($result);

//in this example we given the length of array 5 and value 2.
// output:- Array
// 				(
// 				    [0] => 12
// 				    [1] => 10
// 				    [2] => 9
// 				    [3] => 2
// 				    [4] => 2
// 				)