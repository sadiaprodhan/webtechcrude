<?php
	require_once('../php/functions.php');
	
	if(isset($_GET['msg'])){
		
    $id= $_GET['msg'];
	
	}
	$user= viewUser($id);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>

	<h1>Edit your profile</h1> 
	
	<a href="userlist.php">Back</a> |  
	<a href="../php/logout.php">logout</a>

	<form method="post" action="../php/edituser.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"  value= "<?php echo $user['username']?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value= "<?php echo $user['email']?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value= "<?php echo $user['password']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
	</form>


</body>	
</html>
