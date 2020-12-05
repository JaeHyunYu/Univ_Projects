<?php
	include "../database.php";

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$passhash = hash("sha256", $password);

	$query = "select * from user where username='$username' and password='$passhash'";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
	if ( $rows == 1 )
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $username;
		if ( $row['lat'] != NULL and $row['lat'] != 0 )
			$_SESSION['lat'] = $row['lat'];
		if ( $row['lng'] != NULL and $row['lng'] != 0 )
			$_SESSION['lng'] = $row['lng'];
		if ( $row['living_expenses'] != NULL and $row['living_expenses'] != 0 )
			$_SESSION['living_expenses'] = 1;
		if ( $row['univ_Reccomendation'] != NULL and $row['univ_Reccomendation'] != 0 )
			$_SESSION['univ_Reccomendation'] = 1;
		if ( $row['Prove_exchange'] != NULL and $row['Prove_exchange'] != 0 )
			$_SESSION['Prove_exchange'] = 1;
		if ( $row['Prove_semester'] != NULL and $row['Prove_semester'] != 0 )
			$_SESSION['Prove_semester'] = 1;
		if ( $row['Visa_application'] != NULL and $row['Visa_application'] != 0 )
			$_SESSION['Visa_application'] = 1;
		if ( $row['edu_Registration'] != NULL and $row['edu_Registration'] != 0 )
			$_SESSION['edu_Registration'] = 1;
		if ( $row['Standard_Acceptance'] != NULL and $row['Standard_Acceptance'] != 0 )
			$_SESSION['Standard_Acceptance'] = 1;
		if ( $row['Prove_fam'] != NULL and $row['Prove_fam'] != 0 )
			$_SESSION['Prove_fam'] = 1;
		if ( $row['Proof_enrollment'] != NULL and $row['Proof_enrollment'] != 0 )
			$_SESSION['Proof_enrollment'] = 1;
		if ( $row['Photo_passport'] != NULL and $row['Photo_passport'] != 0 )
			$_SESSION['Photo_passport'] = 1;
		if ( $row['stan_photo'] != NULL and $row['stan_photo'] != 0 )
			$_SESSION['stan_photo'] = 1;
		if ( $row['application_form'] != NULL and $row['application_form'] != 0 )
			$_SESSION['application_form'] = 1;
		if ( $row['duration'] != NULL and $row['duration'] != 0 )
                        $_SESSION['duration'] = 1;
		$_SESSION['ccode'] = $row['ccode'];

		echo "<script>";
		echo "alert('login success!');";
		echo "location.href = './index.php'";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('username or password incorrect!');";
		echo "location.href = './index.php'";
		echo "</script>";
	}
?>
