<?php 

$part1 = "Coding in ";
$part2 = "php programming";
$fullText = $part1. $part2;;
echo "1 combined text:" . $fullText . "<br>";

$uppertxt = strtoupper($fullText);
echo "2.Uppercase: " . $uppertxt . "<br>";

$length = strlen($uppertxt);
echo "3. Total Characters:" . $length . "<br>";

$position = strpos($uppertxt, "PHP");
echo "4.Position of PHP:" . $position . "<br>";

$extractedWord = substr($uppertxt,10,11);
echo "5.Extracted Word:" .$extractedWord . "<br>";

?>