<?php
$input = array("oranges", "apples", "pears");

//array_flip function are exchange the value to keys;
$flipped = array_flip($input);

print_r($flipped);

// output::--- arrry(
// 				[oranges]=>0
// 				[apples]=>1
// 				[pears]=>2
// 				)