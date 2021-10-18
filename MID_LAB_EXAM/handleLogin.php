<?php
	session_start();

	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id != ""){
			if($password != ""){
				$myfile = fopen('user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					if(trim($user[0]) == $id && trim($user[1]) == $password){
						setcookie('isLoggedIn', 'true', time()+4800, '/');
                        setcookie('loggedInId',$id,time()+4800,'/');
                        setcookie('loggedInName',$user[2],time()+4800,'/');
                        setcookie('loggedInUserType',$user[3],time()+4800,'/');
						header('location: home.php');
					}
				}

				echo "invalid username/password";

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid ID...";
		}
	}
