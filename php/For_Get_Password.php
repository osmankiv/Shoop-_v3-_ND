<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login </title>
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <link rel="stylesheet" href="../css/stylelog in.css">
   
   
    

    </head>
<body >
    <?php 
    
    if(isset($_POST['submit']))
    {
       // $_POST['submit']
    $to='singsan324@gmail.com';
    $subject="test code ";
    $masseg="your code is '123456'";
    $headers="Form: osshooptem@gmail.com";
   
    if(mail($to,$subject,$masseg,$headers)){
     
    }
    else
    {
        
         echo'
                  <span>
                        <div class="outside outside-warning">
                            <div class="inside inside-warning">
                                <div id="head">&#128683; data filed : </div>
                                Enter your gmail
                            </div>
                        </div> 
                    </span>
              
            '; 
            
    }
    }
    ?>
    
    
 
    <div class="form-raper">
        <form action="" method="POST"  class="form">
            <div class="logo">
                <i class="fa-solid fa-right-to-bracket"></i>
                <h2>For Get Password </h2>
            </div>
            <div class="input-wrapper">
                <p> user gmail</p>
            </div>
            <input type="gmail"  name="username" class="input" placeholder="Enter your gmail" id="username" required>
            <div class="input-wrapper">
            <?php 
              
            if(isset($_POST['submit']))
            { 
                if(mail($to,$subject,$masseg,$headers))
                {
                    echo'<div class="input-wrapper">
                            <p>Enter your code</p>
                         </div>
                            <input type="number"  name="username" class="input" placeholder="Enter your gmail" id="username" required>
                        ';
                }
            }
  
            
           ?>
            <button class="button"  class="Log" type="submit" name="submit" value="log in"><!--   --> send my code</a> </button>
          
        


  
        </form>

    </div>
</body>
</html>