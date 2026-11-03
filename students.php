<?php 
 $students = ["Alice","Bob","Charlie","Eve"];

 echo "original array:<br>";
 print_r($students);
 echo "<br><br>";

asort($students);
echo "Array ascending order:<br>";
print_r($students);
echo "<br><br>";

arsort($students);
echo "Array in descending order: <br>";
print_r($students);
?>