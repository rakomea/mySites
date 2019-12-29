<?php
include('connect-db.php');
$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
mysqli_query($connection, "INSERT INTO caf_newsletter (email) VALUES ('$email')");
mysqli_close($connection);
?>