<?php
session_start();
require_once("admin/database.php");

$_SESSION['email']
?>


<?php

if ($_GET['redefinido'] == 1) {
    echo  '<div style="margin-top : 5%" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Senha</strong> Redefinida com Sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}




if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {

        echo '<div style="margin-top : 5%" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Senhas!</strong> Senha Incorreta.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else if ($_GET['status'] == 2) {

        echo '<div style="margin-top : 5%" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Usuário!</strong> Já Cdastrado com esse email.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else if ($_GET['status'] == 3) {

        echo  '<div style="margin-top : 5%" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Usuário!</strong> Cadastrado com Sucesso.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>







<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Login</title>

    <style>
    .sticky-content.fix-bottom {
        bottom: 0;
        position: fixed;
        position: fixed;
        left: 0;
        right: 0;
        opacity: 1;
        transform: translateY(0);
        z-index: 1051;
        box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.1);

    }

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
    
    .login {
    position: relative;
    display: flex;
    min-height: calc(var(--vh, 1vh) * 100);
    background: #FCFCFC;
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

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
    WebFontConfig = {
        google: {
            families: ['Poppins:400,500,600,700']
        }
    };
    (function(d) {
        var wf = d.createElement('script'),
            s = d.scripts[0];
        wf.src = 'assets/js/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
    </script>
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
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo11.min.css">



</head>

<body>




    <!--start os header-->
    <nav>
        <div class="container1" style="height:60px; margin-left:2%;  ">
            <a id="brand" href=" index.php"><img style="height: 30px;margin-top:16px; margin-bottom:15px"
                    src="./assets/images/logo.png" /></a>


            <ul class="navbar-menu" style="margin-right:2%;">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="perfumes.php">Catálogo de perfumes</a>
                </li>
                <li>
                        <a href="contact-us.php">Contato</a>
                    </li>
                <li>
                    <a href="planos.php">Planos</a>
                </li>
                <?php
                if (isset($_SESSION['email'])) {
                ?>
                <li>
                    <a href="dashboard.php">
                        Minha Conta</a>
                </li>
                <?php } else { ?>
                <?php } ?>
                <?php if (isset($_SESSION['email'])) { ?>

                <li>
                    <a href="action.php?logout=1">
                        Sair</a>
                </li><?php
                        } else {

                            ?>
                <li> <i style="color: #fff;" class="w-icon-account"></i>
                    <a href="login.php">Entrar</a>
                </li>
                <li><a href="login.php"> <i class="w-icon-account"></i>
                        Cadastre-se</a></li><?php } ?>
            </ul>

        </div>
    </nav>
    <!-- End of Header -->




    <!-- Start of Main -->
    <main class="main login-page" style="margin-top:60px">
        <!-- Start of Page Header -->


        <div class="page-content row ">

            <div class=" d-flex justify-content-center col-md-12 col-lg-12 col-xs-10 col-sm-10">
                <div class="login-popup">
                    <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                        <ul class="nav nav-tabs text-uppercase" role="tablist">
                            <li class="nav-item d-flex justify-content-center">
                                <a style="border: 0px; " href="#sign-in" class="nav-link  active">Entrar</a>

                            </li>
                            <li class="nav-item">
                                <a style="border: 0px;" href="#sign-up" class="nav-link">Cadastre-se</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="sign-in">
                                <form action="action.php" method="POST">

                                    <div class="form-group">
                                        <label>Email *</label>

                                        <input title="email" type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Senha *</label>
                                        <input class="form-control" title="password" type="password" name="pass"
                                            required>

                                    </div>



                                    <a href="enter_email.php"> Esqueceu a senha ?</a>

                                    <div class="container-fluid d-flex justify-content-center">
                                        <div class="row">

                                            <div class="col-6  "> <input
                                                    style="margin-top: 40px;  background:#ab8e66;color:#fff; border:none   "
                                                    type="submit" class="a btn  mr-sm-2 " name="login" value="entrar">
                                            </div>
                                </form>


                            </div>
                        </div>

                    </div>
                    <div class="tab-pane d-flex justify-content-center" id="sign-up">
                        <form action="action.php" method="POST">

                            <div id="cadastro" class="form-group">
                                <label>Email *</label>
                                <input type="text" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group mb-5">
                                <label>Senha*</label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                            <div class="form-group mb-5">
                                <label>Repita a senha*</label>
                                <input type="password" name="cpass" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <div class="form-group mb-5">
                                    <label>Data de nascimento *</label>
                                    <input type="date" name="nascimento" class="form-control" required>
                                </div>
                                <div class="form-group mb-5">
                                    <label>Nome Completo *</label>
                                    <input type="text" class="form-control" name="nome" required>
                                </div>

                                <div class="form-group mb-5">
                                    <label>CPF *</label>
                                    <input type="text" class="form-control" id="cpf"  name="campo_de_teste" onblur="validarCPF(this)"   required>
                                </div>


                                <div class="form-group mb-5">
                                    <label>Telefone *</label>
                                    <input type="text" class="form-control" name="phone-number" id="phone-number"
                                        required>
                                </div>
                            </div>
                            <div class="form-checkbox user-checkbox mt-0">

                            </div>
                            <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros,
                                exceto quando exigido por lei. <a href="termos.php" class="text-primary">Política de
                                    Privacidade</a>.</p>
                            <a href="#" class="d-block mb-5 text-primary"></a>
                            <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">

                                <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required>
                                <label for="remember" class="font-size-md">Eu aceito os <a href="termos.php"
                                        class="text-primary font-size-md">Termos e Condições</a></label>
                            </div>
                            <div class="container-fluid d-flex justify-content-center">
                                <div class="row  d-flex justify-content-center">

                                    <div class="col-12  "> <input
                                            style="margin-top: 40px;  background:#ab8e66; color:#fff; border:none   "
                                            id="enviar" type="submit" class="a btn  mr-sm-2 " name="register"
                                            value="Registre-se"></div>


                                    <!-- Button trigger modal -->




                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>


        </div>

    </main>
    <!-- End of Main -->

    <!-- Start of Footer -->
    <footer class="footer footer-dark appear-animate" data-animation-options="{
    'name': 'fadeIn'
    }" style="margin-top: 40px;">

        <div class="footer-newsletter bg-primary">
            <div class="container">
                <div class="row justify-content-center
                align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="icon-box icon-box-side text-white">
                            <div class="icon-box-icon d-inline-flex">
                                <i class="w-icon-envelop3"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title text-white
                                text-uppercase font-weight-bold ">Receba
                                    todas as novidade em tempo real
                                </h4>
                                <p class="text-white">Fique por dentro
                                    do mundo das fragrâncias.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-9 mt-4
                    mt-lg-0">
                        <form action="action.php" method="POST" class="input-wrapper input-wrapper-inline
                        input-wrapper-rounded">
                            <input type="email" class="form-control mr-2
                            bg-white" name="email" id="email" placeholder="Email" />
                            <button class="btn btn-dark btn-rounded" type="submit">Inscreva-se<i
                                    class="w-icon-long-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-sm-show d-xs-show">
            <div class="footer-top">
                <div class="row">

                    <div style="margin-left: 10%;" class="col-sm-3 col-lg-4">
                        <div class="widget">
                            <a style="margin-top: -55px; margin-bottom: 20px;" href="index.php" class="logo-footer">
                                <img src="assets/images/demos/demo10/footer-logo.png" alt="logo-footer" width="144"
                                    height="45" />
                            </a>
                            <h3 class="widget-title">Institucional</h3>
                            <ul class="widget-body">
                                <li><a href="contact-us.php">Sobre
                                        Nós</a></li>
                                <li><a href="contact-us.php">FAQ</a></li>
                                <li><a href="contact-us.php">Fale
                                        Conosco</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-4">
                        <div class="widget">
                            <h4 class="widget-title">Minha
                                Conta</h4>
                            <ul class="widget-body">
                                <li><a href="login.php">Cadastre-se</a></li>
                                <li><a href="login.php">Entrar</a></li>
                                <li><a href="contact-us.php">Ajuda</a></li>
                                <li><a href="#">Política
                                        de
                                        Privacidade</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Serviços
                                ao Cliente</h4>
                            <ul class="widget-body">
                                <li><a href="contact-us.php">Métodos
                                        de Pagamento</a></li>
                                <li><a href="contact-us.php">Central
                                        de Suporte</a></li>
                                <li><a href="contact-us.php">Envio</a></li>
                                <li><a href="contact-us.php">Termos
                                        e Condições</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start"
                            style="color:#fff !important">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>,
                            Orvalho Comercio de Perfumes LTDA, <strong>&emsp; CNPJ:</strong> 41.421.932/0001-95



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Footer -->
        </div>
        <!-- End of Page-wrapper -->

        <!-- Start of Sticky Footer -->
        <div class="sticky-footer sticky-content fix-bottom">
            <a href="index.php" class="sticky-link active">
                <i class="w-icon-home"></i>
                <p>Início</p>
            </a>
            <a href="perfumes.php" class="sticky-link">
                <i class="w-icon-list"></i>
                <p>Catálogo</p>
            </a>
            <a href="dashboard.php" class="sticky-link">
                <i class="w-icon-account"></i>
                <p>Usuário</p>
            </a>
            <div class="cart-dropdown dir-up">
                <a href="wishlist.php" class="sticky-link">
                    <i class="w-icon-heart"></i>
                    <p>Favoritos</p>
                </a>

                <!-- End of Dropdown Box -->
            </div>

            <div>
                <a href="contact-us.php" class=" sticky-link">
                    <i class="w-icon-comments"></i>
                    <p>Contato</p>
                </a>

            </div>
        </div>
        <!-- End of Sticky Footer -->

        <!-- Start of Scroll Top -->
        <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
                <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35"
                    cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
            </svg>
        </a>
        <!-- End of Scroll Top -->

        <!-- Start of Mobile Menu -->
        <div class="mobile-menu-wrapper">
            <div class="mobile-menu-overlay"></div>
            <!-- End of .mobile-menu-overlay -->

            <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
            <!-- End of .mobile-menu-close -->

            <div class="mobile-menu-container scrollable">
                <form action="#" method="get" class="input-wrapper">
                    <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                        required />
                    <button class="btn btn-search" type="submit">
                        <i class="w-icon-search"></i>
                    </button>
                </form>
                <!-- End of Search Form -->
                <div class="tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a href="#main-menu" class="nav-link active">Main
                                Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="#categories" class="nav-link">Categories</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- End of Mobile Menu -->

        <!-- Start of Newsletter popup -->
        <div class="newsletter-popup mfp-hide">
            <div class="newsletter-content">
                <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span>
                </h4>
                <h2 class="ls-25">Sign up to Wolmart</h2>
                <p class="text-light ls-10">Subscribe to the Wolmart market
                    newsletter to
                    receive updates on special offers.</p>
                <form action="#" method="get" class="input-wrapper
                input-wrapper-inline input-wrapper-round">
                    <input type="email" class="form-control email font-size-md" name="email" id="email2"
                        placeholder="Your email address" required="">
                    <button class="btn btn-dark" type="submit">SUBMIT</button>
                </form>
                <div class="form-checkbox d-flex align-items-center">
                    <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup"
                        name="hide-newsletter-popup" required="">
                    <label for="hide-newsletter-popup" class="font-size-sm
                    text-light">Don't show this popup again.</label>
                </div>
            </div>
        </div>
        <!-- End of Newsletter popup -->

        <!-- Start of Quick View -->
        <div class="product product-single product-popup">
            <div class="row gutter-lg">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="product-gallery product-gallery-sticky mb-0">
                        <div class="product-single-swiper swiper-container
                        swiper-theme nav-inner">
                            <div class="swiper-wrapper row cols-1 gutter-no">
                                <div class="swiper-slide">
                                    <figure class="product-image">
                                        <img src="assets/images/products/popup/1-440x494.jpg"
                                            data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                            alt="Water Boil Black Utensil" width="800" height="900">
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="product-image">
                                        <img src="assets/images/products/popup/2-440x494.jpg"
                                            data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                            alt="Water Boil Black Utensil" width="800" height="900">
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="product-image">
                                        <img src="assets/images/products/popup/3-440x494.jpg"
                                            data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                            alt="Water Boil Black Utensil" width="800" height="900">
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="product-image">
                                        <img src="assets/images/products/popup/4-440x494.jpg"
                                            data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                            alt="Water Boil Black Utensil" width="800" height="900">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumbs-wrap swiper-container">
                            <div class="product-thumbs swiper-wrapper">
                                <div class="swiper-slide product-thumb">
                                    <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb"
                                        width="103" height="116">
                                </div>
                                <div class="swiper-slide product-thumb">
                                    <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb"
                                        width="103" height="116">
                                </div>
                                <div class="swiper-slide product-thumb">
                                    <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb"
                                        width="103" height="116">
                                </div>
                                <div class="swiper-slide product-thumb">
                                    <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb"
                                        width="103" height="116">
                                </div>
                            </div>
                            <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                            <button class="thumb-down disabled"><i class="w-icon-angle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 overflow-hidden p-relative">
                    <div class="product-details scrollable pl-0">
                        <h2 class="product-title">Electronics Black Wrist Watch</h2>
                        <div class="product-bm-wrapper">
                            <figure class="brand">
                                <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102"
                                    height="48" />
                            </figure>
                            <div class="product-meta">
                                <div class="product-categories">
                                    Category:
                                    <span class="product-category"><a href="#">Electronics</a></span>
                                </div>
                                <div class="product-sku">
                                    SKU: <span>MS46891340</span>
                                </div>
                            </div>
                        </div>

                        <hr class="product-divider">



                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width: 80%;"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                        </div>

                        <div class="product-short-desc">
                            <ul class="list-type-check list-style-none">
                                <li>Ultrices eros in cursus turpis massa cursus
                                    mattis.</li>
                                <li>Volutpat ac tincidunt vitae semper quis
                                    lectus.</li>
                                <li>Aliquam id diam maecenas ultricies mi eget
                                    mauris.</li>
                            </ul>
                        </div>

                        <hr class="product-divider">

                        <div class="product-form product-variation-form
                        product-color-swatch">
                            <label>Color:</label>
                            <div class="d-flex align-items-center
                            product-variations">
                                <a href="#" class="color" style="background-color: #ffcc01"></a>
                                <a href="#" class="color" style="background-color: #ca6d00;"></a>
                                <a href="#" class="color" style="background-color: #1c93cb;"></a>
                                <a href="#" class="color" style="background-color: #333;"></a>
                                <a href="#" class="color" style="background-color: #000;"></a>
                            </div>
                        </div>
                        <div class="product-form product-variation-form
                        product-size-swatch">
                            <label class="mb-1">Size:</label>
                            <div class="flex-wrap d-flex align-items-center
                            product-variations">
                                <a href="#" class="size">Small</a>
                                <a href="#" class="size">Medium</a>
                                <a href="#" class="size">Large</a>
                                <a href="#" class="size">Extra Large</a>
                            </div>
                            <a href="#" class="product-variation-clean">Clean
                                All</a>
                        </div>

                        <div class="product-variation-price">
                            <span></span>
                        </div>

                        <div class="product-form">
                            <div class="product-qty-form">
                                <div class="input-group">
                                    <input class="quantity form-control" type="number" min="1" max="10000000">
                                    <button class="quantity-plus w-icon-plus"></button>
                                    <button class="quantity-minus w-icon-minus"></button>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-cart">
                                <i class="w-icon-cart"></i>
                            </button>
                        </div>

                        <div class="social-links-wrapper">
                            <div class="social-links">
                                <div class="social-icons social-no-color
                                border-thin">

                                    <a href="#" class="social-icon
                                    social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon
                                    social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon
                                    social-instagram w-icon-instagram"></a>
                                    <a href="#" class="social-icon
                                    social-youtube w-icon-youtube"></a>
                                    <a href="#" class="social-icon
                                    social-pinterest w-icon-pinterest"></a>
                                </div>
                            </div>
                            <span class="divider d-xs-show"></span>
                            <div class="product-link-wrapper d-flex">
                                <a href="#" class="btn-product-icon btn-wishlist
                                w-icon-heart"><span></span></a>
                                <a href="#" class="btn-product-icon btn-compare
                                btn-icon-left w-icon-compare"><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Quick view -->

        <!-- Plugin JS File -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/floating-parallax/parallax.min.js"></script>
        <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
        <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/vendor/zoom/jquery.zoom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
        function myGeeks() {
            var g = document.getElementById("GFG").required;
            document.getElementById("sudo").innerHTML = g;
        }
        </script>
        <!-- Main JS -->
        <script src="assets/js/main.min.js"></script>
        <script>
            $(function(){
  $('#cpf').mask('999.999.999-99');
  $('#cnpj').mask('99.999.999/9999-99');

  $('#myInput').keyup(function(){
    const val = $(this).val().replace(/[^0-9]/g, '');
    console.log('val', val);
    if (val.length <= 11) {
      $('#cpf').val(val);
      $(this).val($('#cpf').masked());
      $('#cnpj_cpf').text('CPF');
    } else {
      $('#cnpj').val(val);
      $(this).val($('#cnpj').masked());
      $('#cnpj_cpf').text('CNPJ');
    }
  });
});
        </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

<script>


function _cpf(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf == '') return false;
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999")
        return false;
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    return true;
}
function validarCPF(el){
  if( !_cpf(el.value) ){

    alert("CPF inválido!" + el.value);

    // apaga o valor
    el.value = "";
  }
}
</script>
</body>