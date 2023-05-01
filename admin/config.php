

<?php
$servername = "162.241.60.223";
$username = "orvalh39_perfume";
$password = "Atecco@123";
$dbname = "orvalh39_perfume";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  echo("Connection failed: " . mysqli_connect_error());
}


?>
