<?php 
$array1 = array( 
    "a" => "first", 
    "b" => "second", 
    "c" => "something", 
    "red" 
); 

$array2 = array( 
    "a" => "first", 
    "b" => "something", 
    "letsc" 
); 

print_r(array_fill_keys($array1, $array2)); 
?> 


=======================================================================================================

<?php
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);
?>

output::--  Array
				(
				    [foo] => banana
				    [5] => banana
				    [10] => banana
				    [bar] => banana
				)