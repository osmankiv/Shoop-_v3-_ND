<!DOCTYPE html>
<html>
	<head>
	<meta lang="en">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/documaint.css">
	<title>استماره التشريح -نظام المشرحه</title>
</head>
<body>

	<?php 
	

//////////////////////////////////////////
		$username ="root";
		$passwoerd="";
		$database = new PDO("mysql:host=localhost;dbname=clendb;charset=utf8;",	$username,$passwoerd);
/////////////////////////////////////////		
		$read_data = $database->query("SELECT * FROM leter");
		$read_data2 = $database->query("SELECT * FROM leter");
////////////////////////////////////////////
		if(isset($_GET['sireiel_num']))
	{		
		$sireiel_num = $_GET['sireiel_num'];	

		
		//-------test of get data-------------/
		/*	$servername = "localhost";
		$dbname = "clendb";

		// Create connection
		$conn = new mysqli($servername, $username, $passwoerd, $dbname);
		// Check connection
		if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
		}		
		$sql= "SELECT * FROM leter WHERE sireiel_num =" . $sireiel_num;
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
  		// output data of each row
  		while($datadatadatadata = $result->fetch_assoc()) 
  		{
   
  

			$num_login 						=$data['num_login'];
			$date_login 					=$data['date_login'];
			$num_of_communication 			=$data['num_of_communication'];
			$name 							=$data['name'];
			$num_constraint 				=$data['num_constraint'];
			$num_pag 						=$data['num_pag'];
			$anotome 						=$data['anotome'];
			$gener 							=$data['gener'];
			$cause 							=$data['cause'];
			$age 							=$data['age'];
			$corpse_length 					=$data['corpse_length'];
			$eric_8 						=$data['eric_8'];
			$procuratorate 					=$data['procuratorate'];
			$hospital 						=$data['hospital'];
			$anotme_time 					=$data['anotme_time'];
			$anotme_date 					=$data['anotme_date'];
			$description_of_corps 			=$data['description_of_corps'];
			$doctoer_name					=$data['doctoer_name'];
			$doctoer_description		=$data['doctoer_description'];

		

           //---end test of get data-------------//


			}
		}
		}
		*/


		
		foreach($read_data2 as $data)
		{
			if($data["sireiel_num"]===$sireiel_num)
			{

	        $num_login 						=$data['num_login'];
	        $date_login 					=$data['date_login'];
	        $num_of_communication =$data['num_of_communication'];
	        $name 								=$data['name'];
	        $num_constraint 			=$data['num_constraint'];
	        $num_pag 							=$data['num_pag'];
	        $anotome 							=$data['anotome'];
	        $gener 								=$data['gener'];
	        $cause 								=$data['cause'];
	        $age 									=$data['age'];
	        $corpse_length 				=$data['corpse_length'];
	        $eric_8 							=$data['eric_8'];
	        $procuratorate 				=$data['procuratorate'];
	        $hospital 						=$data['hospital'];
	        $anotme_time 					=$data['anotme_time'];
	        $anotme_date 					=$data['anotme_date'];
	        $description_of_corps =$data['description_of_corps'];
	        $doctoer_name					=$data['doctoer_name'];
			    $doctoer_description	=$data['doctoer_description'];

			}


		}

	  if(isset($_POST['save']))
	    {
	        $num_login =$_POST['num_login'];
	        $date_login =$_POST['date_login'];
	        $num_of_communication=	$_POST['num_of_communication'];
	        $name =$_POST['name'];
	        $num_constraint =$_POST['num_constraint'];
	        $num_pag =$_POST['num_pag'];
	        $anotome =$_POST['anotome2'];
	        $gener=$_POST['gener'];
	        $cause =$_POST['cause'];
	        $age =$_POST['age'];
	        $corpse_length =$_POST['corpse_length'];
	        $eric_8 =$_POST['eric_8'];
	        $procuratorate =$_POST['procuratorate'];
	        $hospital =$_POST['hospital'];
	        $anotme_time =$_POST['anotme_time'];
	        $anotme_date =$_POST['anotme_date'];
	        $description_of_corps =$_POST['description_of_corps2'];
	        $doctoer_name=$_POST['doctoer_name'];
			    $doctoer_description=$_POST['doctoer_description'];
	        $sql=" UPDATE `leter` SET `num_login`=\"$num_login\",`date_login`=\"$date_login\",	`num_of_communication`=\"$num_of_communication\",`name`=\"$name\",`num_constraint`=\"$num_constraint\",`num_pag`=\"$num_pag\",	`anotome`=\"$anotome\",`gener`=\"$gener\",`cause`=\"$cause\",`age`=\"$age\",`corpse_length`=\"$corpse_length\",	`eric_8`=\"$eric_8\",`procuratorate`=\"$procuratorate\",`hospital`=\"$hospital\",`anotme_time`=\"$anotme_time\",	`anotme_date`=\"$anotme_date\",`description_of_corps`=\"$description_of_corps\",`doctoer_name`=\"$doctoer_name\",	`doctoer_description`=\"$doctoer_description\" WHERE `leter`.`sireiel_num` =$sireiel_num";
	        echo"updata is done";
	    $read_data= $database->query($sql);
	    header("location:labul.php");
			}
		if(isset($_POST['labul']))
		{
			header("location:labul.php");
		}
	}


	?>
	
	<hr>
	<form class="form1"method="POST">
			<center>
	
		<h2 id="t2" style="background-color:#7fffd4;">تعديل  تقرير  تشريح  جثمان بتكليف من النيابة </h2>
			</center>
		<h3  >sireiel_num</h3>

		
<?PHP
	if(isset($_GET['sireiel_num']))
	{		

		echo"<input type=number name=sireiel_num class=input
		id=1  disabled=>",$sireiel_num;
	}
?>
			<h3>رقم الدخول</h3>	
			<input type="number" name="num_login" value="<?php echo $num_login ;  ?>" placeholder="---------------------------------------------------------------------------------------" class="input"
			id="1"required>
			<h3>تاريخ الدخول </h3><input type="date" name="date_login" value="<?php echo $date_login ;  ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="2"required>
			<h3>رقم البلاغ</h3>
			<input type="number" name="num_of_communication" value="<?php echo $num_of_communication ;  ?>"placeholder="---------------------------------------------------------------------------------------"class="input"id="2"required>
			<h3>لاسم </h3><input type="txt" name="name" value="<?php echo $name ;  ?>"placeholder="---------------------------------------------------------------------------------------"class="input"id="3"required>
			<h3>لعمر </h3><input type="number" name="age" value="<?php echo $age ;  ?>"placeholder="---------------------------------------------------------------------------------------"class="input"id="4"required> 
	 		<h3>النوع  </h3>
			<input list="gener" name="gener" value="<?php echo $gener ;  ?>" class="input"  style= "width: 400px;" >
			<datalist  id="gener">
				<option value= ذكر>
				<option value="انثي">
				<option value="طفل  ">

			</datalist>
			<h3>طول الجثة:</h3>

			<input type="number" name="corpse_length"  value="<?php echo $corpse_length ;  ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="8"required 3>

			<h3>رقم الصفحة  </h3>
			<input type="number" name="num_pag"  value="<?php echo $num_pag ;  ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="9"required>

			<div class="form2">
				<h4>رقم القيد </h4>
				<input type="number" name="num_constraint"  value="<?php echo $num_constraint ;  ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="10"required style="width: 250px;">

				<h4>جهة اصدار اورنيك 8 </h4>
				<input type="txt" name="eric_8" value="<?php echo $eric_8 ;  ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="11"required  style="width: 250px;">

				<h4>لنيابه المصدرة للتشريح </h4>
				<input type="txt" name="procuratorate" value="<?php echo $procuratorate ;  ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="12"required style="width: 250px;">
				<h4>استشفي اثبات الوفاة </h4>
				<input type="txt" name="hospital" value="<?php echo $hospital ;  ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="13"required style="width: 250px;"><br>

				<h4>	::زمن وتاريخ التشريح  </h4>
				<input type="date" name="anotme_date" value="<?php echo $anotme_date ;  ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="14"required style="width: 250px;"><br>

				<input type="time" name="anotme_time" value="<?php echo "$anotme_time" ?>" placeholder="---------------------------------------------------------------------------------------"class="input"id="15"required style="width: 250px;"><br>
			</div>
		
			<?php include ("asve.php"); ?>
			<h3>الاوصاف الخارجية للجثة </h4>
 <textarea name="anotome2" style="width: 700px; height: 100px;"><?php echo $anotome2;?></textarea>
 	<h3>التشريح  </h3>

 <textarea name="description_of_corps2" style="width: 700px; height: 100px;"><?php echo $description_of_corps2;?></textarea>
				<h3>	اسباب الوفاة  </h3>
			
				<input list="cause" name="cause" value="<?php echo $cause ;  ?>" class="input"placeholder="	اسباب الوفاة  " required >
				<datalist  id="cause">
					<option value=" إصابة بجسم صلب ">
					<option value="إصابة بنصل حاد">
					<option value=" عيار ناري ">
					<option value="حوداث المرور ">
					<option value=" تسمم صبغه ">
					<option value=" حريق ">
					<option value=" صعق كهربائي ">
					<option value=" غرق ">
					<option value=" اشنق ">
					<option value=" علة رئوية">
					<option value=" كبدية">
					<option value=" عله قلبية">
					<option value=" إجهاض ">
					<option value="جروح وكسور ">
					<option value=" كسر في الجمجمه ">
					<option value=" إشتباه كورونا">
					<option value=" أطفال حديثي الولادة ">
					<option value="شهادة وفاة">
				</datalist>
			</section>
	 		<h3>اسم الطبيب   </h3>
	 		<input type="txt" name="doctoer_name" value="<?php echo $doctoer_name ;  ?>" class="input"placeholder="---------------------------------------------------------------------------------------"required>
	  	<h4  >صفة اللطبيب  </h4>
			<input type="txt" name="doctoer_description" value="<?php echo $doctoer_description ;  ?>" class="input"class="form2" placeholder="---------------------------------------------------------------------------------------"required>
			<center>
				<button class="but1" name="save" > تعديل+ </button>
				<button class="but1" name="labul" > القائمة  - </button>
				<hr>
			</center>
		</form>
	</body>
</html>