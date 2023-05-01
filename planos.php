<?php
require_once("admin/database.php");
require_once("admin/config.php"); 
$sql = "SELECT  imagem FROM baner WHERE imagem_id='2'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();



$imagem = $row["imagem"];
$email = 'rutherles@gmail.com';


$_SESSION['email'] =$email;
$query = "SELECT * FROM user WHERE email='$email'";
$products = db::getRecord($query);




if ($_SESSION['email']) {

    $quiz = "quiz.php";
} else {

    $quiz = "login.php";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <?php include 'imports.php'; ?>

    <style>
    .btlogin {
        color: "#ab8e66";
        width: "80%";
        align-items: center;
        align-self: center;
        align-content: center;
    }

    .login-popup .btn {
        display: block;
        padding-top: 0.79em;
        padding-bottom: 0.79em;

        border-radius: 5px;
        text-align: center !important;
    }

    .mr-sm-2 {
        margin-right: 15px;
    }

    .container1 {
        width: 100%;

        clear: both;
    }

    a {
        display: inline-block;
        color: #fff;
        text-decoration: none;
        font-family: Poppins, sans-serif;
        letter-spacing: 0.9px;
    }

    nav {
        background: #141414;
        height: 60px;
        line-height: 60px;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9998;
        transition: all 0.5s;
    }

    nav.scrollUp {
        transform: translateY(-80px);
    }

    nav ul.navbar-menu {
        margin: 0;
        padding: 0;
        display: inline-block;
        float: right;
    }

    nav ul.navbar-menu li {
        display: inline-block;
        margin: 0 10px;
    }

    nav ul.navbar-menu li a {
        color: #fff;
        font-size: 14px;
    }

    nav a#brand {
        text-transform: uppercase;
        float: left;
        font-weight: 800;
        font-size: 20px;
    }

    nav button {
        background: none;
        width: 30px;
        height: 40px;
        margin-top: 20px;
        border: none;
        float: right;
        display: inline-block;
        cursor: pointer;
        display: none;
    }

    nav button span {
        width: 30px;
        height: 40px;
        height: 2px;
        background: #333;
        display: block;
        margin: 5px 0;
    }

    @media (max-width: 768px) {
        nav ul.navbar-menu {
            display: none;
        }

        nav button {
            display: block;
        }
    }
    </style>
    <script>
    $(document).ready(function() {

        'use strict';

        var c, currentScrollTop = 0,
            navbar = $('nav');

        $(window).scroll(function() {
            var a = $(window).scrollTop();
            var b = navbar.height();

            currentScrollTop = a;

            if (c < currentScrollTop && a > b + b) {
                navbar.addClass("scrollUp");
            } else if (c > currentScrollTop && !(a <= b)) {
                navbar.removeClass("scrollUp");
            }
            c = currentScrollTop;

            console.log(a);
        });

    });
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets2/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">
    <title>
        Nossos Planos
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="assets2/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets2/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/steps.planos.css" rel="stylesheet" />
</head>
  <div id="nav" >
            <?php
            require("components/navBar.php");

            ?>
        </div>



<body>

    <!-- End Navbar -->
    <div class="page-header bg-gradient-dark position-relative m-3 border-radius-xl min-vh-50"
        style="background-image: url('http://orvalhosj.com/admin/uploads/<?php echo $imagem ?>');">
        <span class="mask bg-gradient-dark opacity-2"></span>
        <div class="container py-10 postion-relative z-index-2">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 style="font-family: Poppins, sans-serif; color:#fff" class="text-white1">Escolha seu plano </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5 my-6">
        <div class="card mt-n8">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6 col-7 mx-auto text-center">
                        <div class="nav-wrapper mt-5 position-relative z-index-2">
                            <ul class="nav nav-pills nav-fill flex-row p-1" id="tabs-pricing" role="tablist">
                                <li class="nav-item">
                                    <a style="font-family: Poppins, sans-serif; color:#000" class="nav-link mb-0 active"
                                        id="tabs-iconpricing-tab-1" data-bs-toggle="tab" href="#monthly" role="tab"
                                        aria-controls="monthly" aria-selected="true">
                                        Mensal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="font-family: Poppins, sans-serif; color:#000" class="nav-link mb-0"
                                        id="tabs-iconpricing-tab-2" data-bs-toggle="tab" href="#annual" role="tab"
                                        aria-controls="annual" aria-selected="false">
                                        Semestral
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="monthly">
                        <div class="row">
                            <div class="col-lg-4 mb-lg-0 mb-4">
                                <div class="card shadow-lg">
                                    <span style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                        class="badge rounded-pill bg-light text-dark w-30 mt-n2 mx-auto">Básico</span>
                                    <div class="card-header text-center pt-4 pb-3">
                                        <h1 style="font-family: Poppins, sans-serif; color:#000"
                                            class="font-weight-bold mt-2">
                                            <small style="font-family: Poppins, sans-serif; color:#000"
                                                class="text-lg align-top me-1">R$</small>59<small
                                                class="text-lg">/mês</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Receba 1 Perfume por mês </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Frete grátis </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Fornecimento para 30 dias
                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">remove</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Acesso a mais de 600 fragrâncias </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">remove</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Veja
                                                todas as fragrâncias padrão </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">remove</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Embalagem personalizada </span>
                                        </div>
                                        <a id="basicomensal" href="<?php echo $quiz; ?>"
                                            style="font-family: Poppins, sans-serif; color:#fff"
                                            class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                                            Assinar
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-lg-0 mb-4">
                                <div class="card bg-gradient-dark shadow-lg">
                                    <span style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                        class="badge rounded-pill bg-primary w-30 mt-n2 mx-auto">Avançado</span>
                                    <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                        <h1 style="font-family: Poppins, sans-serif; color:#fff"
                                            class="font-weight-bold mt-2 text-white1">
                                            <small style="font-family: Poppins, sans-serif; color:#fff"
                                                class="text-lg align-top me-1">R$</small>89<small
                                                class="text-lg">/mês</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1" style="color: #fff;">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Receba 2 perfumes por mês</span>
                                        </div>
                                        <div style="font-family: Poppins, sans-serif; color:#fff"
                                            class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Frete grátis </span>
                                        </div>
                                        <div style="font-family: Poppins, sans-serif; color:#fff"
                                            class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; justify-content:start"
                                                class="ps-3 text-white1">Receba 2 fragrâncias </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i style="color: #fff;" class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Fornecimento para 30 dias </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">remove</i>
                                            <span style="font-family: Poppins, sans-serif; color:#fff; text-align:start"
                                                class="ps-3 text-white1">Acesso a mais de 850 fragrâncias</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">remove</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff; text-align:start "
                                                class="ps-3 text-white1">Embalagem personalizada </span>
                                        </div>
                                        <a id="basicosemestral" href="<?php echo $quiz; ?>" onclick="mensalBronze()"
                                            style="font-family: Poppins, sans-serif; color:#fff"
                                            class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                                            Assinar
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-lg-0 mb-4">
                                <div class="card shadow-lg">
                                    <span class="badge rounded-pill bg-light text-dark w-30 mt-n2 mx-auto">Master</span>
                                    <div class="card-header text-center pt-4 pb-3">
                                        <h1 class="font-weight-bold mt-2">
                                            <small style="font-family: Poppins, sans-serif; color:#000"
                                                class="text-lg align-top me-1">R$</small>99<small
                                                class="text-lg">/mês</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Receba 3 perfumes por mês</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Frete grátis </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Receba 2 fragrâncias </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Fornecimento para 30 dias </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Acesso a mais de 850 fragrâncias</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Embalagem personalizada</span>
                                        </div>
                                        <a id="mastermensal" href="<?php echo $quiz; ?>"
                                            style="font-family: Poppins, sans-serif; color:#fff"
                                            class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                                            Assinar
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="annual">
                        <div class="row">
                            <div class="col-lg-4 mb-lg-0 mb-4">
                                <div class="card shadow-lg">
                                    <span style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                        class="badge rounded-pill bg-light text-dark w-30 mx-auto">Básico</span>
                                    <div class="card-header text-center pt-4 pb-3">
                                        <h1 class="font-weight-bold mt-2">
                                            <small style="font-family: Poppins, sans-serif; color:#000"
                                                class="text-lg align-top me-1">R$</small>119<small
                                                class="text-lg">/mês</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Receba 1 perfume por mês</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Frete grátis </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                style="font-family: Poppins, sans-serif; color:#000" class="ps-3">Receba
                                                1 fragrância </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Fornecimento para 30 dias </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Acesso a mais de 850 fragrâncias</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Caixa de lembrança</span>
                                        </div>
                                        <a id="mastersemestral" href="<?php echo $quiz; ?>"
                                            style="font-family: Poppins, sans-serif; color:#fff"
                                            class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                                            Assinar
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-lg-0 mb-4">
                                <div class="card bg-gradient-dark shadow-lg">
                                    <span style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                        class="badge rounded-pill bg-primary w-30 mx-auto">Avançado</span>
                                    <div class="card-header text-center pt-4 pb-3 bg-transparent">
                                        <h1 class="font-weight-bold mt-2 text-white1"
                                            style="font-family: Poppins, sans-serif; color:#fff !important">
                                            <small style="font-family: Poppins, sans-serif; color:#fff !important"
                                                class="text-lg align-top me-1">R$</small>159<small
                                                class="text-lg">/mês</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Receba 2 perfumes por mês

                                            </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Frete grátis </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Receba 2 fragrâncias</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Fornecimento para 30 dias</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Acesso a mais de 850 fragrâncias </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto text-white1">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#fff ; text-align: start"
                                                class="ps-3 text-white1">Caixa de lembrança </span>
                                        </div>
                                        <a id="avancadomensal" href="<?php echo $quiz; ?>"
                                            style="font-family: Poppins, sans-serif; color:#fff"
                                            class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                                            Assinar
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-lg-0 mb-4">
                                <div class="card shadow-lg">
                                    <span style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                        class="badge rounded-pill bg-light text-dark w-30 mx-auto">Master</span>
                                    <div class="card-header text-center pt-4 pb-3">
                                        <h1 class="font-weight-bold mt-2">
                                            <small style="font-family: Poppins, sans-serif; color:#000"
                                                class="text-lg align-top me-1">R$</small>399<small
                                                class="text-lg">/mês</small>
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Receba 3 perfumes por mês</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Frete grátis </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Receba 3 fragrâncias</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Fornecimento para 30 dias </span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Acesso a mais de 850 fragrâncias</span>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-start p-2">
                                            <i class="material-icons my-auto">done</i>
                                            <span
                                                style="font-family: Poppins, sans-serif; color:#000 ; text-align: start;"
                                                class="ps-3">Caixa de lembrança </span>
                                        </div>
                                        <a id="avancadosemestral" href="<?php echo $quiz; ?>"
                                            style="font-family: Poppins, sans-serif; color:#fff"
                                            class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
                                            Assinar
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-8 mx-auto text-center">
                    <h6 class="opacity-5"> Mais de 50 marcas entre as melhores do mundo </h6>
                </div>
            </div>



            <div class="container-fluid d-flex justify-content-center">


            </div>



            <div class="row mt-4 mx-5 d-flex d-lg-none">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img class="w-100 opacity-9" src="assets2/img/Brands/brands_01.png" alt="logo_coinbase">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img class="w-100 opacity-9" src="assets2/img/Brands/brands_02.png" alt="logo_nasa">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img class="w-100 opacity-9" src="assets2/img/Brands/brands_03.png" alt="logo_netflix">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img class="w-100 opacity-9" src="assets2/img/Brands/brands_04.png" alt="logo_pinterest">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img class="w-100 opacity-9" src="assets2/img/Brands/brands_05.png" alt="logo_spotify">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img class="w-100 opacity-9" src="assets2/img/Brands/brands_06.png" alt="logo_vodafone">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 mx-auto text-center">
                    <h2 style="font-family: Poppins, sans-serif; color:#000">Entenda como funciona</h2>
                    <p style="font-family: Poppins, sans-serif; color:#000">Entenda nosso serviço e entre no mundo das
                        Fragrâncias. </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 mx-auto">
                    <div class="accordion" id="accordionRental">
                        <div class="accordion-item my-2">
                            <h5 class="accordion-header" id="headingOne">
                                <button style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Eu posso comprar perfumes?
                                    <i
                                        class="collapse-close material-icons text-sm font-weight-bold pt-1 position-absolute end-0">add</i>
                                    <i
                                        class="collapse-open material-icons text-sm font-weight-bold pt-1 position-absolute end-0">remove</i>
                                </button>
                            </h5>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionRental">
                                <div style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-body text-sm opacity-8">
                                    Não. Você assina planos que te dão direito a receber de 1 á 3 perfumes por mês.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item my-2">
                            <h5 class="accordion-header" id="headingTwo">
                                <button style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Eu preciso assinar todo mês?
                                    <i
                                        class="collapse-close material-icons text-sm font-weight-bold pt-1 position-absolute end-0">add</i>
                                    <i
                                        class="collapse-open material-icons text-sm font-weight-bold pt-1 position-absolute end-0">remove</i>
                                </button>
                            </h5>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionRental">
                                <div style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-body text-sm opacity-8">
                                    Não. No plano mensal haverá uma renovação automática ao fim de cada mês, podendo ser
                                    cancelado quando você quiser.
                                    <br>
                                    No Plano Semestral haverá uma renovação automática ao fim do periodo de 6 meses,
                                    podendo ser cancelado ao fim desse periodo.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item my-2">
                            <h5 class="accordion-header" id="headingThree">
                                <button style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Posso receber mais de 1 perfume ?
                                    <i
                                        class="collapse-close material-icons text-sm font-weight-bold pt-1 position-absolute end-0">add</i>
                                    <i
                                        class="collapse-open material-icons text-sm font-weight-bold pt-1 position-absolute end-0">remove</i>
                                </button>
                            </h5>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionRental">
                                <div style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-body text-sm opacity-8">
                                    Sim. Nós temos planos que variam de 1 à 3 perfumes, caso queira receber mais,
                                    escolha o plano avançado ou master.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item my-2">
                            <h5 class="accordion-header" id="headingFour">
                                <button style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Eu Escolho o Perfume Que Recebo?
                                    <i
                                        class="collapse-close material-icons text-sm font-weight-bold pt-1 position-absolute end-0">add</i>
                                    <i
                                        class="collapse-open material-icons text-sm font-weight-bold pt-1 position-absolute end-0">remove</i>
                                </button>
                            </h5>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionRental">
                                <div style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-body text-sm opacity-8">
                                    Não. Você elabora uma lista com seus Perfumes favoritos e Preenche um quiz , e de
                                    acordo com seus gostos enviarems o Perfumes mais adequado.
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item my-2">
                            <h5 class="accordion-header" id="headingFifth">
                                <button style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false"
                                    aria-controls="collapseFifth">
                                    Os perfumes são originais?
                                    <i
                                        class="collapse-close material-icons text-sm font-weight-bold pt-1 position-absolute end-0">add</i>
                                    <i
                                        class="collapse-open material-icons text-sm font-weight-bold pt-1 position-absolute end-0">remove</i>
                                </button>
                            </h5>
                            <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth"
                                data-bs-parent="#accordionRental">
                                <div style="font-family: Poppins, sans-serif; color:#000"
                                    class="accordion-body text-sm opacity-8">
                                    Sim. todos os nossos perfumes são originais e certifiados. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->


    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

    <!--   Core JS Files   -->
    <script src="assets2/js/core/popper.min.js"></script>
    <script src="assets2/js/core/bootstrap.min.js"></script>
    <script src="assets2/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets2/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="assets2/js/plugins/parallax.min.js"></script>
    <script>
    if (document.getElementsByClassName('page-header')) {
        window.onscroll = debounce(function() {
            var scrollPosition = window.pageYOffset;
            var bgParallax = document.querySelector('.page-header');
            var oVal = (window.scrollY / 3);
            bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
        }, 6);
    }
    </script>
    <!-- Kanban scripts -->
    <script src="assets2/js/plugins/dragula/dragula.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="assets2/js/plugins/jkanban/jkanban.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets2/js/material-dashboard.min.js?v=3.0.5"></script>


    <script>
    $("#basicomensal").on('click', function() {
        localStorage.setItem('plano', 'Mensal Bronze');

    });

    $("#basicosemestral").on('click', function() {
        localStorage.setItem('plano', 'Semestral Bronze');

    });

    $("#mastermensal").on('click', function() {
        localStorage.setItem('plano', 'Mensal Prata');

    });

    $("#mastesemestral").on('click', function() {
        localStorage.setItem('plano', 'Semestral Prata');

    });

    $("#avancadomensal").on('click', function() {
        localStorage.setItem('plano', 'Mensal Ouro');

    });

    $("#avancadosemestral").on('click', function() {
        localStorage.setItem('plano', 'Semestral Ouro');

    });
    </script>
</body>

</html>