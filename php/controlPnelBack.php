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
  include '../conationDB.php';
//--------End conetion--------
//-------add data items--------

        

    if(isset($_POST['submit']))
    {

        $id=$_POST["id"];
        $heading=$_POST["heading"];
        $details=$_POST["details"];
        $price=$_POST["price"]; 
        $image0=$_POST["image0"];
        $linkOfImge=$_POST["image"];
        //uplode tha files "the imeg if item
        $itme_dir = "imgs/";
        $file_dir = $itme_dir.basename($_FILES["image"]["name"]);
        $upLodeOk=1;
        $imageFileType.strtolower(pathinfo($file_dir,PATHINFO_EXTENSION));
        //check if img file is a atual image or fake imge
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check ==false){
            echo "file an imeg". $check["mime"] . ".";
            $upLodeOk =1;
        }
        else{
            echo"file type is not real imge";
            $upLodeOk=0;
        }
        
         $addData =$database->prepare("INSERT INTO `items`(`id`,`heading`, `details`, `price`, `image0`,`linkOfImge`) VALUES ('$id','$heading','$details','$price','$file_dir','$linkOfImge')");
        $addData->execute();
         
       
       
         // mov of the nex data
          header("location:\shoop/control-panel.php");
       ;
            
      
    }
    
        
 
    
        
        ?>
    </body>
</html>