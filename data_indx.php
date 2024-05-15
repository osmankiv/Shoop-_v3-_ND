<?php
//$dara = json_decode(file_get_contents('js/javascript.js'),true);
//$id =$dara['id'];
$id='';
if(isset($_GET['id']))
{
  $id=$_GET['id'];




  // تحقق من نوع الطلب
  if ($_SERVER['REQUEST_METHOD'] === 'GET') 
  {

    session_start();
    //=====================================================
    //--------contion ------------			 
    include 'conationDB.php';				
    //======================================================
    //======================================================



    $data_GET =$database->prepare("SELECT * FROM `items` WHERE `id` = $id ");
    $data_GET ->execute();

    //=====================================================
    // تحويل معلومات  إلى JSON
   foreach( $data_GET as $data){
      }
    //======================================================//
    // إرسال استجابة JSON       
      $jsonData = json_encode($data);
                               //

        echo  $jsonData;
                                      //    
    //======================================================//
    
  }
}
