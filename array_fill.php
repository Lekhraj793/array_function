<?php
$a = array_fill(5, 2, 'banana');
$b = array_fill(-20, 5, 'pear');
echo "<pre>";
print_r($a);
print_r($b);


//array_fill function are use to fill tha values in keys.. like 5 is a key and 2 is the time of runing index in sequence
//If start_index is negative, the first index of the returned array will be start_index and the following indices will start from zero