<?php
session_start();
include 'config.php';
// giren adminmi kontrolü yapıyoruz
if ($_SESSION["username"]!="sahin" && $_SESSION["password"]!="14531453" )
{
   echo "
login failed";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}else{
	$id =$_POST['userid'];
	if(preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $id)){
	header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');}else{
 
// silincek userın id sini aldığımız kısım
    
// idsini aldığımızzı veritabanında buluyoruz
	$sql = "DELETE FROM login WHERE id='".$id."'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Refresh: 2; URL = adminPanel.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
	}
}
?>
