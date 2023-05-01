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
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Fale conosco</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

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
 <?php include 'imports.php'; ?>

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
    
     @media only screen and (max-width: 600px) {
         .footer__pagina{
             display: none!important;
         }
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

</head>
<div id="nav" >
            <?php
            require("components/navBar.php");

            ?>
        </div>

<body>
    <div class="page-wrapper">



      


        <div class="sticky-footer sticky-content fix-bottom fixed">
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




        <!-- Start of Main -->
        <main class="main">

            <!-- Start of PageContent -->
            <div class="page-content contact-us" style="margin-top: 20% ;">
                <div class="container">
                    <section class="content-title-section mb-10 mt-10">
                        <h3 class="title title-center mb-3">Informações de Contato
                        </h3>
                        <p class="text-center">Fale Conosco para Solucionar problemas e Sanar Suas Dúvidas</p>
                    </section>
                    <!-- End of Contact Title Section -->

                    <section class="contact-information-section mb-10">
                        <div class=" swiper-container swiper-theme " data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1,
                            'breakpoints': {
                                '480': {
                                    'slidesPerView': 2
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 4
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-xl-4 cols-md-3 cols-sm-2 cols-1">






                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-email">
                                        <i class="w-icon-envelop3"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Nosso E-mail</h4>
                                        <p>contato@orvalhosj.com</p>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-headphone">
                                        <i class=" w-icon-call"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Telefone</h4>
                                        <p>(11) 2679-5912 </p>
                                    </div>
                                </div>

                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon ">
                                        <i class="w-icon-orders2"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Termos e condições</h4>
                                        <label for="remember" class="font-size-md">Ler os <a href="termos.php"
                                                class="text-primary font-size-md" data-bs-toggle="modal"
                                                data-bs-target="#modaltermos">Termos e Condições</a></label>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-headphone ">
                                        <i class="w-icon-instagram"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Instagram</h4>
                                        <p>@orvalho.sj</p>
                                    </div>
                                </div>








                            </div>
                        </div>
                    </section>
                    <!-- End of Contact Information section -->

                    <hr class="divider mb-10 pb-1">

                    <section class="contact-section">
                        <div class="row gutter-lg pb-3">
                            <div class="col-lg-6 mb-8">
                                <h4 class="title mb-3">Perguntas Frequentes</h4>
                                <div class="accordion accordion-bg accordion-gutter-md accordion-border">


                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse2" class="expand">Posso Receber Mais de um Perfume por
                                                mês?</a>
                                        </div>
                                        <div id="collapse2" class="card-body collapsed">
                                            <p class="mb-0">
                                                Sim. Nossos Planos Variam de 1 à 3 Perfumes por mês. Vale Ressaltar que
                                                o Valor Também Varia de Acordo Com Os Planos
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse3" class="expand">Recebo Um Frasco Personalizado Todo
                                                Mês?</a>
                                        </div>
                                        <div id="collapse3" class="card-body collapsed">
                                            <p class="mb-0">
                                                Não. Mensalmente Você Receberá um Refil que Encaixa no Frasco.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse4" class="expand">Eu Escolho o Perfume Que Recebo?</a>
                                        </div>
                                        <div id="collapse4" class="card-body collapsed">
                                            <p class="mb-0">
                                                Não. Você Elabora uma Lista Com Seus Perfumes Favoritos e Preenche Um
                                                Quiz , e de Acordo Com Seus Gostos Enviarems o Perfumes Mais Adequado.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse5" class="expand">Os Perfumes São Originais?</a>
                                        </div>
                                        <div id="collapse5" class="card-body collapsed">
                                            <p class="mb-0">
                                                Sim. Todos os Nossos Perfumes São Originais e Certifiados.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse6" class="expand">Eu posso comprar um perfume?</a>
                                        </div>
                                        <div id="collapse6" class="card-body collapsed">
                                            <p class="mb-0">
                                                Não. Nosso clube te envia um perfume em frasco personalizado de acordo
                                                com o plano mensal que você assina e na sua lista de desejos.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>


                            <div class="col-lg-6 mb-8">
                                <h4 class="title mb-3">Nos Envie Uma Mensagem</h4>
                                <form class="form contact-us-form" action="#" method="post">
                                    <div class="form-group">
                                        <label for="username"> Nome</label>
                                        <input type="text" id="username" name="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email_1">Email</label>
                                        <input type="email" id="email_1" name="email_1" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Sua Mensagem</label>
                                        <textarea id="message" name="message" cols="30" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-rounded">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- End of Contact Section -->
                </div>

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <!-- End Map Section -->
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
     <div class="footer__pagina">
            <?php
            require("footer.php");

            ?>
        </div>
    <!-- End of Footer -->
    </div>


    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
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
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="demo1.html">Home</a></li>
                        <li>
                            <a href="shop-banner-sidebar.html">Shop</a>
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
                                                    class="tip tip-new">New</span></a></li>
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
                                                    class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a href="product-default.html">Default<span
                                                    class="tip tip-hot">Hot</span></a></li>
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
                                <li><a href="my-account.html">My Account</a></li>
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
                                        <li><a href="shop-fullwidth-banner.html">Sale</a></li>
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
                                    <a href="#">Lighting</a>
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
                                    <a href="#">Home Accessories</a>
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
                                    <a href="#">Garden & Outdoors</a>
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
                            <a href="shop-banner-sidebar.html"
                                class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
            
    <!-- End of Mobile Menu -->

    <!-- Plugin JS File -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script>
    /*
        Map Settings
            Find the Latitude and Longitude of your address:
                - https://www.latlong.net/
                - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/
        */

    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<strong>New York Office<\/strong><br>New York, NY 10017",
        popup: true
    }];

    // Map Initial Location
    var initLatitude = 40.75198;
    var initLongitude = -73.96978;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: !window.Wolmart.isMobile,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 11
    };

    var map = $('#googlemaps').gMap(mapSettings);

    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }
    </script>
</body>

</html>