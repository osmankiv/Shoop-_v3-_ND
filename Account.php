<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New account</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/SinUp.css">
    </head>

    <body>
        <?php

       
session_start();
//--------contion ------------
    include 'conationDB.php';
//-------add data user--------


    if(isset($_POST['submit']))
    {
        $user_name=$_POST["user_name"];
        $passwerd=openssl_encrypt($_POST["passwerd"],'AES-256-CBC','osman0',0,'9875675675672340');
        $gmail=$_POST["gmail"]; 
        $phone_number=$_POST["phone_number"];
        $Gender=$_POST["Gender"];
     //   $_SERVER['REMOTE_ADDR'];// get ip of the user
        $user_ip=$_SERVER['REMOTE_ADDR'];
       

        $addData =$database->prepare("INSERT INTO `user`(`user_name`, `passwerd`, `gmail`, `phone_number`, `Gender`, `ipUser`) VALUES ('$user_name','$passwerd','$gmail','$phone_number','$Gender','$user_ip')");
        $addData->execute();
        // in need dising of scaccfull masseg 


        ////
        echo '
                        <div class="outside outside-warning">
                            <div class="inside inside-warning">
                                <div id="head">&#128682; add user scaccfull  : </div>
                                welcom in your home
                            </div>
                        </div> 
                    ';
     //   header("location:loginform.php");
         // header("location:logInForm.php");
         //add new line 
        
    }	
//------end add user data///       
?>

        <div class="container">
            <div class="title">Sing Up</div>
            <form action="" method="post">
                 
                <div class="user-details">
                    <div class="input-box">
                       
                        <span class="details">Full name</span>
                        <input type="text" name="user_name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="gmail" placeholder="someone@gmail" required>
                    </div>
                    <div class="input-box">
                        <span class="details">password</span>
                        <input type="password"  name="passwerd"placeholder="Not less than 8 characters" required>
                    </div>
                    <div class="input-box">
                        <span class="details">phone_number </span>
                        <input type="text"  name="phone_number"placeholder="Enter your University ID" required>
                    </div>

                </div>
                
                <div class="gender-details">
                    <input type="radio" name="Gender" id="dot-1"  value="Male ">
                    <input type="radio" name="Gender" id="dot-2"  value="Fmale">
                    <span class="gender-title">Gender</span>
                    <div class="categoty">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot tow"></span>
                            <span class="gender">Fmale</span>
                        </label>
                    </div>
                </div>
                <button class="button" type="submit" name="submit">SIN UPS</button>
                <button class="button"  class="Log" value="sin up"><!--   --> <a href="loginform.php">log in</a> </button>
            </form>
        </div>
        <script src="js/sin up.js"></script>
    </body>

</html>
