<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blue Dynasty</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script>
		function openForm() {
		  document.getElementById("myForm").style.display = "block";
		}
		function closeForm() {
		  document.getElementById("myForm").style.display = "none";
		}
	</script>
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body class="home">
	<div class="main">
	<ul id="cbp-bislideshow" class="cbp-bislideshow">
		<li><img src="images/1.jpg" alt="Callum Hudson-Odoi"/></li>
		<li><img src="images/2.jpg" alt="Mason Mount"/></li>
		<li><img src="images/3.jpg" alt="Tammy Abraham"/></li>
	</ul>
	</div>
		<div class="top-left">
			<h1>BLUE CUBS</h1>
			<a href="index.php">
			<img src="images/chelsealogo.png" alt="Logo">
			</a>
		</div>

		<div class="bottom-right">
			<button class="open-button" onclick="openForm()">Sign up for our Newsletter</button>
			<div class="form-popup" id="myForm">
			<div id="form-wrapper">
			  <form method="post" action="#" id="subscription-form" class="form-container">
			    <h1>Sign Up</h1>
			    <label for="name"><b>Name</b></label>
			    <input type="text" placeholder="Enter Your Name" id="name" name="name" style="width: 200px;" required>
			    <label for="email"><b>Email</b></label>
			    <input type="text" placeholder="Enter Email" id="email" name="email" style="width: 200px;" required>
			    <button type="submit" name="submit" value="Subscribe" class="btn">Sign Up</button>
			    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
			  </form>
			</div> 
			</div>
		</div>

	<main class="bottom-left">
		<h1>CHELSEA'S YOUNG STARS</h1>
		<p>Chelsea’s academy has churned out some of the best young footballers in world football who have won the FA Youth Cup nine times and produced many successful players such as John Terry. This is a page deidacted to learning about the young English stars who have taken the league by storm.</p>	
	</main>
	
	<div class="top-right">
        <div class="dropdown">
		  <button class="dropbtn">Learn about the Young Blues</button>
		  	<div class="dropdown-content">
			<a href="callum.php">Callum Hudson-Odoi</a>
			<a href="mount.php">Mason Mount</a>
			<a href="tammy.php">Tammy Abraham</a>
		  	</div>
		</div>
	</div>
	<footer>
		<p>Richard Akomea</p>
		<p>CSC 174: Advanced Front-end Web Design and Development</p>		
	</footer>
	<?php include "inc/scripts.php";?>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
	<script src="js/jquery.imagesloaded.min.js"></script>
	<script src="js/cbpBGSlideshow.min.js"></script>
	<script>
		$(function() {
			cbpBGSlideshow.init();
		});
	</script>
	<script>
		$("#subscription-form").submit(function(e) {
		var formData = $("#subscription-form").serialize();
		$.ajax({
			type: 'POST',
			url: "new.php",
			data: formData,
			success: function(data){
				$("#form-wrapper").html("Thank you for subscribing!");
			}
		});
		e.preventDefault();
	});
	</script>
</body>
</html>