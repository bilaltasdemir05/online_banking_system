<?php
session_start();
include 'config.php';

if ($_SESSION["username"]=="")
{
   echo "giris basar�s�z";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}else{

$girisusername=$_POST["girilenusername"];
$girisid=$_POST["girilenid"];
$girispara=$_POST["girilenpara"];
$girispass=$_POST["girilenpass"];
$aliciusername=$_POST["aliciusername"];
$aliciid=$_POST["aliciid"];
$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT bakiye FROM login WHERE username='" .$girisusername. "' and id='" .$girisid. "' and  password='" .$girispass. "'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
	      $bakiye=$row["bakiye"];}


echo "bakiye=".$bakiye."<br>";
$yenibakiye=($bakiye)-($girispara);
echo "yenibakiye=".$yenibakiye."<br>";
// bakiye 0 dan k�c�k olamaz kontrol�
if($yenibakiye<0){
   echo "
insufficient balance";
   header('Refresh: 5; URL = paracekme.php');
}
if($yenibakiye>=0){
$sql = "UPDATE login SET bakiye=".$yenibakiye." WHERE username='" .$girisusername. "' and id='" .$girisid. "' and  password='" .$girispass. "'" ;

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
		header('Refresh:5; URL = paracekme.php');
	} else {
		echo "Error updating record: ";
	}
}
   echo "Error updating record: ";
    header('Refresh:5; URL = paracekme.php');
	}



	
}
	
$conn->close();
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT bakiye FROM login WHERE username='" .$aliciusername. "' and id='" .$aliciid. "'"  ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
		
		
	while($row = $result->fetch_assoc()) {
			
		$bakiye1=$row["bakiye"] ;
	}
			  
			 
	$yenibakiye1=($bakiye1)+($girispara);
	$sql = "UPDATE login SET bakiye=".$yenibakiye1."  WHERE username='" .$aliciusername. "' and id='" .$aliciid. "'"  ;


	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
		header('Refresh:5; URL = transfer.php');
	} else {
		echo "Error updating record: ";
	}
}else{

	
	   echo "Error updating record: ";
		header('Refresh:5; URL = transfer.php');
}


    
$conn->close();
?>
