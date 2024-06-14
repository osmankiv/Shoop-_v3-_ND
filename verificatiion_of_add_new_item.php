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
    $data_GET2 =$database->prepare("SELECT heading,id FROM `smart` WHERE smart.heading LIKE '%$dtaa_search_box%'");
    $data_GET ->execute();
    $data_GET1 ->execute();
    $data_GET2 ->execute();
    ;
echo"{";
   foreach( $data_GET as $data){
          $jsonData =$data["heading"];
          if($jsonData == $dtaa_search_box)
            {
             echo '"status":true,';
             $i++;
            }
    
      
      // echo  $jsonData ."<br>";


        }
        foreach( $data_GET1 as $data){

      
    //======================================================//
    // إرسال استجابة JSON  
    
          $jsonData =$data["heading"];
          if($jsonData == $dtaa_search_box)
            {
             echo '"status":true,';
             $i++;
            }
    
    
      // echo  $jsonData[0] ;
      // echo  $jsonData ."<br>";

$i++;
        }
        foreach( $data_GET2 as $data){

      
    //======================================================//
    // إرسال استجابة JSON  
    
         $jsonData =$data["heading"];
          if($jsonData == $dtaa_search_box)
            {
             echo '"status":true,';
             $i++;
            }
    
    
      // echo  $jsonData[0] ;
      // echo  $jsonData ."<br>";

$i++;
        }

      
       echo'"recal_caont":'.$i.'}';
          //echo  $jsonData ; 
    //======================================================//
    
  }
}
