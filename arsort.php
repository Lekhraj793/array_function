<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

//sort an array reverse order. and maintain index association.
//arsort function are sort array in reverse order and foreach loop take a value one by one in fruits variable and given the key and value both are asign second variable.
// arsort($fruits);
// foreach ($fruits as $key => $val)

?>