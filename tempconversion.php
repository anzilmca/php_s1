<?php

function celciusToFahrenheit($celcius){
 return ($celcius *9/5) + 32;
}

 $celciusTemp = 33;
 $fahrenheitTemp = celciusToFahrenheit($celciusTemp);

 echo $celciusTemp . "C is equal to " . $fahrenheitTemp . "F"

?>