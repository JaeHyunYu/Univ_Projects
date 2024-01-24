<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ page session="false"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE=html>
<html lang="en">
<head>
<title>Register</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png"
	href="/resources/images/icons/sings.png" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="/resources/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="/resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="/resources/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="/resources/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="/resources/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="/resources/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="/resources/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="/resources/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/resources/css/util.css">
<link rel="stylesheet" type="text/css" href="/resources/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100"
			style="background-image: url('/resources/images/bg-01.jpg');">
			<div class="wrap-login100" style="height: 100%;">



				<form class="login100-form validate-form" method="POST" action="#">
					<span class="login100-form-logo"> <img
						src="/resources/images/sing.JPG" style="border-radius: 80px;">
					</span> <span class="login100-form-title p-b-34 p-t-27"> Register </span>

					<div class="input-group">
						ID : <input type="text" name="ID"
							style="padding: 0px 0px 0px 10px; background-color: transparent;">
					</div>

					<br>

					<div class="input-group">
						PW : <input type="password" name="password"
							style="padding: 0px 0px 0px 10px; background-color: transparent;">
					</div>

					<br>
					<div class="input-group">
						Name : <input type="text" name="name"
							style="padding: 0px 0px 0px 10px; background-color: transparent;">
					</div>
					<br>

					<div class="input-group">
						Age : <input type="number" name="age"
							style="padding: 0px 0px 0px 10px; background-color: transparent;">
					</div>
					<br>

					<div class="input-group">
						Weight : <input type="number" name="weight"
							style="padding: 0px 0px 0px 10px; background-color: transparent;">
					</div>
					<br>


					<h4 style="text-align: center;">Gender</h4>
					<div class="input-group">
						<div class="p-t-10" style="padding: 10px 0px 0px 110px;">
							<label class="radio-container m-r-45" style="float: left;">Male
								<input type="radio" checked="checked" name="gender" value="male">
								<span class="checkmark"></span>
							</label> <label class="radio-container" style="float: left;">Female
								<input type="radio" name="gender" value="female"> <span
								class="checkmark"></span>
							</label>
						</div>
					</div>

					<br>




					<div>
						<div style="float: left; padding: 10px 50px 10px 50px;">
							<button class="login100-form-btn">Register</button>
						</div>

					</div>


				</form>

				<div style="float: left; padding: 10px;">
					<button class="login100-form-btn" onclick="location.href='/'">
						Back</button>
				</div>




			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script
		src="<c:url value="/resources/vendor/jquery/jquery-3.2.1.min.js"/>">
		
	</script>
	<!--===============================================================================================-->
	<script
		src="<c:url value="/resources/vendor/animsition/js/animsition.min.js"/>">
		
	</script>
	<!--===============================================================================================-->
	<script src="<c:url value="/resources/vendor/bootstrap/js/popper.js"/>">
		
	</script>
	<script
		src="<c:url value="/resources/vendor/bootstrap/jsa/bootstrap.min.js"/>">
		
	</script>
	<!--===============================================================================================-->
	<script src="<c:url value="/resources/vendor/select2/select2.min.js"/>">
		
	</script>
	<!--===============================================================================================-->
	<script
		src="<c:url value="/resources/vendor/daterangepicker/moment.min.js"/>">
		
	</script>
	<script
		src="<c:url value="/resources/vendor/daterangepicker/daterangepicker.js"/>">
		
	</script>
	<!--===============================================================================================-->
	<script
		src="<c:url value="/resources/vendor/countdowntime/countdowntime.js"/>">
		
	</script>
	<!--===============================================================================================-->
	<script src="<c:url value="/resources/js/main.js"/>">
		
	</script>

</body>
</html>
