<?php
session_start();
if ( !isset($_SESSION['lat']) or !isset($_SESSION['lng']) )
{
	echo "<script>";
	echo "alert('your position is not set!');";
	echo "location.href='../set_co.php'";
	echo "</script>";
}
echo "<script>";
echo "var my_lat = ".$_SESSION['lat'].";";
echo "var my_lng = ".$_SESSION['lng'].";";
echo "</script>";
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
	<title>Expenses</title>
</head>
<body>

	<a href="../index.php"><h1 style="text-align: center;"> <i class="fa fa-info-circle"> </i> Exchange Help</h1></a>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=90f394224f3fe5a1d095723a7e095be1&libraries=services,drawing"></script>
	<div id="map" style="width:100%;height:50%;"></div>
<script>
var infowindow = new kakao.maps.InfoWindow({zIndex:1});

var mapContainer = document.getElementById('map'), // 지도를 표시할 div
    mapOption = {
        center: new kakao.maps.LatLng(my_lat, my_lng), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
};
opt = {
	location: new kakao.maps.LatLng(my_lat, my_lng),
	radius: 5000
};

// 지도를 생성합니다
var map = new kakao.maps.Map(mapContainer, mapOption);

// 장소 검색 객체를 생성합니다
var ps = new kakao.maps.services.Places();

// 키워드로 장소를 검색합니다
ps.keywordSearch('은행', placesSearchCB, opt);

// 키워드 검색 완료 시 호출되는 콜백함수 입니다
function placesSearchCB (data, status, pagination) {
    if (status === kakao.maps.services.Status.OK) {

        // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
        // LatLngBounds 객체에 좌표를 추가합니다
        var bounds = new kakao.maps.LatLngBounds();

        for (var i=0; i<data.length; i++) {
            displayMarker(data[i]);
            bounds.extend(new kakao.maps.LatLng(data[i].y, data[i].x));
        }

        // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
        map.setBounds(bounds);
    }
}

// 지도에 마커를 표시하는 함수입니다
function displayMarker(place) {

    // 마커를 생성하고 지도에 표시합니다
    var marker = new kakao.maps.Marker({
        map: map,
        position: new kakao.maps.LatLng(place.y, place.x)
    });

    // 마커에 클릭이벤트를 등록합니다
    kakao.maps.event.addListener(marker, 'click', function() {
        // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
        infowindow.setContent('<div style="padding:5px;font-size:12px;">' + place.place_name + '</div>');
        infowindow.open(map, marker);
    });
}
</script>	


<div class="container" style="width:100%; height:100;">
<div class="row">
	<div class="col-sm">
	<img src="form0.png" style="width:100%; height:auto">
	</div>

	<div class="col-sm">
<br><br><br><br>
<h1>	proof of financial capacity </h1>
<p style="font-size:20px;"><br>
-Documents proving that they are capable of taking charge of expenses and living expenses during the semester.<br><br>
-When submitting a document, you need proof of bank balance in English.
<br><br>-Costs: 500 won</p>

	</div>

</div>
</div>


</body>
</html>
