<?php
session_start();
include 'config.php';
// session kontrol
if ($_SESSION["username"]=="")
{
   echo "giris basarısız";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}
// girilen bilgileri atama
$girisusername=$_POST["girilenusername"];
$girisid=$_POST["girilenid"];
$girispara=$_POST["girilenpara"];
$conn = new mysqli($servername, $username, $password, $dbname);
if (preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $girisusername) || preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $girisid)||preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $girispara)){
header('Refresh: 1; URL = index.php');
}else{



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT bakiye FROM login WHERE username='" .$girisusername. "' and id='" .$girisid. "'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    
    while($row = $result->fetch_assoc()) {
		
	      $bakiye=$row["bakiye"];}
}
echo "bakiye=".$bakiye."<br>";
$yenibakiye=($bakiye)+($girispara);
echo "yenibakiye=".$yenibakiye."<br>";
// bakiye kontrolü
if($yenibakiye<0){
   echo "işlem başarısız bakiyeniz yetersiz";
   header('Refresh: 0.00000000000000000000000000000000001; URL = paracekme.php');
}
if($yenibakiye>=0){
$sql = "UPDATE login SET bakiye=".$yenibakiye." WHERE id='" .$girisid. "'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header('Refresh: 5; URL = paracekme.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
}
$conn->close();
?>
<form action="userpanel.php">
<input type="submit" value="back">
</form>