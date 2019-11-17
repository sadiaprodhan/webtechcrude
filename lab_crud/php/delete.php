<?php
require_once('functions.php');
if(isset($_GET['msg'])){
		
    $id= $_GET['msg'];
	
	}
	$data= deleteuser($id);
	if($data)
	{
	header('location: ../views/home.php?msg=profile_deleted');}
			else{
				header('location: ../views/userlist.php?msg=dberror');
			}
?>