<?php
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);


//remove the same value form array like green are 2 time in array so output is::--
																					// Array
																					// (
																					//     [a] => green
																					//     [0] => red
																					//     [1] => blue
																					// )

?>