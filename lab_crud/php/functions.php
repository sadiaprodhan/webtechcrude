<?php
	require_once('db.php');

	function validate($uname, $password){

		$conn = getConnection();
		
		$sql = "select * from users where username='{$uname}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return count($user);
	}
	function viewUser($uname){

		$conn = getConnection();
		
		$sql = "select * from users where username='{$uname}'";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}
	
	function userlist (){

		$conn = getConnection();
		
		$sql = "select * from users";

		$result = mysqli_query($conn, $sql);
		

		return $result;
	}


	function register($uname, $password, $email){

		$conn = getConnection();
		$sql = "insert into users values('', '{$uname}','{$password}', '{$email}', 0)";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}
	
	
	function update($uname,$password,$email)
	{
		$conn = getConnection();
		$sql = "update users set  email='{$email}', password='{$password}' where username='{$uname}'";
 
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}
	function deleteuser($uname)
	{
		
			$conn = getConnection();
		$sql = "delete from users where username= '{$uname}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
		
	}

?>