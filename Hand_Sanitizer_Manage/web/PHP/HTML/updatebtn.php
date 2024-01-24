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
	$building=$row['BUILDING'];
	$loc=$row['LOCATION'];
	$remain=$row['REMAINDER'];
	$init=$row['INIT_WEIGHT'];
	$org=$row['ORGAN'];
	$chg=$row['chg'];
			
}
$chk=date("Y-m-d");
$chg=$chg+1;
$sql2="INSERT INTO HS_list VALUES ($building,$loc,$remain,$remain,$org,$chk,$sess_id,$chg)";
echo $sql2;

?>

</body>
</html>
