<?php
session_start();
include 'config.php';

if ($_SESSION["username"]=="")
{
   echo "giris basarısız";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}
$girisusername=$_POST["girilenusername"];
$girisid=$_POST["girilenid"];
$girispara=$_POST["girilenpara"];
$girispass=$_POST["girilenpass"];
$conn = new mysqli($servername, $username, $password, $dbname);
    if (preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $girisid) || preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $girispara) ||preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $girispass)){
header('Refresh: 1; URL = index.php');
}else{



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT bakiye FROM login WHERE username='" .$girisusername. "' and id='" .$girisid. "' and  password='" .$girispass. "'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    
    while($row = $result->fetch_assoc()) {
		
	      $bakiye=$row["bakiye"];}


echo "bakiye=".$bakiye."<br>";
$yenibakiye=($bakiye)-($girispara);
echo "yenibakiye=".$yenibakiye."<br>";
if($yenibakiye<0){
   echo "
insufficient balance";
   header('Refresh: 3; URL = paracekme.php');
}
if($yenibakiye>=0){
$sql = "UPDATE login SET bakiye=".$yenibakiye." WHERE username='" .$girisusername. "' and id='" .$girisid. "' and  password='" .$girispass. "'" ;

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header('Refresh:3; URL = paracekme.php');
} else {
    echo "Error updating record: ";
}
}

}else{
   echo "Error updating record: ";
    header('Refresh:1; URL = paracekme.php');
}
}

$conn->close();
?>
<form action="userpanel.php">
<input type="submit" value="back">
</form>