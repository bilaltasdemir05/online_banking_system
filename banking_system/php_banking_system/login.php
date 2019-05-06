<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
session_start();
?>
<?php
include 'config.php';



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$girisid=$_POST["username"];
$girispas=$_POST["password"];
// sql injection kontrol
if (preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $girisid) || preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $girispas)){
header('Refresh: 1; URL = index.php');
}






$sql = "SELECT username, password, yetki FROM login where username='" .$girisid. "' and password='" .$girispas. "'" ;
$result = $conn->query($sql);
// veritabanında eşleşme varsa sessionları atıyoruz
if ($result->num_rows > 0) {
    $_SESSION["username"] = $girisid;
    $_SESSION["password"] = $girispas;
}
    
if (($_SESSION["username"]!="") || ($_SESSION["password"]!="")) {
    echo "
              Login successful ";
			  
    echo "  please wait ";
	// giren admin mi kontrolu
    if($_SESSION["username"]=="sahin" && $_SESSION["password"] == "14531453")
        header('Refresh: 1; URL = adminpanel.php');
    else
		// giren user mi
        header('Refresh: 1; URL = userpanel.php');
  } else {
    echo "Invalid username and password";
	echo "br";
	echo "you are being redirected back";
    header('Refresh: 1; URL = index.php');
  }
$conn->close();
?> 

</body>
</html>