

<?php 	

	
	//================================================================================
    $username ="root";
	$passwoerd="";
    $database = new PDO("mysql:host=localhost;dbname=clendb;charset=utf8;",	$username,$passwoerd);
    $read_data = $database->query("SELECT * FROM leter");
	$sireiel_num = '';
	if(isset($_GET['sireiel_num']))
	{		
		$sireiel_num = $_GET['sireiel_num'];	
		$depSql= "SELECT * FROM leter WHERE sireiel_num =" . $sireiel_num;
	
			$MyTitel = "report";
			$BodyGender = "";
		//CheckUserViewPermission($connection,$PermissionID , "1=1");
	} 
	else
	{ //No Depenture found by this No & Type
		$ErrorFlage = true;
	
	}	

if(isset($_SESSION['SystemLanguage']) && $_SESSION['SystemLanguage'] == 1) {
	echo '<html lang="en" dir="ltr">';
} else {
	echo '<html lang="ar" dir="rtl">';
}
?>
	<head>
		
		<meta http-equiv="Content-Language" content="ar-sa">
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
		<link type="text/css" href="css/report.css" rel="stylesheet"> 
		<title>repoert</title>

	</head>
	
	<body>
		<div id="wrap">
			<div id="tool-box" class="noprint">
			<button class="but" onclick="window.print()">طباعة </button>
			</div>

			<div id="content" style="min-height: 3cm;">
				<div id="report-header" >
					<img src="report-header.png" style="width:100%; padding-bottom:5px;">
				</div>
				<div id="sub-content">
					<form action="" method="post" id="feesform">
						<div >
							<div id="reciept">
								<center>
								<h2 id="t2" style="background-color:#7fffd4;">تقرير  تشريح  جثمان بتكليف من النيابة </h2>
								</center>							
	<?php
		include ("asve.php");

		foreach($read_data as $data){
													
			if($data["sireiel_num"]==$sireiel_num)
			{

				echo '<div id="regTable">';
				echo '<table name="NameOfTableToExport" class="titles" style="margin-top:10px;text-align: right;">';
				echo '<tr>';
				echo '<th style="width:20%"> الرقم المتسلسل: </th>
				      	<td style="width:30%">'.$data['sireiel_num'].'</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<th style="width:20%"> رقم الدخول  : </th> <td style="width:30%">'.$data['num_login'].'</td>'; 
				echo '<th style="width:20%"> تاريخ الدخول  : </th> <td style="width:30%">'.$data['date_login'].'</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<th>الاسم: </th> <td>'.$data['name'].'</td>';
				echo '<th style="width:20%">النوع: </th> <td style="width:30%">'.$data['gener'].'</td>'; 
				echo '</tr>';
				echo '<th style="width:20%"> العمر: </th> <td style="width:30%">'.$data['age'].'</td>'; 								
				echo '<th style="width:20%">طول الجثة : </th> <td style="width:30%">'.$data['corpse_length'].'</td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<th>رقم القيد</th> <td>'.$data['num_constraint'].'</td>';
				echo '<th style="width:20%">رقم الصفحة: </th> <td style="width:30%">'.$data['num_pag'].'</td>'; 
				echo '<tr>';
				echo '<th>النيابة المصدره للتشريح: </th> <td>'.$data['procuratorate'].'</td>';
				echo '</tr>';	
				echo '<tr>';
				echo '<th>مستشفي اثبات الوفاة : </th> <td style="width:30%">'.$data['hospital'].'</td>';
				echo '</tr>';
				echo '<tr>';
				echo '<th>زمن وتاريخ الشريح: </th> <td style="width:30%">'.$data['anotme_time'].'_||_'.$data['anotme_date'].'</td>';
				echo '</tr>';
				echo '<tr>';
				echo '<th>  الاوصاف الخارجية للجثة  : <td> <textarea name="anotome2" style="width:300px;height: 150px;border-style: none;  " disabled=>'.$description_of_corps2.'</textarea> </td>';
				echo '</tr>';
		        echo '<tr>';
				echo '<th> التشريح  : <td > <textarea name="anotome2"  style="width:300px;height: 150px; border-style: none; " disabled=>'.$anotome2.'</textarea> </td>';
				echo '</tr>';
				echo '<th> اسباب الوفاة  :</th> <td style="width:30%">'.$data['cause'].'</td>';
				echo '</tr>';
				echo '</tr>';
				echo '<th colspan="2" style="font-weight: bold;"></th> <td colspan="2" style="font-weight: bold;">'.$data['doctoer_name'].'</td>'; 
				echo '</tr>';
				echo '<tr style="border-bottom:none; background-color:white;">';
				echo '<td colspan="4" style="text-align:left; font-weight: bold;">'.$data['doctoer_description'].'</td>';
				echo '</tr>';
			echo '</table>';											
		echo '</div>';
		echo '</div>';
			}	
		}										
								?>


							</div>
						</div>
					</form>
				</div><!-- end sub content-->
			</div> <!-- end content-->
		</div>	<!-- END of WRAP -->
		<!-- FOOTER -->
		<!-- ENDS FOOTER -->
	</body>
</html>
