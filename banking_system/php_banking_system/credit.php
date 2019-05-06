<!DOCTYPE html>
<html>
<head>

        
        <meta charset="UTF-8">
    </head>
<body>
<?php
session_start();
include 'config.php';
// session kontrol
if ($_SESSION["username"]=="")
{
   echo "giris basarýsýz";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}

?>


<?php

include 'config.php';

$servername = "localhost";
$username = "sahin";
$password = "14531453";
$dbname = "giris";

$conn = mysqli_connect($servername, $username, $password, $dbname);






	
//veritabanýndan bilgileri cekiyoruz
$sql = "SELECT username, password, bakiye,yetki,debt FROM login where username='" .$_SESSION["username"]."' and password='" .$_SESSION["password"]. "'" ;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
    
    while($row = $result->fetch_assoc()) {
		$username=$row["username"];
		$password=$row["password"];
		$authority=$row["yetki"];
		$bakiye=$row["bakiye"];
                $borc=$row["debt"];
		
        
        
    }
} else {
    echo "0 results";
}


if($borc>=$bakiye){
echo "debt is higher than balance you cant you can not get credit";
header('Refresh: 5; URL = userpanel.php');
}
if($bakiye>$borc)
{
$kredi=($bakiye-$borc)*0.2;
if($kredi>0){
echo " you can get ".$kredi."tl" ;
header('Refresh: 5; URL = userpanel.php');
}else{
	echo "debt is higher than balance you cant you can not get credit";
    header('Refresh: 5; URL = userpanel.php');
}
}
?>
<form action="userpanel.php">
<input type="submit" value="back">
</form>



</body>
</html>
