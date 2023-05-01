<?php
session_start();
require_once("admin/database.php");
require_once("config.php");


$sql = "SELECT  imagem FROM baner WHERE imagem_id='3'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$imagem = $row["imagem"];

$_SESSION['email']
?>

<?php

$foundRows = array();
$foundRows1 = array();
$products = array();
$price = array();
if (isset($_POST['filter'])) {
    $gender = $_POST['gender'];

    if (!empty($_POST['brands'])) {
        if ($gender != "ALL") {

            foreach ($_POST['brands'] as $check) {
                $check;
                $query = "SELECT * from product where gender='$gender' and brand_id='$check'";
                $fetch = db::getRecords($query);
                array_push($foundRows, $fetch);
            }
        } else if ($gender == "ALL") {

            foreach ($_POST['brands'] as $check) {
                $check;
                $query = "SELECT * from product where brand_id='$check'";
                $fetch = db::getRecords($query);
                array_push($foundRows, $fetch);
            }
        }
    } else {
        if ($gender == "ALL") {
            $query = "SELECT * from product";
            $products = db::getRecords($query);
        } else {
            $query = "SELECT * from product where gender='$gender'";
            $foundRows1 = db::getRecords($query);
        }
    }
} else if (isset($_POST['search'])) {
    $b_name = $_POST['b_name'];
    $query = "SELECT * FROM product WHERE name LIKE '%$b_name%'";
    $products = db::getRecords($query);
} else {
    $query = "SELECT * from product";
    $products = db::getRecords($query);
}


$query = "SELECT * from brand";
$brands = db::getRecords($query);
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Nosso Catálogo</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
    WebFontConfig = {
        google: {
            families: ['Poppins:400,500,600,700,800', 'Yellowtail:400']
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

    .btn-product1 {
        border-color: #ab8e66;
        background-color: #ab8e66;
        color: #fff;
    }

    .input-btn-product1-hover {
        border-color: #fff;
    }

    @media only screen and (max-width: 480px) {
        #ocult {
            background-image: none !important;
        }
    }

    @media only screen and (max-width: 480px) {
        #onlymobile {
            padding: auto;

        }
    }

    @media only screen and (max-width: 768px) {

        .bannermobile {
            width: 500px;
            height: 350px;
        }
    }

    .btn-wrap {
        position: relative;
        text-align: center;
    }
    
    


    .container1 {
        width: 100%;

        clear: both;
    }

    a {
        display: inline-block;
        color: #fff;
        text-decoration: none;
    }
    
    </style>
               <?php include 'imports.php'; ?>

</head>


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

    .btn-product1 {
        border-color: #ab8e66;
        background-color: #ab8e66;
        color: #fff;
    }

    .input-btn-product1-hover {
        border-color: #fff;
    }

    @media only screen and (max-width: 480px) {
        #ocult {
            background-image: none !important;
        }
    }

    @media only screen and (max-width: 480px) {
        #onlymobile {
            padding: auto;

        }
    }

    @media only screen and (max-width: 768px) {

        .bannermobile {
            width: 500px;
            height: 350px;
        }
    }

    .btn-wrap {
        position: relative;
        text-align: center;
    }


    .container1 {
        width: 100%;

        clear: both;
    }

    a {
        display: inline-block;
        color: #fff;
        text-decoration: none;
    }

   
    </style>
  
</head>

  <div id="nav" >
            <?php
            require("components/navBar.php");

            ?>
        </div>




<body class="bg-grey">
    <div class="page-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-xs-4">
                    <div class="sidebar sidebar-details col-lg-3 col-md-4 col-sm-12 col-xs-12">



                        <div class="wrapper-sidebar">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="widget widget-categories">
                                    <div class="row" style=" margin-top:20px; margin-bottom: 20px">
                                        <div class="col-lg-12">
                                            <h3 class="widgettitle">Gênero</h3>
                                            <select class="form-control" name="gender" id="cars" style="height: 50px">
                                                <option value="ALL" selected>Tudo</option>
                                                <option value="Female">Feminino</option>
                                                <option value="Male">Masculino
                                                </option>
                                                <option value="unisex">Unisex
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <h3 class="widgettitle">Marcas
                                    </h3>
                                    <ul class="list-categories">
                                        <?php
                                        if ($brands) {
                                            foreach ($brands as $brand) {
                                        ?>
                                        <li>
                                            <input type="checkbox" id="cb1<?php echo $brand['id'] ?>" name="brands[]"
                                                value="<?php echo $brand['id'] ?>">
                                            <label for="cb1<?php echo $brand['id'] ?>" class="label-text">
                                                <?php echo $brand['name']; ?>
                                            </label>
                                        </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <input style="width:100%; height:40px; border-radius:5px; "
                                        class="btn-product1 input-btn-product1-hover" type="submit" value="Filtrar"
                                        name="filter" style="width: 100%;color:white">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Start of Main -->


                <div class="col-lg-10 col-xs-8">
                    <main class="main bg-white">

                        <div class="page-content pb-3">
                            <div class="container">
                                <!-- Start of Shop Banner -->
                                <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6 br-sm"
                                    style="background-image: url(http://orvalhosj.com/admin/uploads/<?php echo $imagem ?>); background-color: #E1E5E8; margin-top: 20px; border-radius: 10px;">
                                    <div class="banner-content y-50">
                                        <h5 class="banner-subtitle text-uppercase font-weight-normal">
                                            As melhores Fragrancias a partir
                                        </h5>
                                        <h3 class="banner-title text-capitalize ls-25 mb-4">
                                            R$50 por Mês
                                        </h3>
                                        <a href="planos.php" class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                            Assine Já<i class="w-icon-long-arrow-right"></i>
                                        </a>

                                    </div>
                                </div>
                                <!-- End of Shop Banner -->
                                <!-- Start of Shop Content -->
                                <div class="shop-content toolbox-horizontal">
                                    <!-- Start of Toolbox -->



                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col-lg-10">

                                                <input type="search" class="form-control" name="b_name"
                                                    placeholder="Pesquisar" style="border-radius: 10px;height: 50px;"
                                                    required>
                                            </div>
                                            <div class="col-lg-2">
                                                <input style="width:100%; height:40px; border-radius:5px; "
                                                    class="btn-product1" name="search" type="submit" value="Pesquisar"
                                                    style="width: 100%;">
                                            </div>
                                        </div>
                                    </form>




                <div class="row grid cols-xl-5 cols-lg-4 cols-sm-3 cols-2 appear-animate" id="products-1">


                                        <?php
                                        if ($products) {
                                            foreach ($products as $product) {
                                        ?>

                                        <div class="grid-item 1-1 1-3">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a>
                                                        <img src="admin/uploads/<?php echo $product['image']; ?>"
                                                            alt="img" alt="Product" width="232" height="260" />
                                                    </a>
                                                    <div class="product-action-vertical">



                                                        <?php
                                                                if (isset($_SESSION['email'])) {
                                                                    $user_email = $_SESSION['email'];
                                                                    $p_id = $product['id'];
                                                                    $check = "SELECT u_id FROM fav WHERE u_id='$user_email' and p_id='$p_id'";
                                                                    $checl_d = db::getCell($check);
                                                                    if ($checl_d) {
                                                                ?>
                                                        <a href="action.php?fav=<?php echo $p_id ?>&st=0"><i class="btn-product-icon
                                             w-icon-heart-full" style="color:red"></i></a>
                                                        <?php
                                                                    } else {
                                                                    ?>
                                                        <a href="action.php?fav=<?php echo $p_id ?>&st=1"><i class="btn-product-icon
                                             w-icon-heart-full"></i></a>
                                                        <?php
                                                                    }
                                                                }
                                                                ?>


                                                    </div>
                                                    <div class="product-action">
                                                        <?php

                                                                if (isset($_GET['month']) && isset($_GET['day'])) {
                                                                ?>
                                                        <a class="btn-product"
                                                            href="detalhes.php?id=<?php echo $product['id']; ?>&month=<?php echo $_GET['month']; ?>&day=<?php echo $_GET['day']; ?>"
                                                            style="width: 85%;">Detalhes</a>
                                                        <?php
                                                                } else {
                                                                ?>
                                                        <a class="btn-product"
                                                            href="detalhes.php?id=<?php echo $product['id']; ?>"
                                                            style="width: 85%;">Detalhes</a>
                                                        <?php
                                                                }
                                                                ?>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a
                                                            href="#"><?php echo $product['name']; ?></a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:
                                                100%;"></span>
                                                            <span class="tooltiptext
                                                tooltip-top"></span>
                                                        </div>
                                                        <a class="rating-reviews">(3 reviews)</a>
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
                                        } else if ($foundRows) {
                                            foreach ($foundRows as $rows) {
                                                if ($rows == null) {
                                                ?>
                                        <h5 class="product-name product_title">No Products Found</h5>
                                        <?php
                                                    break;
                                                } else {
                                                    foreach ($rows as $data) {

                                                    ?>


                                        <div class="grid-item 1-1 1-3">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a>
                                                        <img src="admin/uploads/<?php echo $data['image']; ?>"
                                                            alt="img">
                                                    </a>
                                                    <div class="product-action-vertical">



                                                        <?php
                                                                        if (isset($_SESSION['email'])) {
                                                                            $user_email = $_SESSION['user'];
                                                                            $p_id = $product['id'];
                                                                            $check = "SELECT u_id FROM fav WHERE u_id='$user_email' and p_id='$p_id'";
                                                                            $checl_d = db::getCell($check);
                                                                            if ($checl_d) {
                                                                        ?>
                                                        <a href="action.php?fav=<?php echo $p_id ?>&st=0"><i class="btn-product-icon
                                             w-icon-heart-full" style="color:red"></i></a>
                                                        <?php
                                                                            } else {
                                                                            ?>
                                                        <a href="action.php?fav=<?php echo $p_id ?>&st=1"><i class="btn-product-icon
                                             w-icon-heart-full"></i></a>
                                                        <?php
                                                                            }
                                                                        }
                                                                        ?>


                                                    </div>
                                                    <div class="product-action">
                                                        <?php

                                                                        if (isset($_GET['month']) && isset($_GET['day'])) {
                                                                        ?>
                                                        <a class="btn-product"
                                                            href="detalhes.php?id=<?php echo $data['id']; ?>&month=<?php echo $_GET['month']; ?>&day=<?php echo $_GET['day']; ?>"
                                                            style="width: 85%;">Detalhes</a>
                                                        <?php
                                                                        } else {
                                                                        ?>
                                                        <a class="btn-product"
                                                            href="detalhes.php?id=<?php echo $data['id']; ?>"
                                                            style="width: 85%;">Detalhes</a>
                                                        <?php
                                                                        }
                                                                        ?>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a
                                                            href="#"><?php echo $data['name']; ?></a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:
                                                100%;"></span>
                                                            <span class="tooltiptext
                                                tooltip-top"></span>
                                                        </div>
                                                        <a class="rating-reviews">(3 reviews)</a>
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
                                                }
                                            }
                                        } else if ($foundRows1) {
                                            foreach ($foundRows1 as $product) {
                                                ?>


                                        <div class="grid-item 1-1 1-3">
                                            <div class="product product-simple text-center">
                                                <figure class="product-media">
                                                    <a>
                                                        <img src="admin/uploads/<?php echo $product['image']; ?>"
                                                            alt="img" alt="Product" width="232" height="260" />
                                                    </a>
                                                    <div class="product-action-vertical">



                                                        <?php
                                                                if (isset($_SESSION['email'])) {
                                                                    $user_email = $_SESSION['user'];
                                                                    $p_id = $product['id'];
                                                                    $check = "SELECT u_id FROM fav WHERE u_id='$user_email' and p_id='$p_id'";
                                                                    $checl_d = db::getCell($check);
                                                                    if ($checl_d) {
                                                                ?>
                                                        <a href="action.php?fav=<?php echo $p_id ?>&st=0"><i class="btn-product-icon
                                             w-icon-heart-full" style="color:red"></i></a>
                                                        <?php
                                                                    } else {
                                                                    ?>
                                                        <a href="action.php?fav=<?php echo $p_id ?>&st=1"><i class="btn-product-icon
                                             w-icon-heart-full"></i></a>
                                                        <?php
                                                                    }
                                                                }
                                                                ?>


                                                    </div>
                                                    <div class="product-action">
                                                        <?php

                                                                if (isset($_GET['month']) && isset($_GET['day'])) {
                                                                ?>
                                                        <a class="btn-product"
                                                            href="detalhes.php?id=<?php echo $product['id']; ?>&month=<?php echo $_GET['month']; ?>&day=<?php echo $_GET['day']; ?>"
                                                            style="width: 85%;">Detalhes</a>
                                                        <?php
                                                                } else {
                                                                ?>
                                                        <a class="btn-product"
                                                            href="detalhes.php?id=<?php echo $product['id']; ?>"
                                                            style="width: 85%;">Detalhes</a>
                                                        <?php
                                                                }
                                                                ?>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name"><a
                                                            href="#"><?php echo $product['name']; ?></a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:
                                                100%;"></span>
                                                            <span class="tooltiptext
                                                tooltip-top"></span>
                                                        </div>
                                                        <a class="rating-reviews">(3 reviewsT )</a>
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
                                        <h5 class="product-name product_title">Ops, ainda não há nada aqui</h5>
                                        <?php
                                        }
                                        ?>


                                    </div>






                                    <!-- End of Grid Item -->

                                    <!-- End of Product Wrapper -->

                                    <!-- Start of Pagination -->
                                    <div class="toolbox toolbox-pagination justify-content-between">

                                        <ul class="pagination">
                                            <li class="prev disabled">
                                                <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                                    <i class="w-icon-long-arrow-left"></i>Anterior
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="next">
                                                <a href="#" aria-label="Next">
                                                    Próxima<i class="w-icon-long-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Pagination -->
                        </div>
                        <!-- Start of Sidebar, Shop Sidebar -->
                        <aside class="sidebar shop-sidebar left-sidebar sticky-sidebar-wrapper">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                            <!-- Start of Sidebar Content -->
                            <div class="sidebar-content scrollable">
                                <div class="filter-actions">
                                    <label>Filter :</label>
                                    <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                                </div>
                                <!-- Start of Collapsible widget -->

                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->

                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Size</span></h3>
                                    <ul class="widget-body filter-items item-check mt-1">
                                        <li><a href="#">Extra Large</a></li>
                                        <li><a href="#">Large</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Small</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Brand</span></h3>
                                    <ul class="widget-body filter-items item-check mt-1">
                                        <li><a href="#">Elegant Auto Group</a></li>
                                        <li><a href="#">Green Grass</a></li>
                                        <li><a href="#">Node Js</a></li>
                                        <li><a href="#">NS8</a></li>
                                        <li><a href="#">Red</a></li>
                                        <li><a href="#">Skysuite Tech</a></li>
                                        <li><a href="#">Sterling</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Color</span></h3>
                                    <ul class="widget-body filter-items item-check">
                                        <li><a href="#">Black</a></li>
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#">Grey</a></li>
                                        <li><a href="#">Orange</a></li>
                                        <li><a href="#">Yellow</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->
                            </div>
                            <!-- End of Sidebar Content -->
                        </aside>
                        <!-- End of Shop Sidebar -->
                        <!-- End of Shop Content -->
                </div>
            </div>
            </main>
            <!-- End of Main -->
        </div>
        <!-- Start of Footer -->
        <footer class="footer footer-dark  
                                appear-animate" data-animation-options="{
                                'name': 'fadeIn'
                                }" style="margin-top: 40px; width:auto">

            <div class="footer-newsletter bg-primary">
                <div class="container">
                    <div class="row
                                            justify-content-center
                                            align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box
                                                    icon-box-side
                                                    text-white">
                                <div class="icon-box-icon
                                                        d-inline-flex">
                                    <i class="w-icon-envelop3 ml-sm-0 ml-lg-4 "></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 style="color: #fff;" class="icon-box-title
                                                            
                                                            text-uppercase
                                                            font-weight-bold">Receba
                                        todas as
                                        novidade em
                                        tempo real
                                    </h4>
                                    <p style="color: #fff;" class="text-white1">Fique
                                        por dentro
                                        do mundo das
                                        fragrâncias.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6
                                                col-md-9 mt-4
                                                mt-lg-0">
                            <form action="#" method="get" class="input-wrapper
                                                    input-wrapper-inline
                                                    input-wrapper-rounded">
                                <input type="email" class="form-control
                                                        mr-2
                                                        bg-white" name="email" id="email" placeholder="Email" />
                                <button class="btn
                                                        btn-dark
                                                        btn-rounded" type="submit">Inscreva-se<i
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
    </div>
    <div class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start" style="color: #fff !important;">
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
            <i class="w-icon-category"></i>
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

        <a href="contact-us.php" class="sticky-link">
            <i class="w-icon-comments"></i>
            <p>Contato</p>
        </a>

    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
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
                   
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="demo11.html">Home</a></li>
                        <li>
                            <a href="demo11-shop.html">Shop</a>
                            <ul>
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                        <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                    class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                    class="tip tip-new">Novidade</span></a></li>
                                        <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a></li>
                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                        <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                        <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                        <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                        <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                        <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                        <li><a href="shop-list.html">List Mode</a></li>
                                        <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Pages</a>
                                    <ul>
                                        <li><a href="product-variable.html">Variable Product</a></li>
                                        <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                        <li><a href="product-accordion.html">Data In Accordion</a></li>
                                        <li><a href="product-section.html">Data In Sections</a></li>
                                        <li><a href="product-swatch.html">Image Swatch</a></li>
                                        <li><a href="product-extended.html">Extended Info</a>
                                        </li>
                                        <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                    class="tip tip-new">Novidade</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a>Default<span class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                        <li><a href="product-grid.html">Grid Images</a></li>
                                        <li><a href="product-masonry.html">Masonry</a></li>
                                        <li><a href="product-gallery.html">Gallery</a></li>
                                        <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                        <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                        <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="vendor-dokan-store.html">Vendor</a>
                            <ul>
                                <li>
                                    <a href="#">Store Listing</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                        <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                        <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                        <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vendor Store</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                        <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a></li>
                                        <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a></li>
                                        <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="blog-grid.html">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="post-single.html">Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.php">Pages</a>
                            <ul>

                                <li><a href="contact-us.php">About Us</a></li>
                                <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="dashboard.php">My Account</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements.html">Elements</a>
                            <ul>
                                <li><a href="element-products.html">Products</a></li>
                                <li><a href="element-titles.html">Titles</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                                <li><a href="element-categories.html">Product Category</a></li>
                                <li><a href="element-buttons.html">Buttons</a></li>
                                <li><a href="element-accordions.html">Accordions</a></li>
                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                <li><a href="element-tabs.html">Tabs</a></li>
                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                <li><a href="element-instagrams.html">Instagrams</a></li>
                                <li><a href="element-cta.html">Call to Action</a></li>
                                <li><a href="element-vendors.html">Vendors</a></li>
                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="element-icons.html">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-tshirt2"></i>Fashion
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Women</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Jewlery &
                                                Watches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-home"></i>Home & Garden
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Bedroom</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                Bases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                Headboards</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Living Room</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                Beds</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                Chests</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Office</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Breakroom
                                                Tables</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kitchen & Dining</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                Cabinets</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dining Room
                                                Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-electronics"></i>Electronics
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Laptops &amp; Computers</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Desktop
                                                Computers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;
                                                Storage</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Computer
                                                Accessories</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">TV &amp; Video</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Audio
                                                Speakers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Media Streaming
                                                Devices</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Digital Cameras</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Digital SLR
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Sports & Action
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Camera Lenses</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Photo Printer</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Digital Memory
                                                Cards</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cell Phones</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Carrier Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Phone & Cellphone
                                                Cases</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Cellphone
                                                Chargers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-furniture"></i>Furniture
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Furniture</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Sofas & Couches</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Beside Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Dressing Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="#">Lighting</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Light Bulbs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Celling Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Wall Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Bathroom
                                                Lighting</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="#">Home Accessories</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Decorative
                                                Accessories</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Candals &
                                                Holders</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Home Fragrance</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="#">Garden & Outdoors</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.html">Garden
                                                Furniture</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.html">Pressure
                                                Washers</a></li>
                                        <li><a href="shop-fullwidth-banner.html">All Garden
                                                Tools</a></li>
                                        <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gift"></i>Gift Ideas
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-gamepad"></i>Toy & Games
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ice-cream"></i>Cooking
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ios"></i>Smart Phones
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-camera"></i>Cameras & Photo
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.html">
                                <i class="w-icon-ruby"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="demo11-shop.html" class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Start of Quick View -->

    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/skrollr/skrollr.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>