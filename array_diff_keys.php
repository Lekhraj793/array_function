<?php
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);
$array3= array('lekhraj'=>23, 'yellow'=>'verma', 'salary'=> 3000, 
			  'purple'=>1, 'cyan'=>4);

$a= array_diff_key($array3, $array2, $array1);
echo "<pre>";
print_r(var_dump($a));


//array_diff_key compare the the array keys. in this example we compare the $array1 against to the $array2 and $array3.
