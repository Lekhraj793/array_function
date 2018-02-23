<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

//asort():- sort an array and maintain index association.
//asort function are sort array and foreach loop take a value one by one in fruits variable and given the key and value both are asign second variable.

?>