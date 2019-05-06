<!DOCTYPE html>
<html>
<head>
        <title>TabloYapma</title>
        <meta charset="UTF-8">
    </head>

<body>
<table border=1>
<!-- table baslýklarý -->
  <tr>
    <th>Id</th>
    <th>username</th>
    <th>password</th> 
    <th>authority</th>
	<th>balance</th>
	<th>debt</th>
  </tr>
<?php
session_start();
include 'config.php';
// admin girmemiþse bu sayfaya ulaþamasýn kontrolü
if ($_SESSION["username"]!="sahin" && $_SESSION["password"]!="14531453" )
{
   echo "giris basarýsýz";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}else{

    $conn = mysqli_connect($servername, $username, $password, $dbname);






	

$sql = "SELECT *  FROM login";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
    
    while($row = $result->fetch_assoc()) {
        // tablolara verileri yerleþtiriyoruz        
		$Id=$row["id"];
		$username=$row["username"];
		$password=$row["password"];
		$authority=$row["yetki"];
		$bakiye=$row["bakiye"]." tl";
		$debt=$row["debt"]." tl";
		    echo "<tr>
            <td>$Id</td>
            <td>$username</td>
            <td>$password</td>
            <td>$authority</td>
			<td>$bakiye</td>
			<td>$debt</td>
            </tr>";
        
        
    }
} else {
    echo "0 results";
}
}
?>
</table>
<form action="adminpanel.php">
<input type="submit" value="back">
</form>

</body>
</html>
