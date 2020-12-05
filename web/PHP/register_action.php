<?php

        
        $connect = mysqli_connect("localhost", "root", "system","gakgak") or die("fl");
        $userid=$_POST['userID'];
        $passwd=$_POST['password'];
        $email=$_POST['email'];
        $username=$_POST['username'];



        $query = "INSERT INTO HS_admin values ('$userid','$passwd','$email','$username')";
        $result = $connect->query($query);
        if($result) {
            echo '  <script>
                alert("가입 되었습니다.");
                location.href="../HTML/login.html";
                </script>';   
	}
        else{

	echo'              <script>
                        alert("fail");
		location.href="../HTML/register.html";
                </script>';
   }
        mysqli_close($connect);


?>
