<?php

	error_reporting(E_ALL);
	ini_set("diplay_errors",1);

	session_start();

	$form1 = $_POST['form1'];
	$form2 = $_POST['form2'];
	$form3 = $_POST['form3'];
	$form4 = $_POST['form4'];
	$form5 = $_POST['form5'];
	$form6 = $_POST['form6'];
	$form7 = $_POST['form7'];
	$form8 = $_POST['form8'];
	$form9 = $_POST['form9'];
	$form10 = $_POST['form10'];
	$form11 = $_POST['form11'];
	$form12 = $_POST['form12'];
	$id = $_SESSION["username"];
	
	$file = fopen("./user_survey/".$id.".txt","w+");
	fwrite($file,$form1."\n");
	fwrite($file,$form2."\n");
	fwrite($file,$form3."\n");
	fwrite($file,$form4."\n");
	fwrite($file,$form5."\n");
	fwrite($file,$form6."\n");
	fwrite($file,$form7."\n");
	fwrite($file,$form8."\n");
	fwrite($file,$form9."\n");
	fwrite($file,$form10."\n");
	fwrite($file,$form11."\n");
	fwrite($file,$form12."\n");
	header("Location:./index.php");
	fclose($file);
?>
