<?php
	$id='';
	if(isset($_GET['id']))
	{
		//--------contion ------------
		 include 'conationDB.php';				
			///
	  	$id=$_GET['id'];

	    $addUserLocstion= $_GET["user_location"];
		$addUserLocstionDilever=$database->prepare("UPDATE `user` SET `delverloction`='$addUserLocstion' WHERE `id` = '$id'");
		$addUserLocstionDilever->execute();
	
	}





?>