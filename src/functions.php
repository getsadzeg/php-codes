<?php
function writemsg() {
	echo "msg written \n";
}
writemsg();
function sum($var, $secondvar) {
	$sum = $var + $secondvar;
	return $sum;
}
echo sum(5, 10)."\n";
?>