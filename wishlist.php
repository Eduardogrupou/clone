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
    $quiz = "login.php";}
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
            minimum-scale=1.0">

    <title>Perfumes Favoritos</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5
            Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp;
            ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

  
    
    
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
   <?php include 'imports.php'; ?>
<style>
    /* Estilos gerais */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container-fluid {
    padding: 0;
}

/* Estilos da lista de produtos */
.grid-item {
    padding: 10px;
}

.product {
    position: relative;
    text-align: center;
}

.product-media {
    position: relative;
}

.product-action-vertical,
.product-action {
    position: absolute;
    top: 10px;
    right: 10px;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.product:hover .product-action-vertical,
.product:hover .product-action {
    opacity: 1;
}

.btn-product-icon {
    display: inline-block;
    background-color: #fff;
    color: #ab8e66;
    font-size: 20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    margin-bottom: 10px;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.btn-product-icon:hover {
    background-color: #ab8e66;
    color: #fff;
}

.btn-product {
    display: inline-block;
    width: 85%;
    padding: 8px 10px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #ab8e66;
    text-align: center;
    border-radius: 4px;
    transition: background-color 0.3s ease-in-out;
}

.btn-product:hover {
    background-color: #7c6144;
}

/* Estilos da mensagem de "ops, ainda não há nada aqui" */
.wishlist-title {
    padding-top: 50px;
    margin-top: 10%;
    text-align: center;
    color: #000;
}

.wishlist-subtitle {
     padding-top: 50px;
    margin-top: 10%;
    text-align: center;
    color: #ab8e66;
    min-width: 100%!important;
    width: 10%;
}

/* Estilos responsivos */
@media (max-width: 768px) {
    .grid-item {
        width: 50%;
    }
}

@media (max-width: 576px) {
    .grid-item {
        width: 100%;
    }
}
 @media only screen and (max-width: 600px) {
         .footer__pagina{
             display: none!important;
         }
     }

</style>

</head>
<div id="nav" >
            <?php
            require("components/navBar.php");

            ?>
        </div>

<body>
        
        <div id="favo">
        <main class="main wishlist-page">
             

                    <h3 class="wishlist-title" >Meus
                        perfumes Favoritos
                    </h3>


                    <div class="filter-with-title appear-animate">

                        <ul class="nav-filters filter-boxed" data-target="#products-1">



                    </div>
                    <div class="container-fluid">

                        <div class="ml-2 row grid cols-xl-8 cols-lg-6 cols-sm-3 d-flex justify-content-start
                                cols-2
                                appear-animate" id="products-1">
                            <?php
                            $u_id = $_SESSION['email'];
                            //echo $u_id;
                            $get_fav = "SELECT p_id FROM fav WHERE u_id='$u_id'";
                            $fav = db::getRecords($get_fav);

                            if ($fav != NULL) {
                                foreach ($fav as $p_id) {
                                    $p = $p_id['p_id'];
                                    $get_products = "SELECT * FROM product WHERE id='$p'";
                                    $product = db::getRecord($get_products);
                            ?>
                            <div class="grid-item 1-1 1-3">
                                <div class="product product-simple
                                        text-center">
                                    <figure class="product-media">
                                        <a>
                                            <img src="admin/uploads/<?php echo $product['image'] ?>" alt="Product"
                                                width="232" height="260" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="action.php?fav_id=<?php echo $product['id'] ?>" class="
                                                    btn-product-icon
                                                    w-icon-times-circle" title="Remover dos
                                                    favoritos"></a>

                                        </div>
                                        <div class="product-action">
                                            <?php

                                                                if (isset($_GET['month']) && isset($_GET['day'])) {
                                                                ?>
                                            <a class="btn-product"
                                                href="detalhes.php?id=<?php echo $product['id']; ?>&month=<?php echo $_GET['month']; ?>&day=<?php echo $_GET['day']; ?>"
                                                >Detalhes</a>
                                            <?php
                                                                } else {
                                                                ?>
                                            <a class="btn-product" href="detalhes.php?id=<?php echo $product['id']; ?>"
                                                style="width: 85%;">Detalhes</a>
                                            <?php
                                                                }
                                                                ?>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a><?php echo $product['name'] ?></a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings"></span>
                                                <span class="tooltiptext
                                                        tooltip-top"></span>
                                            </div>
                                            <a class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-action">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <?php
                                }
                            } else {
                                ?>
                            <h5 class="wishlist-subtitle">
                             OPS! Ainda não há nada aqui
                            </h5>


                            <?php
                            }

                            ?>
                        </div>
                    </div>
                </div>
                 <div class="footer__pagina">
            <?php
            require("footer.php");

            ?>
        </div>
            

        <!-- Plugin JS File -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/main.min.js"></script>
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
</body>

</html>