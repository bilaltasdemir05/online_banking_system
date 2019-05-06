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
session_start();
include 'config.php';
# session kontrol 
if ($_SESSION["username"]=="")
{
   echo "giris basarýsýz";
   header('Refresh: 0.00000000000000000000000000000000001; URL = index.php');
}

?>



  <body>
    <!-- resim ekleme -->
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<img alt="image" src="images/user34.jpg" class="rounded-circle">
		</div>
		<div class="col-md-9">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="userpanel.php">Home</a>
				</li>
				
			</ul>
		</div>
	</div>
	<!-- menü oluþturuyoruz -->
	<div class="row"> 
		<div class="col-md-3">
			<ul>
				<li class="list-item", style="font-size:35px;">
					<a href="paracekme.php">withdraw money</a>
				</li>
				<li class="list-item", style="font-size:35px;">
					<a href="parayat.php">pay in</a>
				</li>
				<li class="list-item", style="font-size:35px;">
					<a href="balance.php">account info</a>
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
			</ol>
		</div>
		<div class="col-md-9"> <!-- konuyla ilgili paragrafýmýzý yazýyoruz -->
			<p>  
				Welcome to the banking system where you will make transactions are recorded for your safety.
			</p>
			<blockquote class="blockquote text-right">
				<p class="mb-0">   <!-- özlü söz eklediðimiz kýsým -->
					Banker; is a man who gives you an umbrella in nice weather and gets back a rainy day.
				</p>
				<footer class="blockquote-footer">
					Wordwost 
				</footer>
			</blockquote> 
			<address>    
				 <strong>Ankara, Turkey.</strong><br> Gazi University, Maltepe <br> Ankara<br> <abbr title="Phone">P:</abbr> (543) 286-0380
			</address>
			<div class="media">
				<img class="mr-3" alt="gazi" src="images/gazi.jpg"><!-- gazi reklamý -->
				<div class="media-body">
					<h5 class="mt-0">  
						<!-- haber satýrlarýný eklediðim kýsým -->
                                                 Gazi University's Name Changes
					</h5> 
Students are sad about this and want the name of the university of Gazi not to change.
					<div class="media mt-3">
						 <a class="pr-3" href="#"><img alt="odul" src="images/odul.jpg"></a>
						<div class="media-body">
							<h5 class="mt-0">
								Gazi University students received awards
							</h5> 
Gazi University students were 2nd in the CTF competition organized at Gazi University
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	<!-- ve en önemli þey müziðimiz -->
 <audio controls autoplay loop >
  <source src="2.ogg" type="audio/ogg">
  <source src="akbank.mp3" type="audio/mpeg">}
</audio>
<!-- þahin kurt tarafýndan yazýlmýþtýr -->
  </body>
</html>