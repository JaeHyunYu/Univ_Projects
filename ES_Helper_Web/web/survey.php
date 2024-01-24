<?php
	include "./database.php";

	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];
	$d3 = $_POST['d3'];
	$d4 = $_POST['d4'];
	$d5 = $_POST['d5'];
	$d6 = $_POST['d6'];
	$d7 = $_POST['d7'];
	$d8 = $_POST['d8'];
	$d9 = $_POST['d9'];
	$d10 = $_POST['d10'];
	$d11 = $_POST['d11'];
	$d12 = $_POST['d12'];

	$query = "insert into survey (d1, d2, d3, d4, d5, d6, d7, d8, d9, d10, d11, d12) values($d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $d12)";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
	echo "success!";
	
?>
