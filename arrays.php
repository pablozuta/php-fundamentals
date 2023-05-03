<?php

$myArray = array("manzana ", "naranja ", "pera ");
echo($myArray[0]);
echo($myArray[1]);

// metodo push
array_push($myArray, "sandia ");
echo($myArray[3]);

// foreach en array
foreach($myArray as $item) {
    echo $item ;
}


?>