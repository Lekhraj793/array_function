<?php

   //$a= array("car", "bike", "bus");
   // arra to string convert
	//we use implode function for convert array to string

    $a=["car", "bike", "bus"];
    $b= implode(" ", $a);
    echo $b."<br>";

	
	//if we want to print all the array item to next line ;;

    foreach ($a as $c) {
        echo $c. "<br>";
    }

?>
