<?php

//we want to change case of keys of an array to lower / upper.

$input_array = array("first" => 1, "SecOnd" => 4);
	print_r(array_change_key_case($input_array, CASE_UPPER));
		
		echo '<br>'."To lower case"."<br>";
			print_r(array_change_key_case($input_array, CASE_LOWER));


///we want to change case of values of an array to lower / upper.
	echo '<br>'.'<br>'. "Change Case of Values".'<br>';

$input_array = array("first" => 'Lekhraj', "SecOnd" => 'Verma');
	print_r(array_map('strtolower', $input_array));
		
		echo '<br>'."To upper case"."<br>";
			print_r(array_map('strtoupper',$input_array));?>
