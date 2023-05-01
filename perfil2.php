<?php
session_start();
require_once("admin/database.php");
require_once("admin/config.php");
require_once("Header.php");



$_SESSION['email'];
$update = $_GET['update'];


$email = $_SESSION['user'];;
$query = "SELECT * FROM user WHERE email='$email'";
$products = db::getRecord($query);

$sexo = $_GET['sexo'];
$city = $_GET['city'];
$cheiro = $_GET['cheiro'];
$atividade = $_GET['atividade'];
$clima = $_GET['clima'];
$ambiente = $_GET['ambiente'];
$estilo = $_GET['estilo'];





if (isset($_GET["sexo"]) == "MASCULINO") {

    $array = array(
        'city' => $city,
        'cheiro' => $cheiro,
        'atividade' => $atividade,
        'clima' => $clima,
        'ambiente' => $ambiente,
        'estilo' => $estilo,
    );

    //echo implode("," , $array);

    $arr = array_count_values($array);
    $letra = "";

    foreach ($arr as $key => $value) {
        if ($value > 1) {
            if ($key == "A") {
                $letra = "A";
            }

            if ($key == "B") {
                $letra = "B";
            }

            if ($key == "C") {
                $letra = "C";
            }

            if ($key == "D") {
                $letra = "D";
            }
        }
    }

    $perfil = "";
    if ($letra == "A") {
        $descricao = "Em constante movimento, com muita naturalidade e espontaneidade... Você tem muita energia, ama a natureza e aproveita a vida como ninguém. Momentos ao Ar livre e tomar sol são atividades que você ama fazer. <br>
        <strong>Notas:</strong> Citricas com Florais ou Florais Leves, tipo Rosa e Muguet com Notas Verde.";
        $perfil = "CASUAL";
    }
    if ($letra == "B") {
        $descricao= "Discreta na medida certa, romantica, mas com aquele toque moderno e inesperado. Você possui elegância natural e as pessoas ao redor apreciam esta com você.  <br> <br>
       <strong> Notas:</strong> Florais mais leves, tipo Jasmine e Muguet ou com Notas de Frutas como Maçã e Pera, ou levemente adocicadas.";
        $perfil = "ROMÂNTICA";
        
       
        
        
    }

    if ($letra == "C") {
        $perfil = "SENSUAL";
        $descricao="Ama desafios, domina como ninguém a arte de negociar e tem um poder de persuasão imensurável, você possui na sua personalidade traços que atraí atenção de todos. 
        <strong> Notas:</strong>  Orientais Adocicadas, Florais Brancas, como Flores de Larajeira. Gourmand é uma boa pedida também";
    }

    if ($letra == "D") {
        $descricao="Decidida, auto confiante e segura, você é tipo de mulher que sabe o que quer, mesmo quando as coisas estão fora de controle, com classe consegue passar para próxima etapa. 
        <strong> Notas: </strong> Chipre, Florais Brancas, Tuberosa e Gardênia.";
        $perfil = "ELEGANTE";
    }


    $usuario = $_SESSION['user'];


    $sql = "UPDATE user SET perfil='$perfil', sexo='$sexo' , descricao='$descricao' WHERE email='$usuario'";

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Parabéns!</title>

    <style>
        .header {
            font-family: Poppins, sans-serif;
            background: #fff;
            color: #333;

        }

        .header .container,
        .header .container-fluid,
        .header .inner-wrap {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .header .inner-wrap {
            width: 100%;
        }

        .header a:not(.btn) {
            color: inherit;
        }

        .header a:not(.btn) {
            color: #fff;
        }

        .header a:not(.btn):hover {
            color: #ab8e66;
        }

        .header-top,
        .header-middle,
        .header-bottom {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }



        a:hover {
            color: black !important;
        }

        a {
            color: white;
            text-decoration: none;
        }

        .header-left,
        .header-center,
        .header-right {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .baixar {
            padding-top: 15px;
            padding-right: 21px;
            font-size: 13px;
            font-weight: bold;

        }

        .header-right {
            margin-left: auto;
        }

        .has-center .header-right {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .has-center .header-right {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .has-center .header-center {
            margin-left: 2rem;
            margin-right: 2rem;
        }

        .header-top {
            background: #f5f6f8;
            font-size: 1.1rem;
            letter-spacing: -0.027em;
            text-transform: capitalize;
        }

        .header-top .header-right {
            padding-right: 0.2rem;
        }

        .header-top .header-right>.dropdown:first-child {
            margin-left: 0;
        }

        .header-top .header-right>.dropdown:hover .dropdown-box::before {
            visibility: visible;
            opacity: 1;
            top: auto;
            bottom: 100%;
        }

        .header-top .header-right .dropdown-box::before {
            content: "";
            position: absolute;
            z-index: 1002;
            left: 50%;
            top: -9999px;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            border: 11px solid transparent;
            border-bottom: 11px solid #fff;
            -webkit-transition: opacity 0.2s ease-out, -webkit-transform 0.2s ease-out;
            transition: opacity 0.2s ease-out, -webkit-transform 0.2s ease-out;
            transition: opacity 0.2s ease-out, transform 0.2s ease-out;
            transition: opacity 0.2s ease-out, transform 0.2s ease-out, -webkit-transform 0.2s ease-out;
            visibility: hidden;
            opacity: 0;
            cursor: pointer;
            pointer-events: none;
        }

        .header-top .header-right a {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .header-top .header-right i {
            margin-right: 0.6rem;
            font-size: 1.5rem;
        }

        .header-top .header-right>* {
            margin-left: 2rem;
        }

        .header-top .header-right .delimiter {
            margin: 0 0.3rem;
            color: #aaa;
        }

        .header-top .header-right .divider {
            width: 1px;
            height: 1.5rem;
            background-color: #ccc;
        }

        ul {
            list-style-type: none;
        }

        .logo {
            min-width: 14.4rem;
            padding-left: 45px;
            width: 130px;
            height: 30px;


        }

        .logo img {
            display: block;
        }

        .header h1 {
            line-height: 0;
            margin-bottom: 0;
        }

        .header-bottom {
            color: #fff;
            background: #141414;
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: -0.025em;
        }

        .header-bottom .main-nav {
            margin-left: 2.1rem;
        }

        .header-bottom .header-right {
            padding-right: 0.2rem;
        }

        .header-bottom .header-right>a {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 1.4rem 0 1.3rem;
        }

        .header-bottom .header-right>a i {
            vertical-align: middle;
        }

        .header-bottom .header-right>a i.w-icon-map-marker {
            font-size: 2.2rem;
            margin-top: -0.5rem;
        }

        .header-bottom .header-right>a i.w-icon-sale {
            font-size: 2.4rem;
            margin-right: 0.8rem;
        }

        .header-bottom .header-right>a:first-child {
            margin-right: 3.2rem;
        }

        .header-bottom:not(.fixed) .show-dropdown .dropdown-box {
            opacity: 1;
            visibility: visible;
            -webkit-transform: none;
            transform: none;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            margin-top: 2rem;
        }

        .welcome-msg {
            margin: 0;
            font-size: inherit;
            font-weight: inherit;
            letter-spacing: -0.022em;
            line-height: 1.5;
            white-space: nowrap;
            padding: 14px 0;
            text-transform: uppercase;
        }

        .header-middle {
            padding-top: 3.2rem;
            padding-bottom: 3.2rem;
            color: #333;
            background: #fff;
            font-size: 1.2rem;
            border-bottom: 1px solid #eee;
        }

        .header-middle .header-left {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .account {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-right: 2rem;
        }

        .account .login {
            font-size: 1.3rem;
            line-height: 1.5em;
            color: #999;
            -webkit-transition: color 0.3s;
            transition: color 0.3s;
        }

        .account .w-icon-account {
            color: white;
            width: 5.3rem;
            height: 5.3rem;
            border: 1px solid rgba(238, 238, 238, 0.5);
            font-size: 2.6rem;
            -webkit-transition: border-color 0.3s, color 0.3s;
            transition: border-color 0.3s, color 0.3s;
        }

        .account span {
            color: #ccc;
            -webkit-transition: color 0.3s;
            transition: color 0.3s;
        }

        .account b {
            color: white;
            font-size: 1.5rem;
            -webkit-transition: color 0.3s;
            transition: color 0.3s;
        }

        .account:hover .login,
        .account:hover span,
        .account:hover b {
            color: #ab8e66;
        }

        .account:hover .w-icon-account {
            color: #ab8e66;
            border-color: #ab8e66;
        }

        .header-search {
            position: relative;
            width: 100%;
            max-width: 38rem;
        }

        .header-search input.form-control {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            min-width: 40px;
            padding: 0.9rem;
            border: 2px solid #ab8e66;
            border-right: 0;
            font-size: 1.2rem;
            letter-spacing: 0;
            font-family: Poppins, sans-serif;
        }

        .header-search input.form-control::-webkit-input-placeholder {
            color: inherit;
        }

        .header-search input.form-control::-moz-placeholder {
            color: inherit;
        }

        .header-search input.form-control:-ms-input-placeholder {
            color: inherit;
        }

        .header-search input.form-control::-ms-input-placeholder {
            color: inherit;
        }

        .header-search input.form-control::placeholder {
            color: inherit;
        }

        .header-search .btn-search {
            margin: 0;
            padding: 0;
            min-width: 5.1rem;
            color: #333;
            border-left: 0;
            border-color: #ab8e66;
            font-size: 1.5rem;
            font-weight: normal;
            letter-spacing: -0.025em;
            text-transform: none;
        }

        .header-search .btn-search i {
            font-size: 1.7rem;
            line-height: 1;
            letter-spacing: -0.01em;
            font-weight: 500;
        }

        .header-search .btn-search:hover,
        .header-search .btn-search:active,
        .header-search .btn-search:focus {
            color: #ab8e66;
            background-color: transparent;
        }

        .header-search .select-box::before {
            right: 1.2rem;
            margin-top: -0.1rem;
            font-weight: 400;
        }

        .header-search .select-box select {
            position: relative;
            padding: 0 2rem 0 1.5rem;
            border: 0;
            font-weight: 400;
            z-index: 1;
        }

        .header-search.hs-toggle .input-wrapper {
            position: absolute;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            right: -2.5rem;
            top: 100%;
            min-width: 30rem;
            padding: 1.5rem;
            height: auto;
            background-color: #fff;
            -webkit-box-shadow: 0 2px 35px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 35px rgba(0, 0, 0, 0.1);
            visibility: hidden;
            opacity: 0;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0);
            z-index: 100;
            -webkit-transition: visibility 0.3s, opacity 0.3s, -webkit-transform 0.3s;
            transition: visibility 0.3s, opacity 0.3s, -webkit-transform 0.3s;
            transition: transform 0.3s, visibility 0.3s, opacity 0.3s;
            transition: transform 0.3s, visibility 0.3s, opacity 0.3s, -webkit-transform 0.3s;
        }

        .header-search.hs-toggle:hover {
            color: #ab8e66;
        }

        .header-search.hs-toggle .form-control {
            padding: 1.4rem 2rem;
            font-size: 1.3rem;
            color: #777;
            background-color: #f4f4f4;
            border: none;
            height: 5rem;
        }

        .header-search.hs-toggle .btn-search {
            background-color: #f4f4f4;
            min-width: 5rem;
            font-size: 1.8rem;
            color: #222;
            border: none;
        }

        .header-search.hs-toggle .btn-search i {
            margin-bottom: 0.3rem;
            font-size: inherit;
        }

        .header-search.hs-toggle.show .input-wrapper {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .header-search.hs-toggle.show .search-toggle::after {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translate(50%, 0);
            transform: translate(50%, 0);
        }

        .header-search.hs-expanded {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            margin: 0 auto;
            min-width: auto;
            max-width: 55.6rem;
        }

        .header-search.hs-expanded .select-box {
            width: 14.6rem;
            border: 2px solid #ab8e66;
            border-right: none;
            color: #666666;
        }

        .header-search.hs-expanded .select-box::after {
            content: "";
            height: 35px;
            width: 1px;
            background: #e5e5e5;
            position: absolute;
            right: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .header-search.hs-expanded input.form-control {
            color: #666;
            border-right: none;
            border-left: none;
        }

        .header-search.hs-expanded .btn-search {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-transition: opacity 0.4s, color 0.4s;
            transition: opacity 0.4s, color 0.4s;
        }

        .header-search.hs-expanded .btn-search i {
            margin: 0;
        }

        .header-search.hs-expanded .btn-search span {
            margin-right: 0.5rem;
            letter-spacing: -0.03em;
        }

        .header-search.hs-simple {
            min-width: 35rem;
        }

        .header-search.hs-simple input.form-control {
            border: none;
            background-color: #f5f5f5;
        }

        .header-search.hs-simple .btn-search {
            position: absolute;
            right: 0;
            height: 100%;
            min-width: 4.5rem;
            background: transparent;
            color: #666;
        }

        .header-search.hs-rounded .select-box,
        .header-search.hs-rounded .form-control {
            border-radius: 0.5rem 0 0 0.5rem;
        }

        .header-search.hs-rounded .btn-search {
            border-radius: 0 0.5rem 0.5rem 0;
        }

        .header-search.hs-rounded.hs-simple input.form-control {
            border-radius: 5rem;
        }

        .header-search.hs-rounded.hs-expanded .form-control {
            border-radius: 0;
        }

        .header-search.hs-round .select-box,
        .header-search.hs-round .form-control {
            border-radius: 0.3rem 0 0 0.3rem;
        }

        .header-search.hs-round .btn-search {
            border-radius: 0 0.3rem 0.3rem 0;
        }

        .header-search.hs-round.hs-simple input.form-control {
            border-radius: 3rem;
        }

        .header-search.hs-round.hs-expanded .form-control {
            border-radius: 0;
        }

        .footer {
            font-family: Poppins, sans-serif;
            font-size: 1.3rem;
            background: #f8f8f8;
        }

        .footer a {
            color: #666;
        }

        .footer a:hover,
        .footer a:active,
        .footer a.active {
            color: #ab8e66;
        }

        .footer.footer-dark a:hover,
        .footer.footer-dark a:active,
        .footer.footer-dark a.active {
            color: #fff;
        }

        .footer p {
            font-size: inherit;
        }

        .footer .category-name {
            font-weight: 600;
            font-size: 1.4rem;
            color: #666;
            line-height: 1;
            letter-spacing: 0;
            padding-right: 2rem;
            margin-bottom: 1rem;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        .footer .category-box {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .footer .category-box:not(:last-child) {
            margin-bottom: 1.4rem;
        }

        .footer .category-box a {
            font-weight: normal;
            font-size: 1.3rem;
            letter-spacing: 0;
            color: #666;
            line-height: 1;
            margin-bottom: 1rem;
            position: relative;
        }

        .footer .category-box a:hover,
        .footer .category-box a:active,
        .footer .category-box a:focus {
            color: #ab8e66;
        }

        .footer .category-box a:last-child::before {
            width: 100%;
        }

        .footer .category-box a::after {
            content: "";
            display: inline-block;
            width: 1px;
            height: 13px;
            border-left: 1px solid #ccc;
            margin: 0px 0.9rem 0 1rem;
            vertical-align: bottom;
        }

        .footer .category-box a:last-child::after {
            content: none;
        }

        .footer .social-icons-colored .social-icon {
            color: #fff;
        }

        .logo-footer,
        .logo-footer img {
            display: block;
        }

        .footer-newsletter {
            padding: 2.8rem 0;
        }

        .footer-newsletter .icon-box-side {
            -webkit-box-pack: left;
            -ms-flex-pack: left;
            justify-content: left;
        }

        .footer-newsletter .icon-box-title {
            margin-bottom: 0.2rem;
            font-size: 1.6rem;
        }

        .footer-newsletter .icon-box-icon {
            margin-right: 2rem;
            margin-bottom: 0.4rem;
        }

        .footer-newsletter .icon-box-icon i {
            font-size: 4.7rem;
        }

        .footer-newsletter .icon-box-content p {
            line-height: 1.6;
        }

        .footer-newsletter .input-wrapper-inline {
            max-width: 100%;
        }

        .footer-newsletter .btn {
            padding: 0.93em 1.85em;
        }

        .footer-newsletter .btn i {
            margin: -0.2rem 0 0 0.9rem;
            font-size: 1.6rem;
        }

        .footer-top {
            padding: 6.8rem 0 0.8rem;
            border-bottom: 1px solid #eee;
        }

        .footer-top .widget {
            margin-bottom: 4rem;
        }

        .footer-top .widget-title {
            padding: 0 0 0.6rem 0;
            margin-bottom: 2rem;
            font-family: inherit;
            font-size: 0.6rem;
            font-weight: bold;
            letter-spacing: 0;
            line-height: 0.6rem;
            text-transform: uppercase;
            color: #333;
            border: none;
            cursor: text;
        }

        .footer-top .widget-body {
            padding: 0;
            color: #666;
            font-size: 0.4rem;
        }

        .footer-top .widget-body li {
            line-height: 0.6rem;
            margin-bottom: 1.5rem;
        }

        .footer-middle {
            padding: 1.5rem 0 3.8rem;
            border-bottom: 1px solid #eee;
        }

        .footer-bottom {
            padding: 3rem 0;
            color: #666;
        }

        .footer-bottom,
        .footer-bottom .container,
        .footer-bottom .container-fluid {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .footer-bottom .footer-left,
        .footer-bottom .footer-right {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .footer-bottom .footer-right {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .footer .widget-about {
            margin-top: 0.2rem;
        }

        .footer .widget-about .logo-footer {
            margin-bottom: 1rem;
        }

        .footer .widget-about .widget-about-title {
            line-height: 2.1;
            margin-bottom: 1rem;
            color: #333;
            font-weight: 500;
        }

        .footer .widget-about .widget-about-call {
            display: block;
            color: #333;
            font-size: 1.8rem;
            font-weight: 600;
            line-height: 1;
            margin-bottom: 0.9rem;
        }

        .footer .widget-about .widget-about-call:hover {
            color: #ab8e66;
        }

        .footer .widget-about .widget-about-desc {
            line-height: 2.15;
            margin-bottom: 2.1rem;
            max-width: 28rem;
            font-size: 0.8rem;
        }

        .footer .copyright {
            font-size: 14px;
            line-height: 1.92;
            margin-bottom: 0;
            text-align: center;
        }

        .payment img {
            display: block;
        }

        .payment-label {
            margin-right: 2rem;
        }

        .sticky-footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0 4rem;
            background: #fff;
        }

        .sticky-footer>* {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .sticky-footer .cart-dropdown {
            position: relative;
        }

        .sticky-footer .cart-dropdown .dropdown-box {
            top: auto;
            bottom: 100%;
            right: 0;
            min-width: 34rem;
            padding: 2rem 3rem 3rem;
            margin-bottom: 2.1rem;
            -webkit-transform: translateY(20px);
            transform: translateY(20px);
            -webkit-transition: opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
            transition: opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
            transition: transform 0.3s, opacity 0.3s, visibility 0.3s;
            transition: transform 0.3s, opacity 0.3s, visibility 0.3s, -webkit-transform 0.3s;
        }

        .sticky-footer .cart-dropdown:hover .dropdown-box {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .sticky-footer .products {
            border: none;
        }

        .sticky-footer .product-name a {
            padding: 0;
        }

        .sticky-footer .cart-total {
            padding-top: 1rem;
        }

        .sticky-link {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #666;
            margin: 1.4rem 0 1.3rem;
        }

        .sticky-link i,
        .cart-dropdown .sticky-link i {
            font-size: 2.3rem;
            color: #666;
        }

        .sticky-link p {
            margin-top: 0.9rem;
            margin-bottom: 0;
            font-size: 1rem;
            line-height: 1;
            letter-spacing: 0.025em;
            text-transform: uppercase;
        }

        .sticky-link.search-toggle p {
            margin-top: 1rem;
        }

        .sticky-link:hover {
            color: #ab8e66;
        }

        .sticky-link:hover i {
            color: inherit;
        }

        .footer-dark {
            background-color: #222;
        }

        .footer-dark .footer-top,
        .footer-dark .footer-middle,
        .footer-dark .category-box a::after {
            border-color: #454545;
        }

        .footer-dark a,
        .footer-dark .widget-about .widget-about-title,
        .footer-dark .category-name {
            color: #999;
        }

        .footer-dark .widget-about .widget-about-call,
        .footer-dark .widget-title {
            color: #fff;
        }

        @media (min-width: 992px) {
            .footer-top .col-lg-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 22.22%;
                flex: 0 0 22.22%;
                max-width: 22.22%;
            }
        }

        @media (min-width: 768px) {
            .sticky-footer {
                display: none;
            }
        }

        @media (max-width: 991px) {
            .footer-top {
                padding-bottom: 2.7rem;
            }

            .footer-middle .category-box a:first-child {
                margin-left: 0;
            }

            .footer-newsletter .icon-box-side {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
        }

        @media (max-width: 767px) {
            .footer-newsletter .icon-box-icon {
                margin-right: 0;
            }

            .footer-bottom,
            .footer-bottom>.container {
                display: block;
            }

            .footer-bottom .footer-left,
            .footer-bottom .footer-right {
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .footer-bottom .footer-left {
                margin-bottom: 0.2rem;
            }

            .footer-bottom .footer-right {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .footer-bottom .payment-label {
                margin: 0 0 1rem 0;
            }
        }

        @media (max-width: 479px) {
            .sticky-footer {
                padding: 0;
            }

            .sticky-footer .hs-toggle .input-wrapper {
                right: 1rem;
            }

            .sticky-footer .cart-dropdown .dropdown-box {
                min-width: 30rem;
                right: -5.4rem;
            }

            .footer-newsletter .icon-box-side {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .footer-newsletter .icon-box-icon {
                margin: 0 0 2rem;
            }

            .footer-newsletter .icon-box-content {
                text-align: center;
            }

            .footer-newsletter .form-control {
                text-align: center;
            }

            .footer-newsletter .input-wrapper-inline {
                display: block;
                text-align: center;
            }

            .footer-newsletter .btn {
                margin-top: 2rem;
            }
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            padding: 0;
            margin: 0;
        }

        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(to left top, #ab8e66, #fff);
        }

        .container .card {
            height: 430px;
            width: 700px;
            border-radius: 10px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            cursor: pointer;

        }

        .container .card .form {
            width: 100%;
            height: 100%;
            display: flex;

        }

        .container .card .left-side {
            width: 50%;
            background-color: #fff;
            height: 100%;

        }

        .form .left-side .top-div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 45px;
            position: relative;
        }

        .form .left-side .top-div h2 {
            font-size: 30px;
            margin-bottom: 5px;
            font-weight: 8000;
        }

        .form .left-side .top-div span {
            height: 7px;
            width: 7px;
            border-radius: 50%;
            background-color: red;
            position: absolute;
            left: 67px;
            top: 46px;
        }

        .form .left-side .top-div p {
            font-size: 14px;
        }

        .form .left-side .medium-div {
            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: column;
            position: relative;
            padding: 20px 45px;
        }

        .form .left-side .medium-div h1:nth-child(1) {
            font-size: 40px;

        }

        .form .left-side .medium-div h1:nth-child(2) {
            font-weight: 100;
            font-size: 30px;
            margin-top: -20px;
            margin-bottom: 12px;
        }

        .form .left-side .medium-div p {
            font-size: 14px;
        }

        .form .left-side .icons {
            padding: 15px 45px;
            font-size: 20px;
            position: relative;
        }

        .form .left-side .icons .fa-instagram {
            position: absolute;
            right: -80px;
            top: 23px;
            transition: all 0.5s;
        }

        .form .left-side .icons .fa-twitter {
            position: absolute;
            right: -60px;
            top: 23px;
            transition: all 0.5s;
            transition-delay: 0.2s;
        }

        .container .card:hover .icons .fa-instagram {
            right: 130px;
        }

        .container .card:hover .icons .fa-twitter {
            right: 60px;
        }

        .form .left-side .icons button {
            height: 30px;
            width: 100px;
            background-color: #ff4646;
            border-radius: 60px;
            border: none;
            color: white;
            transition: all 0.5s;
        }

        .form .left-side .icons button:hover {
            background-color: #f10808;
        }

        .form .left-side .last-div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 45px;
            font-size: 17px;
            font-weight: 600px;
        }

        .hexa .hexagonal {
            position: relative;
            top: 2px;
        }

        .hexa .hexagonal small {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            border: 1px solid #ccc;
        }

        .card:hover .hexa .hexagonal small:nth-child(1) {
            position: absolute;
            top: 9px;
            left: -17px;
            opacity: 1;
        }

        .card:hover .hexa .hexagonal small:nth-child(2) {
            position: absolute;
            top: 2px;
            left: -25px;
            opacity: 1;
        }

        .card:hover .hexa .hexagonal small:nth-child(3) {
            position: absolute;
            top: -1px;
            left: -15px;
            opacity: 1;
        }


        .hexa .hexagonal small:nth-child(1) {
            position: absolute;
            top: 19px;
            left: -17px;
            opacity: 0;
            transition: all 0.5s;
        }

        .hexa .hexagonal small:nth-child(2) {
            position: absolute;
            top: -12px;
            left: -35px;
            opacity: 0;
            transition: all 0.5s;
        }

        .hexa .hexagonal small:nth-child(3) {
            position: absolute;
            top: -12px;
            left: -0px;
            opacity: 0;
            transition: all 0.5s;
        }

        .newb {
            color: #fff;
            background-color: #ab8e66;
            border-radius: 2px;

        }







        .container .card .right-side {
            width: 50%;
            background-color: #000;
            height: 100%;
            z-index: 10;
        }

        @media (max-width:750px) {
            .container .card {
                max-width: 350px;

            }

            .container .card .right-side {
                display: none;
            }

            .container .card .left-side {
                width: 100%;
            }
        }
    </style>
</head>

<body>
  

    <div class="card text-center">

        <div style="margin-top:10px;" class="container ">
            <div class="card">
                <div class="form">
                    <div class="left-side">
                        <div class="row">

                            <div style="margin-top:50px;">
                                <h1>Parabéns!</h1>

                                <p style="font-size:20px !important;" class="card-text"> Seu perfil é <?php echo $perfil ?></p>
                                <p style=" !important; text-aling:left; font-size:12px" class="card-text" ><?php echo  $descricao   ?> </p>  

                            </div>
                            <div class="mt-10">
                                 <?php if($update == 0){  ?>
                                          
                                <a href="post.php" style="background-color:#ab8e66; border-color:#ab8e66;margin-top:10px;" class="btn btn-primary ">Concluir Cadastro</a>
                                
                                <?php  } ?>
                                <a href="quiz.php" style="background-color:#ab8e66;border-color:#ab8e66;margin-top:10px;" class="btn btn-primary">Refazer quis </a>
                                <a href="dashboard.php" style="background-color:#ab8e66; border-color:#ab8e66;margin-top:10px;" class="btn btn-primary ">Ir para o perfil</a>

                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <img src="boMpqXA.png">


                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"> <?php $_GET['perfil'] ?></p>


        </div>
        <div class="card-footer text-muted">

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>