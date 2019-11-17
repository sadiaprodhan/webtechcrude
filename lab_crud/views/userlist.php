<!DOCTYPE html>

<?php

require_once('../php/functions.php');

if(isset($_GET['msg'])){
		

		echo $_GET['msg'];
	}
?>

<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>UserName</th>
			<th>Password</th>
			<th>Email</th> 
			<th>Action</th> 
		</tr>
		<?php
		$data= userlist();
		while($result= mysqli_fetch_assoc($data))
		{
		
		?>
		<tr>
			<td> <?php echo $result['username']?> </td>
			<td><?php echo $result['password']?></td>
			<td><?php echo $result['email']?></td>
			<td>
		<a href="edit.php?msg=<?php echo $result['username']?>">EDIT</a> |
				<a href="../php/delete.php?msg=<?php echo $result['username']?>">DELETE</a> |
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>