<?php
	include "../database.php";

	//error_reporting(E_ALL);
	//ini_set("display_errors", 1);

	session_start();

	$id = $_POST['ID'];
	$pw = $_POST['password'];
	$dur = $_POST['stay'];
	$gender = $_POST['gender'];
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
	$ccode = $_POST['ccode'];
	$pwhash = hash("sha256", $pw);
	$lat=0.0;
	$lng=0.0;

	if($form1 == "form1")
		$form1 = 1;
	else
		$form1 = 0;
	if($form2 == "form2")
		$form2 = 1;
	else
		$form2 = 0;
	if($form3 == "form3")
		$form3 = 1;
	else
		$form3 = 0;
	if($form4 == "form4")
		$form4 = 1;
	else
		$form4 = 0;
	if($form5 == "form5")
		$form5 = 1;
	else
		$form5 = 0;
	if($form6 == "form6")
		$form6 = 1;
	else
		$form6 = 0;
	if($form7 == "form7")
		$form7=1;
	else
		$form7=0;
	if($form8=="form8")
		$form8=1;
	else
		$form8=0;
	if($form9=="form9")
		$form9=1;
	else
		$form9=0;
	if($form10=="form10")
		$form10=1;
	else
		$form10=0;
	if($form11=="form11")
		$form11=1;
	else
		$form11=0;
	if($form12=="form12")
		$form12=1;
	else
		$form12=0;


	if($gender == "male")
		$gender = 1;
	else
		$gender = 0;

	if($dur == "minor")
		$dur = 1;
	else
		$dur = 0;

	if($id == NULL)
	{
		$err = 'Please enter id.';
	}
	else if($pw == NULL)
	{
		$err = 'Please enter pw.';
	}

	if(isset($err))
	{
		echo "error message : ", $err;
	}
	else
	{
		$query = 'insert into user values(0,"'.$id.'","'.$pwhash.'",'.$gender.','.$form1.','.$form2.','.$form3.','.$form4.','.$form5.','.$form6.','.$form7.','.$form8.','.$form9.','.$form10.','.$form11.','.$form12.','.$dur.','.$lat.','.$lng.',"'.$ccode.'");';
		$con->query($query);
		#echo $query;
		header("Location:./index.php");
	}
?>
