	

<!DOCTYPE html>
<html>
<head>

        <title>TabloYapma</title>
        <meta charset="UTF-8">
    </head>

<?php
session_start();
include 'config.php';

if ($_SESSION["username"]=="")
{
   echo "giris basarýsýz";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}

?>
<body>
<table border=1>
  <tr>
    <th>username</th>
    <th>password</th> 
    <th>authority</th>
     <th>balance</th>
     <th>debt</th>
  </tr>


<?php

include 'config.php';

$servername = "localhost";
$username = "sahin";
$password = "14531453";
$dbname = "giris";

$conn = mysqli_connect($servername, $username, $password, $dbname);






	
// username e göre bilgileri cekiyoruz
$sql = "SELECT username, password, bakiye,yetki,debt FROM login where username='" .$_SESSION["username"]."' and password='" .$_SESSION["password"]. "'" ;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
    // eslesen sonuclarý alýyoruz
    while($row = $result->fetch_assoc()) {
		$username=$row["username"];
		$password=$row["password"];
		$authority=$row["yetki"];
		$bakiye=$row["bakiye"]." tl";
                $debt=$row["debt"]." tl";
		    echo "<tr>
            <td>$username</td>
            <td>$password</td>
            <td>$authority</td>
			<td>$bakiye</td>
             <td>$debt</td>
            </tr>";
	}} else {
    echo "0 results";
}
        
        

?>
</table>
<form action="userpanel.php">
<input type="submit" value="back">
</form>

</body>
</html>