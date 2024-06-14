<?php
//$dara = json_decode(file_get_contents('js/javascript.js'),true);
//$id =$dara['id'];

if(isset($_GET['id']) && $_GET['id'] != "")
{
  $dtaa_search_box=$_GET['id'];
 



  // تحقق من نوع الطلب
  if ($_SERVER['REQUEST_METHOD'] === 'GET') 
  {

    //=====================================================
    //--------contion ------------			 
    include 'conationDB.php';				
    //======================================================
    //======================================================
$i=0;
    //$data_GET =$database->prepare("SELECT * FROM `items` WHERE heading = '$id' ");
    //$data_GET =$database->prepare("SELECT `heading` FROM `items`  WHERE heading LIKE '%$dtaa_search_box%'");
    $data_GET =$database->prepare("SELECT  heading,id FROM `items` WHERE items.heading LIKE '%$dtaa_search_box%'");
    $data_GET1 =$database->prepare("SELECT heading,id FROM `food`  WHERE food.heading  LIKE '%$dtaa_search_box%'");
    $data_GET2 =$database->prepare("SELECT heading,id FROM `smart` WHERE smart.heading  LIKE '%$dtaa_search_box%'");
    $data_GET ->execute();
    $data_GET1 ->execute();
    $data_GET2 ->execute();
    ;
echo"[";
    //=====================================================
    // تحويل معلومات  إلى JSON
   foreach( $data_GET as $data){

      
    //======================================================//
    // إرسال استجابة JSON  
    
        $part="items";
          $jsonData = json_encode($data['heading']);
          $jsonid = json_encode($data['id']);
          echo'{"heading":' . $jsonData.',"id":'.$jsonid .',"part":"'.$part.'"},';

    
      // echo  $jsonData[0] ;
      // echo  $jsonData ."<br>";
   $i++;

        }
        
        foreach( $data_GET1 as $data){

      
    //======================================================//
    // إرسال استجابة JSON  
    
          $part="food";
       $jsonData = json_encode($data['heading']);
          $jsonid = json_encode($data['id']);
          echo'{"heading":' . $jsonData.',"id":'.$jsonid .',"part":"'.$part.'"},';

    
      // echo  $jsonData[0] ;
      // echo  $jsonData ."<br>";
   $i++;

        }
        foreach( $data_GET2 as $data){

      
    //======================================================//
    // إرسال استجابة JSON  
    
          $part="smart";
         $jsonData = json_encode($data['heading']);
          $jsonid = json_encode($data['id']);
          echo'{"heading":' . $jsonData.',"id":'.$jsonid .',"part":"'.$part.'"},';

    
    $i++;
      // echo  $jsonData[0] ;
      // echo  $jsonData ."<br>";


        }

      
       echo'{"recal_caont":'.$i.'}]';
          //echo  $jsonData ; 
    //======================================================//
    
  }
}
