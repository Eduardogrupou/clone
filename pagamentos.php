<?php  
session_start();

require_once("admin/database.php");
require_once("admin/config.php");


$plano = $_GET['plano'];
$status = $_GET['status'];

$usuario = $_SESSION['user'];


$sql = "UPDATE user SET plano='$plano', status='$status' WHERE email='$usuario'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo '<script> window.location.href = "http://orvalhosj.com/dashboard.php";
</script>'


?>