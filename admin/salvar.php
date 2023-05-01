<?php  
include('config.php');

$username = $_POST["username"];
$email = $_POST["email"];
$status = $_POST["status"];
$address = $_POST["address"];

$sql = "UPDATE  user SET 
username ='{$username}',
email ='{$email}',
status ='{$status}',
address ='{$address}'
  WHERE id=".$_REQUEST["id"];


$res = $conn -> query($sql);

if ($conn->query($sql) === TRUE) {
    echo "<script>location.href='subscribed_clientes.php'</script>";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();





?>