<!DOCTYPE html>
<html>
<head>


</head>
<body>
<?php 
//session_start();
//$sess_id=$_SESSION['id'];
$connect = mysqli_connect("localhost","root","system","gakgak") or die("fail");

$sess_id='duri';
$query = "SELECT * FROM HS_list WHERE USERID='$sess_id' ORDER BY CHKDATE DESC LIMIT 1";
$result=$connect->query($query);
while ($row = mysqli_fetch_array($result)){
                      echo $row['REMAINDER'] . " " . $row['INIT_WEIGHT'];

			
}

?>

</body>
</html>
