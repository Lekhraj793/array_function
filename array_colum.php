<?php 
$a= array (   0 =>    array (     'shop_id' => 1,     'total' => 1,   ),
              1 =>    array (     'shop_id' => 3,     'total' => 9,   ),
              2 => array (     'shop_id' => 2,     'total' => 16,   ), );

$b=array_column($a, 'shop_id');

echo"<pre>";
print_r ($b);
echo "</pre>";

//array_column function return the single column value. in this example we want to shop id form array we apply array_column function.
