<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CAF|Confederation of African Football</title>
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
</head>
<body class="fullBackground">
	<div class ="home">
		<div class="top-left">
			<a href="index.php">
			<img src="images/caf.png" alt="Logo">
			</a>
		</div>

		<div class="bottom-right">
			<?php include "inc/sign-up.php";?>
		</div>

	<main class="bottom-left">
		<h1>OVERVIEW</h1>
		<p>The Confederation of African Football or CAF represents the national football associations of Africa that runs continental, national, and club competitions, and controls the prize money, regulations and media rights to those competitions. Welcome to the hub of African football.</p>	
	</main>
	
	<div class="top-right">
        <nav >
		<ul>
			<li><a href="history.php">HISTORY</a></li>
			<li><a href="teams.php">TEAMS</a></li>
			<li><a href="fans.php">FANS</a></li>
		</ul>
		</nav>
	</div>
	<footer>
	CSC 174: Advanced Front-end Web Design and Development
	From <a href="https://en.wikipedia.org/wiki/Confederation_of_African_Football"> CAF Wiki</a>
	</footer>
	<?php include "inc/scripts.php";?>
	<script>
$('.fullBackground').fullClip({
  images: ['images/1.jpg', 'images/2.jpg', 'images/3.jpg'],
  transitionTime: 1000,
  wait: 3500
});
</script>
</div>
</body>
</html>