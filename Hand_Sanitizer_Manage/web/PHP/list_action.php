<?php
    $id = $_GET['id'];

    $con = mysqli_connect("localhost","root","system","gakgak");
    if (mysqli_connect_errno())
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

    $result = mysql_query($con, "SELECT * FROM HS_list WHERE USERID='$id'");
    if (!$result){
        die("Query to show fields from table failed");
    }

    echo "<tbody>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['BUILDING'] . "</td>";
        echo "<td>" . $row['LOCATION'] . "</td>";
        echo "<td>" . $row['REMAINDER'] . "</td>";
        echo "<td>" . $row['ORGAN'] . "</td>";
        echo "<td></td>";
        echo "</tr>";
    }
    echo "</tbody>";
?>
