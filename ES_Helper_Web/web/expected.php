<?php
session_start();
$cost = 0;
$distance = $_SESSION['dist'];
if ( $distance < 10 )
{
	$cost += 1250;
}
else
{
	$cost += ( $distance - 10 ) / 5 * 100;
}

// repeat
$cost *= 2;

// fee
$cost += 138200;

// print cost
$cost += 600;

?>
