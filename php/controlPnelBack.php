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
        if( isset($_SESSION['username']) && $_SESSION['username'] == 'admin')
			{
//--------contion ------------
  include '../conationDB.php';
//--------End conetion--------
//-------add data items--------

        

    if(isset($_POST['submit']))
    {

        $id=$_POST["id"];
        $heading=$_POST["heading"];
        $details=$_POST["details"];
        $long_details=$_POST["long_details"];
        $price=$_POST["price"]; 
        $image0=$_POST["image0"];
        $part=$_POST["part"];

        //
        
        //uplode tha files "the imeg if item
        $itme_dir = "server/";
        $file_dir = $itme_dir.basename($_FILES["image0"]["name"]);
        move_uploaded_file($_FILES["image0"]["name"],'db'.$_FILES["image0"]["tmp_name"]);

        
         if(isset($_FILES['image0'])&&($_FILES['image0']['error'] == UPLOAD_ERR_OK))
         {
            $newpath ="../server/".basename($_FILES['image0']['name']);
            if(move_uploaded_file($_FILES['image0']['tmp_name'], $newpath )){
             //   echo "file saved in $newpath ";
           //     echo "<br>".basename($_FILES['image0']['name']);
            }
         }

    
        
         $addData =$database->prepare("INSERT INTO `$part`(`heading`, `details`,`long_details`, `price`, `image0`) VALUES ('$heading','$details','$long_details','$price','$file_dir')");
        $addData->execute();
         
         
       
         // mov of the nex data
        header("location:\shoop v3 ND/control-panel.php ");
       ;
            
      
    }
    
        
 
  } else {echo "nice try baby";
    header("location:\shoop v3 ND/control-panel.php ");
       ;}

        
        ?>
    </body>
</html>