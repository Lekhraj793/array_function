<?php
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
echo "<pre>";
print_r($b);

//array_map() sends each value of an array to user defined function. the function manupulate the opration and retun an array with new values.