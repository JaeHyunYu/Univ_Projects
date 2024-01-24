<?php
session_start();
if ( !isset($_SESSION['lat']) or !isset($_SESSION['lng']) )
{
	header("Location: ./set_co.php");
}

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

echo "<script>";
echo "var a0 = 0;";
echo "var a1 = 0;";
echo "var a2 = 0;";
echo "var a3 = 0;";
echo "var a4 = 0;";
echo "var a5 = 0;";
echo "var a6 = 0;";
echo "var a7 = 0;";
echo "var a8 = 0;";
echo "var a9 = 0;";
echo "var a10 = 0;";
echo "var a11 = 0;";
if ( isset($_SESSION['living_expenses']) )
{
	echo "var a0 = 1;";
	$cost -= 500;
}	
if ( isset($_SESSION['univ_Reccomendation']) )
	echo "var a1 = 1;";
if ( isset($_SESSION['Prove_exchange']) )
	echo "var a2 = 1;";
if ( isset($_SESSION['Prove_semester']) )
	echo "var a3 = 1;";
if ( isset($_SESSION['Visa_application']) )
	echo "var a4 = 1;";
if ( isset($_SESSION['edu_Registration']) )
	echo "var a5 = 1;";
if ( isset($_SESSION['Standard_Acceptance']) )
	echo "var a6 = 1;";
if ( isset($_SESSION['Prove_fam']) )
	echo "var a7 = 1;";
if ( isset($_SESSION['Proof_enrollment']) )
	echo "var a8 = 1;";
if ( isset($_SESSION['Photo_passport']) )
	echo "var a9 = 1;";
if ( isset($_SESSION['stan_photo']) )
	echo "var a10 = 1;";
if ( isset($_SESSION['application_form']) )
	echo "var a11 = 1;";
echo "var cost = ".$cost.";";
echo "</script>";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
   <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">



    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->   
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->   
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->   
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <meta http-equiv="Content-Type" content="text/html;">
    <title>Main</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </head>



 <body>
   <h1 style="text-align:center;"> <i class="fa fa-info-circle"> </i> Exchange Help </h1>
   <h2 style="text-align:right; padding: 0px 30px 0px 0px;">Expected Cost = <?php echo $cost ?> <i class="fa fa-krw"></i></h2>

   <div class="container-login100" style="background-image: url('./login/images/bg-01.jpg'); text-align: center;">
	

	<div class="container" style="padding: 10px;">

         <div class="row">
            <div class="col">
               <a href="./papers/money.php"><i id="0" class="fa fa-money" style="font-size: 100px;"></i></a>
	       <p> Documents providing your living expenses</p>
		<p style="color:red;">Estimated Time : 12 min </p>
            </div>
            <div class="col">
               <a href="./papers/card.html"><i id="1" class="fa fa-address-card" style="font-size:100px;"></i></a>
               <p> Recommendation letter issued by the head of your univ</p>
		 <p style="color:red;">Estimated Time : 21 min </p>

	</div>
            <div class="col">
               <a href="./papers/check.html"><i id="2" class="fa fa-check" style="font-size: 100px;"></i></a>
	       <p> Documments that are an exchange student</p>
 <p style="color:red;">Estimated Time : 7 min </p>

            </div>
         </div>

         <div class="row">

            <div class="col">
               <a href="./papers/cap.html"><i id="3" class="fa fa-graduation-cap" style="font-size: 100px;"></i></a>
               <p> Documents providing that you have complete at least one semester <br></p>
 <p style="color:red;">Estimated Time : 23 min </p>

 </div>
            <div class="col">

               <a href="./papers/visa.html"><i id="4" class="fa fa-cc-visa" style="font-size: 100px;"></i></a>
               <p> Visa Form </p>
 <p style="color:red;">Estimated Time : 13 min </p>

   </div>


            <div class="col">
               <a href="./papers/Industry.html"><i id="5" class="fa fa-industry" style="font-size: 100px;"></i></a>
               <p>Photocopy of Business Registration Certificate</p>
 <p style="color:red;">Estimated Time : 5 min </p>

</div>
         </div>

         <div class="row">
            <div class="col">
               <a href="./papers/envelope.html"><i id="6" class="fa fa-envelope" style="font-size: 100px;"></i></a>
	       <p>Standard Acceptance Letter</p>
		 <p style="color:red;">Estimated Time : 60 min </p>

            </div>
            <div class="col">
               <a href="./papers/users.html"><i id="7" class="fa fa-users" style="font-size: 100px;"></i></a>
	       <p>Documents proving your family relations</p>
 <p style="color:red;">Estimated Time : 22 min </p>

            </div>

            <div class="col">
               <a href="./papers/list.html"><i id="8" class="fa fa-list-alt" style="font-size: 100px;"></i></a>
               <p> Application Form </p>
	 <p style="color:red;">Estimated Time : 5 min </p>

	    </div>
         </div>


          <div class="row">
            <div class="col">
               <a href="./papers/key.html"><i id="9" class="fa fa-key" style="font-size: 100px;"></i></a>
               <p> Proof of Enrollment </p>
	 <p style="color:red;">Estimated Time : 5 min </p>

</div>

            <div class="col">
               <a href="./papers/bookmark.html"><i id="10" class="fa fa-bookmark" style="font-size: 100px;"></i></a> 
               <p> photocopy of passport </p>
 <p style="color:red;">Estimated Time : 2 min </p>

	    </div>
            <div class="col">
               <a href="./papers/picture.html"><i id="11" class="fa fa-picture-o" style="font-size: 100px;"></i></a>
               <p> one standard size photograph</p>
 <p style="color:red;">Estimated Time : 2 min </p>

	    </div>

	 </div>

<br><br><br><br>
    <div class="row">
	<div class="col">
<a href="embassy.php"><i class="fa fa-bank" style="font-size:100px; color:rgb(153,050,204);"></i></a>
<p> Location of Embassy</p></div>
	<div class="col">
		<a href="./papers/printing.php"><i id="13" class= "fa fa-print" style="font-size:100px; color:rgb(153,050,204);"></i></a>
		<p>Where you can print </p>

	</div>
            <div class="col">
               <a href="research.html"><i id="12" class="fa fa-smile-o" style="font-size: 100px; color:rgb(153,050,204);"></i></a>
               <p> If you finsh all the documents <br> Click!</p>
            </div>

         </div>     
         <a href="logout.php">logout</a>
      </div>
      



   </div>





   <div id="dropDownSelect1"></div>

   <!--===============================================================================================-->
   <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/animsition/js/animsition.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/bootstrap/js/popper.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/select2/select2.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/daterangepicker/moment.min.js"></script>
   <script src="vendor/daterangepicker/daterangepicker.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/countdowntime/countdowntime.js"></script>
   <!--===============================================================================================-->
   <script src="js/main.js"></script>
  </div>
<script>
	if ( a0 == 1 )
	{
		var elem = document.getElementById('0');
		elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a1 == 1 )
	{
		var elem = document.getElementById('1');
		elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a2 == 1 )
        {
                var elem = document.getElementById('2');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a3 == 1 )
        {
                var elem = document.getElementById('3');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a4 == 1 )
        {
                var elem = document.getElementById('4');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a5 == 1 )
        {
                var elem = document.getElementById('5');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a6 == 1 )
        {
                var elem = document.getElementById('6');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a7 == 1 )
        {
                var elem = document.getElementById('7');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a8 == 1 )
        {
                var elem = document.getElementById('8');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a9 == 1 )
        {
                var elem = document.getElementById('9');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a10 == 1 )
        {
                var elem = document.getElementById('10');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
	}
	if ( a11 == 1 )
        {
                var elem = document.getElementById('11');
                elem.className = "fa fa-times";
		elem.style="font-size:100px; color:rgb(255,0,0)";
        }
</script>
</body>

</html>
