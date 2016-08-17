<?php
$nature = array("lion" => "animal", "eagle" => "bird"); //associative array
$numbers = array(1, 2, 3, 4, 5);
foreach($numbers as $numvalue) {
	echo "value is $numvalue \n"; //printing array elements
}
echo "lion is ". $nature['lion'];
echo "\n";
?>