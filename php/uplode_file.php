

<form action="<?php  echo  $_SERVER['SCRIPT_NAME']; ?>" method="post" enctype="multipart/form-data" class="foem">
     <input type="file"  name="image"class="todo-input image01" require>
       <button  type="submit"  name="submit" value="uplode data" > ➕ add - items</button>
<?php 
   
    if(isset($_POST['submit']))
    {
       // echo $_SERVER['REQUEST_METHOD'];
       


         if(isset($_FILES['image'])&&($_FILES['image']['error'] == UPLOAD_ERR_OK))
         {
            $newpath ="../server/".basename($_FILES['image']['name']);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $newpath )){
                echo "file saved in $newpath ";
            }


     //$linkOfImge=$_POST["image"];
     }

    }

?>
</form>

