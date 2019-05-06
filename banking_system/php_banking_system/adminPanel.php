<html lang="en">

 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>banking system</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>



<?php
// session kontrol
session_start();
include 'config.php';
// giren admin mi
if ($_SESSION["username"]!="sahin"&&$_SESSION["password"]!="14531453")
{
   echo "giris basarısız";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}
?>



  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<img alt="image" src="images/patron.jpg" class="rounded-circle">
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-3">
			<ul><!-- liste olusturuluyor -->
				<li class="list-item", style="font-size:35px;">
					<a href="useradd.php">user add</a>
				</li>
				<li class="list-item", style="font-size:35px;">
					<a href="userdelete.php">user delete</a>
				</li>
				
				<li class="list-item", style="font-size:35px;">
					<a href="listuser.php">list user details</a>
				</li>
                                <li class="list-item", tyle="font-size:35px;">
					<a href="logout.php">logout</a>
				</li>
				
			</ol>
		</div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
 
  </body>
</html>