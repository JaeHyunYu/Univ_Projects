<?php
        session_start();
        $connect = mysqli_connect("localhost","root","system","gakgak") or die("fail");
        $id=$_POST['userID'];
        $password=$_POST['password'];
        //아이디가 있는지 검사
        $query = "SELECT * FROM HS_admin WHERE USERID='$id'";
        $result = $connect->query($query);
    	if($result->num_rows>0){
                $row=mysqli_fetch_assoc($result);
               #echo $row['PASSWD'] . " " . $password . " " .($row['PASSWD']==$password);
		if($row['PASSWD']==$password){  
		     $_SESSION['id']=$id;
                        if(isset($_SESSION['id'])){
                            echo  '<script>
                                        alert("로그인 되었습니다."); //로그인 되었습니다를 띄우고
                                        //location.href="../HTML/full_list.php";
                                </script>';
				
				Header("Location:../HTML/full_list.php");
                        }
                        else{
                                echo "session fail"; //세션아이디가 정의되지 않았음
                        }
                }
                else{ // ID와 세트인 PASSWORD가 입력된 비밀번호와 같지 않음
 		echo'  <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다."); //비밀번호와 아이디가 맞지않음
                                location.href="../HTML/login.html" //이전페이지로 돌아가기
                        </script>';
        
            }
	}	
	else{
		echo "접속 오류";
	}

print_r($_POST);	
?>
