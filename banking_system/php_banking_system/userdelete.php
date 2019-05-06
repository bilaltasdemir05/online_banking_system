<html>
<body>
<?php
session_start();
include 'config.php';
// session kontrol
if ($_SESSION["username"]!="sahin"&&$_SESSION["password"]!="14531453")
{
   echo "giris basarýsýz";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}
?>
<form action="delete.php" method="post">
<!-- delete için kullanýcaðýmýz verileri aldýðýmý form -->
    <label>UserId  :</label><input type="text" name="userid" class="box"/><br /><br />
    
    <input type="submit" name="reg" value=" Delete User "/><br />
</form>
<form action="adminpanel.php">
<input type="submit" value="back">
</form>
</body>
</html>