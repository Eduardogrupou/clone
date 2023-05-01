<?php
session_start();
require_once("admin/database.php");
//echo "teste";
require_once("admin/config.php");


if (isset($_GET['cep'])) {

    $cep = $_GET['cep'];
    $rua = $_GET['rua'];
    $bairro = $_GET['bairro'];
    $cidade = $_GET['cidade'];
    $uf = $_GET['uf'];
    $numero = $_GET['numero'];
    $complemento = $_GET['complemento'];
    $nome = $_GET['nome'];



    $usuario = $_SESSION['user'];

    //echo $usuario;
    $sql = "UPDATE user SET cep='$cep', rua='$rua',bairro='$bairro',cidade='$cidade',uf='$uf', numero='$numero',complemento='$complemento',nome='$nome' WHERE email='$usuario'";

    if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}?>

<script>
    var plano = localStorage.getItem("plano");
    if (plano == "Mensal Bronze") {
        window.location.href = "https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808481f254d20181f32188320085";
    }

    var plano = localStorage.getItem("plano");
    if (plano == "Mensal Prata") {
        window.location.href = "https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808481f254d20181f32188320085";
    }

    var plano = localStorage.getItem("plano");
    if (plano == "Mensal Ouro") {
        window.location.href = "https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808481f254d20181f32188320085";
    }

    var plano = localStorage.getItem("plano");
    if (plano == "Semestral Bronze") {
        window.location.href = "https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808481f254d20181f32188320085";
    }

    var plano = localStorage.getItem("plano");
    if (plano == "Semestral Prata") {
        window.location.href = "https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808481f254d20181f32188320085";
    }

    var plano = localStorage.getItem("plano");
    if (plano == "Semestral Ouro") {
        window.location.href = "https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808481f254d20181f32188320085";
    }
</script>