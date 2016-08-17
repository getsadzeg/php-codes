<?php
$var = 5;
if($var > 3) echo "$var > 3 \n";
elseif($var == 3) echo "$var = 3 \n";
else echo "$var < 3 \n";
switch($var) { //switch sample for $var
	case 1:
	echo "$var = 1 \n";
	break;

	case 2:
	echo "$var = 2 \n";
	break;

	case 3:
	echo "$var = 3 \n";
	break;

	case 4:
    echo "$var = 4 \n";
    break;

    case 5:
    echo "$var = 5 \n";
    break;
}
?>