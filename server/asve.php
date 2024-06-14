 
<?php
		 $username ="root";
		$passwoerd="";
        $servername = "localhost";
		$dbname = "clendb";

// Create connection
$conn = new mysqli($servername, $username, $passwoerd, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	if(isset($_GET['sireiel_num']))
	{		
		$sireiel_num = $_GET['sireiel_num'];	
		$sql= "SELECT * FROM leter WHERE sireiel_num =".$sireiel_num;
		$DoctorsQu = mysqli_query($conn,$sql);
		if ($DoctorsQu && mysqli_num_rows($DoctorsQu) > 0)
		{
  		// output data of each row

			$DoctorRow = mysqli_fetch_array($DoctorsQu);
			$anotome2 =$DoctorRow['anotome'];
			$description_of_corps2=$DoctorRow['description_of_corps'];	
		}
	}	
 ?>
 