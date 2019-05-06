<!DOCTYPE html>

<html lang="en">
  
<head>
    
<meta charset="utf-8">
    
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<meta name="viewport" content="width=device-width, initial-scale=1">

    
<title>Bootstrap 4, from LayoutIt!</title>

    
<meta name="description" content="Source code generated using layoutit.com">
    
<meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
   
 <link href="css/style.css" rel="stylesheet">

  
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

    
<div class="container-fluid">
	
<div class="row">
		
<div class="col-md-3">
			
<img alt="USER34" src="images/user34.jpg" class="rounded-circle">
			
<ul>
				
<li class="list-item", style="font-size:35px;">
					<a href="paracekme.php">withdraw money</a>
				</li>
				<li class="list-item", style="font-size:35px;">
					<a href="parayat.php">pay in</a>
				</li>
				<li class="list-item", style="font-size:35px;">
					<a href="balance.php">asking for a balance</a>
				</li>
				<li class="list-item", style="font-size:35px;">
					<a href="credit.php">credit question</a>
				</li>
				<li class="list-item", style="font-size:35px;">
					<a href="debt.php">debt payment</a>
				</li>
				<li class="list-item", style="font-size:35px;">
					<a href="transfer.php">transfer</a>
				</li>
				
				<li class="list-item", tyle="font-size:35px;">
					<a href="logout.php">logout</a>
				</li>			
</ul>
		
</div>
		
<div class="col-md-9">
			
<ul class="nav">
				
<li class="nav-item">
					<a class="nav-link active" href="userpanel.php">Home</a>
				</li>
				
<li class="nav-item">
					<a class="nav-link" href="#">Profile</a>
				</li>
				
<li class="nav-item">
					<a class="nav-link disabled" href="#">Messages</a>
				</li>
				
<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
					
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
						
<div class="dropdown-divider">
						</div> <a class="dropdown-item" href="#">Separated link</a>
					</div>
				</li>
			</ul>
			<div class="page-header">
				
<h1>
					
Welcome <small>This page to withdraw money</small>
				</h1>
			
</div>
			
<form role="form" action="islem.php" method="post">
				
<div class="form-group">
					 
					
<label >
						
<strong>Amount of money</strong>
					</label>
					
<input type="number"  name="girilenpara">
				</div>
				
<div class="form-group">
					 
					
<label >
						<strong>Username</strong>					</label>
					
<input type="text" class="form-control" name="girilenusername">
				</div>
	
<div class="form-group">
					 
					
<label >
						<strong>ACCOUNT ID</strong>					</label>
					
<input type="text" class="form-control" name="girilenid">
				</div>

<div class="form-group">
					 
					
<label >
						<strong>password</strong>					</label>
					
<input type="password" class="form-control" name="girilenpass">
				</div>
					
				
					
				
							
<button type="submit" class="btn btn-primary">
					PROCESSING
				</button>
			
</form>
		
</div>
	
</div>

</div>

    
<script src="js/jquery.min.js"></script>
    
<script src="js/bootstrap.min.js"></script>
    
<script src="js/scripts.js"></script>
 


</body>

</html>