<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
unset($_SESSION["username"]);
unset($_SESSION["lat"]);
unset($_SESSION["lng"]);
unset($_SESSION["ccode"]);
if ( isset($_SESSION['dist']) )
	unset($_SESSION['dist']);
if ( isset($_SESSION['living_expenses']) )
	unset($_SESSION['living_expenses']);
if ( isset($_SESSION['univ_Reccomendation']) )
	unset($_SESSION['univ_Reccomendation']);
if ( isset($_SESSION['Prove_exchange']) )
	unset($_SESSION['Prove_exchange']);
if ( isset($_SESSION['Prove_semester']) )
	unset($_SESSION['Prove_semester']);
if ( isset($_SESSION['Visa_application']) )
	unset($_SESSION['Visa_application']);
if ( isset($_SESSION['edu_Registration']) )
	unset($_SESSION['edu_Registration']);
if ( isset($_SESSION['Standard_Acceptance']) )
	unset($_SESSION['Standard_Acceptance']);
if ( isset($_SESSION['Prove_fam']) )
	unset($_SESSION['Prove_fam']);
if ( isset($_SESSION['Proof_enrollment']) )
	unset($_SESSION['Proof_enrollment']);
if ( isset($_SESSION['Photo_passport']) )
	unset($_SESSION['Photo_passport']);
if ( isset($_SESSION['stan_photo']) )
	unset($_SESSION['stan_photo']);
if ( isset($_SESSION['application_form']) )
	unset($_SESSION['application_form']);
if ( isset($_SESSION['duration']) )
        unset($_SESSION['duration']);
header("Location: ./login/index.php");
?>
