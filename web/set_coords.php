<?php
include "./database.php";
session_start();
if ( isset($_SESSION['lat']) or isset($_SESSION['lng']) )
{
	echo "<script>";
	echo "alert('already set your position');";
	echo "location.href='./index.php'";
	echo "</script>";
}
$lat = $_POST['lat'];
$lng = $_POST['lng'];

error_reporting(E_ALL);
ini_set("display_errors", 1);

$query = "update user set lat=$lat, lng=$lng where username='".$_SESSION['username']."'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$_SESSION['lat'] = $lat;
$_SESSION['lng'] = $lng;
echo "<script>";
echo "alert('update position success!');";
echo "location.href='./index.php'";
echo "</script>";

?>
