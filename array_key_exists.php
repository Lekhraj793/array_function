<?php
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
else{
echo "key not exist"; 	
}

//Checks if the given key or index exists in the array