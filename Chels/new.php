<?php
include('connect-db.php');
$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
mysqli_query($connection, "INSERT INTO rakomea_newsletter (name,email) VALUES ('$name','$email')");
mysqli_close($connection);
?>