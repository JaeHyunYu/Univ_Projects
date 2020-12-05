<?php
        session_start();
        if ( !isset($_SESSION['username']) )
        {
                header("Location: ./login/index.php");
        }
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">



    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./modal-dialog.css">

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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="utf-8"/>
    <title>Kakao 지도 시작하기</title>
<style>
html, body {
margin: 0;
height:100%;
overflow:hidden;
}

</style>
</head>
<body>
<div class="container" style="text-align:center;">
<h3>Where U At</h3>
</div>
    <div class="container" style="width:100%; height:100%;">
                <div id="map" style="width:100%;height:80%;"></div>

                <div id="clickLatlng"></div>
		<div style="text-align:center;">
                <form action="./set_coords.php" method="post">
                    <input type="hidden" id="lat" name="lat" value=0>
                    <input type="hidden" id="lng" name="lng" value=0>
                    <button class="btn btn-primary btn-lg" type="submit" style="margin:20px 0px 0px 0px;">submit</button>
                </form>
</div>
    </div>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=90f394224f3fe5a1d095723a7e095be1"></script>
    <script>
        var container = document.getElementById('map');
        var options = {
            center: new kakao.maps.LatLng(37.550864, 127.073959),
            level: 5
        };

	        var map = new kakao.maps.Map(container, options);
	        var marker = new kakao.maps.Marker({ 
		            position: map.getCenter() 
				            }); 
		        marker.setMap(map);

		        kakao.maps.event.addListener(map, 'click', function(mouseEvent) {        
				            var lat_con = document.getElementById('lat');
					                var lng_con = document.getElementById('lng');
					                var latlng = mouseEvent.latLng; 
							            marker.setPosition(latlng);
							            var message = '클릭한 위치의 위도는 ' + latlng.getLat() + ' 이고, ';
								                message += '경도는 ' + latlng.getLng() + ' 입니다';
								                var resultDiv = document.getElementById('clickLatlng'); 
										            resultDiv.innerHTML = message;
										            lat_con.value = latlng.getLat();
											                lng_con.value = latlng.getLng();
											            });

			    </script>
				    </body>
</html>

