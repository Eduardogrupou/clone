<?php
session_start();
require_once("admin/database.php");
require_once("admin/config.php");


if (isset($_GET['endereco'])) {

    $cep = $_GET['cep'];
    $rua = $_GET['rua'];
    $bairro = $_GET['bairro'];
    $cidade = $_GET['cidade'];
    $uf = $_GET['uf'];
    $numero = $_GET['numero'];
    $complemento = $_GET['complemento'];
    $nome = $_GET['nome'];
    
   

    $usuario = $_SESSION['user'];
    $sql = "UPDATE user SET cep='$cep', rua='$rua',bairro='$bairro',cidade='$cidade',uf='$uf', numero='$numero',complemento='$complemento',nome='$nome' WHERE email='$usuario'";
    
    if ($conn->query($sql) === TRUE) {
      //echo "New record created successfully";
    } else {
      //echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    
    }




?>