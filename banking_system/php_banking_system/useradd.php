<html>
<body>
<?php
session_start();
include 'config.php';
//session kontrol
if ($_SESSION["username"]!="sahin"&& $_SESSION["password"]!="14531453")
{
   echo "giris basarýsýz";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}
?>

<form action="add.php" method="post">
<!-- user add formu  -->
    <label>Username  :</label><input type="text" name="username" class="box"/><br /><br />
    <label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
    <label>balance  :</label><input type="text" name="balance" class="box" /><br/><br />
    <label>debt  :</label><input type="text" name="debt" class="box" /><br/><br />
    <input type="submit" name="reg" value=" Register User "/><br />
</form>
<form action="adminpanel.php">
<input type="submit" value="back">
</form>

</body>
</html>
