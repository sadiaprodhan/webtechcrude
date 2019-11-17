<?php
require_once('functions.php');

	if(isset($_POST['submit'])){

		$uname = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if(empty($uname) == true || empty($password) == true || empty($email) == true){
			echo "null submission!";
		}else{

			$status = update($uname, $password, $email);

			if($status){

				header('location: ../views/home.php?msg=profile_updated');
			}else{
				header('location: ../views/userlist.php?msg=dberror');
			}
		}

	}else{
		header('location: ../views/reg.php');
	}


?>