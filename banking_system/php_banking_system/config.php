<?php
// veritabanı bağlantısı için gerekli bilgiler
    $servername = "localhost";
    $username = "sahin";
    $password = "14531453";
    $dbname = "giris";
// veritabanı bağlantımız
    $conn = new mysqli($servername, $username, $password, $dbname);
// bağlantı kontrol
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
