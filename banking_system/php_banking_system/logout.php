<?php
   session_start();
   // sessionları sıfırlıyoruz
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Successful out';
   // index sayfamıza geri dönüyoruz
   header('Refresh: 2; URL = index.php');
?>