<?php
session_start();
include 'config.php';

if ($_SESSION["username"]!="sahin" && $_SESSION["password"]!="14531453" )
{
   echo "giris basarýsýz";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}else{ // user eklemek icin gerekl bilgileri alýyorz
    $username = $_POST['username'];
    $password = $_POST['password'];
    $balance = $_POST['balance'];
    $debt = $_POST['debt'];
    $yetki="user";	
    if (preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $username) || preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $password) || preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $balance) ||preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $debt)){
header('Refresh: 1; URL = index.php');
}else{
    
// veritabanýna eklediðimiz kýsým
    $sql = "INSERT INTO login (username, password,bakiye,debt,yetki) VALUES ('".$username."','".$password."','".$balance."','".$debt."','".$yetki."')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Refresh: 1; URL = adminPanel.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
$conn->close();}
}
?>