<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>control-panel</title>
        <link rel="stylesheet" href="css/style-control-panel.css" type="text/css">
        

    </head>

    <body>
        <nav>
            <ul class="headinglist">
                <Li class="hlinks"> <a href="#" class="hlinks">ALL</a> </Li>
                <Li class="hlinks"> <a href="index.php" class="hlinks">Home</a> </Li>
                <Li class="hlinks"> <a href="#" class="hlinks">Smart</a> </Li>
                <Li class="hlinks"> <a href="#" class="hlinks">Food</a> </Li>
                <Li class="hlinks"> <a href="#" class="hlinks">Cofee</a> </Li>
                <Li class="hlinks"> <a href="control-panel.php" class="hlinks">Control-panel</a> </Li>
            </ul>

        </nav>
         <form action="php/controlPnelBack.php" method="post" enctype="multipart/form-data" class="foem">
             <?php          
                session_start();

                if( isset($_SESSION['username']) && $_SESSION['username'] == 'admin')
                {
                    //--------contion ------------
                    include 'conationDB.php';
                    //--------End conetion--------
                            
                            
                            
                            
                				echo '<h1><em>welcome '. $_SESSION['username'].'</em><br>';
                            
                			 //id of items tabul
                   $stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `items` ");
                	$stmt->execute();
                   foreach($stmt as $data){  $ID = $data['id'];  }
                            
                    //id of items tabul
                   $stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `food` ");
                	$stmt->execute();
                   foreach($stmt as $data){  $ID_food = $data['id'];  }

                     //id of items tabul
                   $stmt =$database->prepare("SELECT `heading`, `details`, `price`, `image0`,`id` FROM `smart` ");
                	$stmt->execute();
                   foreach($stmt as $data){  $ID_smart = $data['id'];  }
	
           

                    if(isset($_POST['submit']))
                    {
                        $addAdata =$_SESSION['$addAdata'];
                        if($addAdata==true)
                        {
                          echo ('<span><div class="outside outside-warning">
                                <div class="inside inside-warning">
                                <div id="head">&#128683;successful: </div>
                                Done add item
                                </div>
                                </div> 
                                </span>'
                            );
                        }
                    }
                    
                   
                }
                else 
                {
                    echo ('<span><div class="outside outside-warning">
                    <div class="inside inside-warning">
                    <div id="head">&#128683;try Hack: </div>
                    block of all system ports
                    </div>
                    </div> 
                    </span>');
                }
        ?>
       
        <header>
            <h1>add - items 📃</h1>
        </header>
            <div>
           <input type="heading"  name="id"  value="<?php if(isset($ID)){   echo' main = '. (++$ID) ;} ?>" class=" id" require ></input>
           <input type="heading"  name="id_food"  value="<?php if(isset($ID_food)){echo'food='.(++$ID_food);} ?>" class=" id" require ></input>
            <input type="heading"  name="id_smart"  value="<?php if(isset($ID_smart)){echo'smart='.(++$ID_smart);} ?>" class=" id" require ></input>

           
            <h2 class="heading" >heading</h2>
            <input type="text"   name="heading" class="heading1"require onkeyup="fetch_data(this.value)">
            <h2 class="heading">details</h2>
            <input type="text"  name="details" class="todo-input details1 "require>
            <h2 class="heading">long details</h2>
            <input type="text"  name="long_details" class="todo-input details1 "require>
            <h2 class="heading">price</h2>
            <input type="text" name="price" class="todo-input price1"require>
            <h2 class="heading">image0 link</h2>
            <input type="file"  name="image0"class="todo-input image01" require>
               <span class="gender-title">parts</span>
                <div class="gender-details">
                    <input type="radio" name="part" id="dot-1"  value="items">
                    <input type="radio" name="part" id="dot-2"  value="food">
                    <input type="radio" name="part" id="dot-3"  value="smart">
                    
                    <div class="categoty">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">items</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot tow"></span>
                            <span class="gender">food</span>
                        </label>
                         <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">smart</span>
                        </label>
                    </div>
                </div>
            
           
            <br>
              <button  type="submit"  name="submit" value="uplode data"  class="submit"> ➕ add - items</button>
        </form>
        <div class="todo-container">
            <ul class="todo-list">
                <!-- <div class="todo">
                <li>Item No 1</li>
                <button class="complete-btn">✔️</button>
                <button class="trash-btn">❌</button>
            </div> -->
            </ul>
        </div>
        <script src="js/app.js" type="text/javascript"></script>
       
    </body>

</html>
