<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta lang="EN">
		<link rel="stylesheet" type="text/css" href="css/styel.css">
		<title>osman-shoop</title>
	</head>

	<body>
<?php
session_start();
//--------contion ------------
    $username ="root";
    $passwoerd="";
    $database = new PDO("mysql:host=localhost;dbname=shoop items;charset=utf8;", $username,$passwoerd);

//-------add data user--------


    if(isset($_POST['submit']))
    {
        $user_name=$_POST["user_name"];
        $passwerd=$_POST["passwerd"]; 
        $gmail=$_POST["gmail"]; 
        $phone_number=$_POST["phone_number"];
        $Gender=$_POST["Gender"];
        $addData =$database->prepare("INSERT INTO `user`(`user_name`, `passwerd`, `gmail`, `phone_number`, `Gender`) VALUES ('$user_name','$passwerd','$gmail','$phone_number','$Gender')");
        $addData->execute();
        
        header("location:\shoop/log in form.php");
        echo "done add tha data user";
    }
    
	


?>
</body>
