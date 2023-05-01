<!DOCTYPE html>
<html lang="en">



    <div>
        <div style="background-color:#141414;">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width,
                    initial-scale=1.0,
                    minimum-scale=1.0">

                <title>Orvalho</title>

                <meta name="keywords" content="Marketplace ecommerce responsive
                    HTML5
                    Template" />
                <meta name="description" content="Wolmart is powerful
                    marketplace
                    &amp;
                    ecommerce responsive Html5 Template.">
                <meta name="author" content="D-THEMES">

                <!-- Favicon -->
                <link rel="icon" type="image/png"
                    href="assets/images/icons/favicon.png">

                <!-- WebFont.js -->
                <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
                <link rel="preload"
                    href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2"
                    as="font" type="font/woff2"
                    crossorigin="anonymous">
                <link rel="preload"
                    href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2"
                    as="font" type="font/woff2"
                    crossorigin="anonymous">
                <link rel="preload"
                    href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2"
                    as="font" type="font/woff2"
                    crossorigin="anonymous">
                <link rel="preload" href="assets/fonts/wolmart.woff?png09e"
                    as="font"
                    type="font/woff" crossorigin="anonymous">

                <!-- Vendor CSS -->
                <link rel="stylesheet" type="text/css"
                    href="assets/vendor/fontawesome-free/css/all.min.css">

                <!-- Plugins CSS -->
                <link rel="stylesheet"
                    href="assets/vendor/swiper/swiper-bundle.min.css">
                <link rel="stylesheet" type="text/css"
                    href="assets/vendor/animate/animate.min.css">
                <link rel="stylesheet" type="text/css"
                    href="assets/vendor/magnific-popup/magnific-popup.min.css">
                <!-- Default CSS -->
                <link rel="stylesheet" type="text/css"
                    href="assets3/css/demo10.min.css">
<style>


.container {
  position: relative;
  width: 100%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #ab8e66;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
a:hover {color: #000;}
    a { color: black; text-decoration: none;}
</style>


            </head>
        </div>

        <body class="home">
            <div class="page-wrapper">
                <!--start os header-->

                <header class="header  ;">
                    <div class="sticky-header fix-top sticky-content pt-md-0 
                        pb-md-0 " style="background-color: #333; height: 60px;">
                        <div class="container-fluid">
                            <div class="header-left">
                                <a href="#" class="mobile-menu-toggle d-lg-none"
                                    aria-label="mobile-menu-toggle">
                                    <svg version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" width="70px"
                                        height="70px"
                                        viewBox="0 0 70 70"
                                        enable-background="new 0 0 70 70"
                                        xml:space="preserve">
                                        <line fill="none" stroke-width="3.028"
                                            stroke-linecap="square"
                                            stroke-linejoin="round"
                                            stroke-miterlimit="10" x1="17.953"
                                            y1="23.538" x2="52.047" y2="23.538"
                                            />
                                            <line fill="none"
                                                stroke-width="3.028"
                                                stroke-linecap="square"
                                                stroke-linejoin="round"
                                                stroke-miterlimit="10"
                                                x1="17.953" y1="34.999"
                                                x2="52.047" y2="34.999" />
                                                <line fill="none"
                                                    stroke-width="3.028"
                                                    stroke-linecap="square"
                                                    stroke-linejoin="round"
                                                    stroke-miterlimit="10"
                                                    x1="17.953" y1="46.462"
                                                    x2="34.707" y2="46.462" />
                                                </svg>
                                            </a>
                                            <!-- End of Mobile Menu Toggle -->
                                            <a href="index.html" class="logo
                                                 ml-auto mr-lg-6
                                                ml-lg-6" style="margin-top:10px ;">
                                                <img
                                                    src="assets3/images/logo.png"
                                                    width="130" height="30"
                                                    alt="Wolmart - Marketplace
                                                    Template Logo">
                                            </a>
                                            <!-- End of Logo -->
                                            <span class="h-divider d-none
                                                d-xl-block mr-6"></span>
                                            <h4 class="change-log d-none
                                                d-xl-block text-white mb-0
                                                pt-0">Change Log v1.1
                                            </h4>
                                            <!-- End of Change Log -->
                                        </div>
                                        <!-- End Of Header Left -->
                  
                                        <nav class="header-right" style="color: #fff;">
                                            <ul class="menu d-none d-lg-flex">
                                                <li class="baixar"><a
                                                        href="demo10.html">Home</a></li>
                                                <li class="baixar"><a href="demo10-shop.html">Catálogo
                                                        de perfumes</a></li>
                                                <li class="baixar"><a href="contact-us.html">Fale
                                                        conosco</a></li>
                                                <li class="baixar"><a href="pricing-page.html">Planos</a></li>
                                                <?php
                                if (isset($_SESSION['email'])) {
                                ?>
                                    <li class="baixar"><a href="dashboard.php">
                                            Minha Conta</a></li>

                                <?php
                                } else {
                                ?>


                                <?php
                                }
                                ?>



                                <?php
                                if (isset($_SESSION['email'])) {
                                ?>
                                    <li style="margin-right: 20px;" class="menu-item ">
                                        <a href="action.php?logout=1" class="stelina-menu-item-title" title="Blogs">Sair</a>
                                        <span class="toggle-submenu"></span>
                                    </li>

                                <?php
                                } else {
                                ?>

                                    <li class="baixar"><a href="login.php"> <i class="w-icon-account"></i>
                                            Entrar</a></li>
                                    <li style="margin-right: 25px;" class="baixar"><a href="login.php"> <i class="w-icon-account"></i>
                                            Cadastre-se</a></li>

                                <?php } ?>
                                                    <!-- End of Menu -->
                  
                                                </nav>
                                                <!-- End of Header Right -->
                                            </div>
                                        </div>
                                    </header>
                            <!-- End of Header -->

                            <!-- Start of Main -->
                           
                                        <!-- End of Iocn Box Wrapper -->
                                       <div class="container-fluid">
                                       <div class="row">
                                        <div class="col-lg-4 col-md-3"></div>
                                        <div class="col-lg-6 col-md-6 mt-lg-6 mt-md-6">  <h3>Qual tipo de perfume está buscando?</h3> </div>
                                      
                                    <div class="col-lg-2 com-md-6"></div>
                                     
                                    </div>
                                    </div>
                                        <section class="banner-area pt-20
                                            box-90"
                                            style="margin-top: 20px;
                                            margin-bottom: 70px;">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="ol-lg-6 col-md-6
                                                        col-sm-2 mt-10 pt-sm-10
                                                        pt-lg-0 pt-md-0">
                                                        <div class="banner-2
                                                            pos-relative
                                                            mb-30">
                                                            <div class="container">
                                                            <a href="quiz-male.php"><img
                                                                    src="assets3/images/bearded-man-drinking-in-a-bar-min.jpg"
                                                                    alt=""></a>
                                                                   
                                                                        
                                                                        <div class="middle">
                                                                          <a href="quiz-male.php" class="text">Masculinos</a>
                                                                        </div>
                                                                      </div>
                                                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6
                                                        col-md-6 col-sm-2 mt-10
                                                        pt-sm-10 pt-lg-0
                                                        pt-md-0">
                                                        <div class="banner-2
                                                            pos-relative
                                                            mb-20">
                                                           <div class="container">
                                                            <a href="quiz-female.php"><img
                                                                    src="assets3/images/portrait-of-sexy-fashion-modern-businesswoman-model-in-white-suit-with-handbag-posing-on-the-street-background-behind-blue-sky-min.jpg">
                                                                    <div class="middle">
                                                                        <a href="quiz-female.php" class="text">Femininos</a>
                                                                    </div>  
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>



            </div>
                                        <!-- End of Category Banner 2Cols -->
                                      
                            <!-- Start of Footer -->
                            <footer class="footer footer-dark
                                appear-animate"
                                data-animation-options="{
                                'name': 'fadeIn'
                                }" style="margin-top: 40px;">

                              
                                <div class="container-fluid">
                                    <div class="footer-top">
                                        <div class="row">
                                            <div class="col-sm-3"
                                                style="margin-top:-55px
                                                ; margin-left:1%">
                                                <div class="widget
                                                    widget-about">
                                                    <a href="demo10.html"
                                                        class="logo-footer">
                                                        <img
                                                            src="assets/images/demos/demo10/footer-logo.png"
                                                            alt="logo-footer"
                                                            width="144"
                                                            height="45" />
                                                    </a>
                                                    <div
                                                        class="widget-body">
                                                        <p
                                                            class="widget-about-desc">Register
                                                            now to get
                                                            updates on
                                                            pronot get up
                                                            icons
                                                            & coupons ster
                                                            now toon.
                                                        </p>

                                                        <div
                                                            class="social-icons
                                                            social-icons-colored
                                                            mt-4">
                                                            <a href="#"
                                                                class="social-icon
                                                                social-facebook
                                                                w-icon-facebook"></a>
                                                            <a href="#"
                                                                class="social-icon
                                                                social-twitter
                                                                w-icon-twitter"></a>
                                                            <a href="#"
                                                                class="social-icon
                                                                social-instagram
                                                                w-icon-instagram"></a>
                                                            <a href="#"
                                                                class="social-icon
                                                                social-youtube
                                                                w-icon-youtube"></a>
                                                            <a href="#"
                                                                class="social-icon
                                                                social-pinterest
                                                                w-icon-pinterest"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="widget">
                                                    <h3
                                                        class="widget-title">Institucional</h3>
                                                    <ul class="widget-body">
                                                        <li><a
                                                                href="contact-us.html">Sobre
                                                                Nós</a></li>
                                                        <li><a
                                                                href="contact-us.html">FAQ</a></li>
                                                        <li><a
                                                                href="contact-us.html">Fale
                                                                Conosco</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="widget">
                                                    <h4
                                                        class="widget-title">Minha
                                                        Conta</h4>
                                                    <ul class="widget-body">
                                                        <li><a
                                                                href="login.html">Cadastre-se</a></li>
                                                        <li><a
                                                                href="login.html">Entrar</a></li>
                                                        <li><a
                                                                href="contact-us.html">Ajuda</a></li>
                                                        <li><a href="#">Política
                                                                de
                                                                Privacidade</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="widget">
                                                    <h4
                                                        class="widget-title">Serviços
                                                        ao Cliente</h4>
                                                    <ul class="widget-body">
                                                        <li><a
                                                                href="contact-us.html">Métodos
                                                                de Pagamento</a></li>
                                                        <li><a
                                                                href="contact-us.html">Central
                                                                de Suporte</a></li>
                                                        <li><a
                                                                href="contact-us.html">Envio</a></li>
                                                        <li><a
                                                                href="contact-us.html">Termos
                                                                e Condições</a></li>
                                                    </ul>
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
    <a href="demo10.html" class="sticky-link active">
        <i class="w-icon-home"></i>
        <p>Início</p>
    </a>
    <a href="shop-banner-sidebar.html" class="sticky-link">
        <i class="w-icon-category"></i>
        <p>Catálogo</p>
    </a>
    <a href="my-account.html" class="sticky-link">
        <i class="w-icon-account"></i>
        <p>Account</p>
    </a>
    <div class="cart-dropdown dir-up">
        <a href="cart.html" class="sticky-link">
            <i class="w-icon-cart"></i>
            <p>Cart</p>
        </a>
        <div class="dropdown-box">
            <div class="products">
                <div class="product product-cart">
                    <div class="product-detail">
                        <h3 class="product-name">
                            <a>Beige knitted elas<br>tic
                                runner shoes</a>
                        </h3>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$25.68</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a>
                            <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close" aria-label="button">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="product product-cart">
                    <div class="product-detail">
                        <h3 class="product-name">
                            <a>Blue utility pina<br>fore
                                denim dress</a>
                        </h3>
                        <div class="price-box">
                            <span class="product-quantity">1</span>
                            <span class="product-price">$32.99</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a>
                            <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close" aria-label="button">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="cart-total">
                <label>Subtotal:</label>
                <span class="price">$58.67</span>
            </div>

            <div class="cart-action">
                <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
            </div>
        </div>
        <!-- End of Dropdown Box -->
    </div>

    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="w-icon-search"></i>
            <p>Search</p>
        </a>
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
    </div>
</div>
<!-- End of Sticky Footer -->

                        <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo10.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Início</p>
        </a>
        <a href="demo10-shop.html" class="sticky-link">
            <i class="w-icon-list"></i>
            <p>Catálogo</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Usuário</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="wishlist.html" class="sticky-link">
                <i class="w-icon-heart"></i>
                <p>Favoritos</p>
            </a>
            
            <!-- End of Dropdown Box -->
        </div>

        <div>
            <a href="contact-us.html" class=" sticky-link">
                <i class="w-icon-comments"></i>
                <p>Contato</p>
            </a>
           
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"> <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle> </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

                                <div class="mobile-menu-container
                                    scrollable">
                                    <form action="#" method="get"
                                        class="input-wrapper">
                                        <input type="text"
                                            class="form-control"
                                            name="search"
                                            autocomplete="off"
                                            placeholder="Search"
                                            required />
                                        <button class="btn btn-search"
                                            type="submit">
                                            <i class="w-icon-search"></i>
                                        </button>
                                    </form>
                                    <!-- End of Search Form -->
                                    <div class="tab">
                                        <ul class="nav nav-tabs"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a href="#main-menu"
                                                    class="nav-link active">Main
                                                    Menu</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#categories"
                                                    class="nav-link">Categories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active"
                                            id="main-menu">
                                            <ul class="mobile-menu">
                                                <li><a href="demo10.html">Home</a></li>
                                                <li>
                                                    <a
                                                        href="shop-banner-sidebar.html">Shop</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Shop
                                                                Pages</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-banner-sidebar.html">Banner
                                                                        With
                                                                        Sidebar</a></li>
                                                                <li><a
                                                                        href="shop-boxed-banner.html">Boxed
                                                                        Banner</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Full
                                                                        Width
                                                                        Banner</a></li>
                                                                <li><a
                                                                        href="shop-horizontal-filter.html">Horizontal
                                                                        Filter<span
                                                                            class="tip
                                                                            tip-hot">Hot</span></a></li>
                                                                <li><a
                                                                        href="shop-off-canvas.html">Off
                                                                        Canvas
                                                                        Sidebar<span
                                                                            class="tip
                                                                            tip-new">New</span></a></li>
                                                                <li><a
                                                                        href="shop-infinite-scroll.html">Infinite
                                                                        Ajax
                                                                        Scroll</a></li>
                                                                <li><a
                                                                        href="shop-right-sidebar.html">Right
                                                                        Sidebar</a></li>
                                                                <li><a
                                                                        href="shop-both-sidebar.html">Both
                                                                        Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Shop
                                                                Layouts</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-grid-3cols.html">3
                                                                        Columns
                                                                        Mode</a></li>
                                                                <li><a
                                                                        href="shop-grid-4cols.html">4
                                                                        Columns
                                                                        Mode</a></li>
                                                                <li><a
                                                                        href="shop-grid-5cols.html">5
                                                                        Columns
                                                                        Mode</a></li>
                                                                <li><a
                                                                        href="shop-grid-6cols.html">6
                                                                        Columns
                                                                        Mode</a></li>
                                                                <li><a
                                                                        href="shop-grid-7cols.html">7
                                                                        Columns
                                                                        Mode</a></li>
                                                                <li><a
                                                                        href="shop-grid-8cols.html">8
                                                                        Columns
                                                                        Mode</a></li>
                                                                <li><a
                                                                        href="shop-list.html">List
                                                                        Mode</a></li>
                                                                <li><a
                                                                        href="shop-list-sidebar.html">List
                                                                        Mode
                                                                        With
                                                                        Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Product
                                                                Pages</a>
                                                            <ul>
                                                                <li><a
                                                                        href="product-variable.html">Variable
                                                                        Product</a></li>
                                                                <li><a
                                                                        href="product-featured.html">Featured
                                                                        &amp;
                                                                        Sale</a></li>
                                                                <li><a
                                                                        href="product-accordion.html">Data
                                                                        In
                                                                        Accordion</a></li>
                                                                <li><a
                                                                        href="product-section.html">Data
                                                                        In
                                                                        Sections</a></li>
                                                                <li><a
                                                                        href="product-swatch.html">Image
                                                                        Swatch</a></li>
                                                                <li><a
                                                                        href="product-extended.html">Extended
                                                                        Info</a>
                                                                </li>
                                                                <li><a
                                                                        href="product-without-sidebar.html">Without
                                                                        Sidebar</a></li>
                                                                <li><a
                                                                        href="product-video.html">360<sup>o</sup>
                                                                        &amp;
                                                                        Video<span
                                                                            class="tip
                                                                            tip-new">New</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Product
                                                                Layouts</a>
                                                            <ul>
                                                                <li><a
                                                                       >Default<span
                                                                            class="tip
                                                                            tip-hot">Hot</span></a></li>
                                                                <li><a
                                                                        href="product-vertical.html">Vertical
                                                                        Thumbs</a></li>
                                                                <li><a
                                                                        href="product-grid.html">Grid
                                                                        Images</a></li>
                                                                <li><a
                                                                        href="product-masonry.html">Masonry</a></li>
                                                                <li><a
                                                                        href="product-gallery.html">Gallery</a></li>
                                                                <li><a
                                                                        href="product-sticky-info.html">Sticky
                                                                        Info</a></li>
                                                                <li><a
                                                                        href="product-sticky-thumb.html">Sticky
                                                                        Thumbs</a></li>
                                                                <li><a
                                                                        href="product-sticky-both.html">Sticky
                                                                        Both</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a
                                                        href="vendor-dokan-store.html">Vendor</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Store
                                                                Listing</a>
                                                            <ul>
                                                                <li><a
                                                                        href="vendor-dokan-store-list.html">Store
                                                                        listing
                                                                        1</a></li>
                                                                <li><a
                                                                        href="vendor-wcfm-store-list.html">Store
                                                                        listing
                                                                        2</a></li>
                                                                <li><a
                                                                        href="vendor-wcmp-store-list.html">Store
                                                                        listing
                                                                        3</a></li>
                                                                <li><a
                                                                        href="vendor-wc-store-list.html">Store
                                                                        listing
                                                                        4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Vendor
                                                                Store</a>
                                                            <ul>
                                                                <li><a
                                                                        href="vendor-dokan-store.html">Vendor
                                                                        Store
                                                                        1</a></li>
                                                                <li><a
                                                                        href="vendor-wcfm-store-product-grid.html">Vendor
                                                                        Store
                                                                        2</a></li>
                                                                <li><a
                                                                        href="vendor-wcmp-store-product-grid.html">Vendor
                                                                        Store
                                                                        3</a></li>
                                                                <li><a
                                                                        href="vendor-wc-store-product-grid.html">Vendor
                                                                        Store
                                                                        4</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="blog.html">Blog</a>
                                                    <ul>
                                                        <li><a
                                                                href="blog.html">Classic</a></li>
                                                        <li><a
                                                                href="blog-listing.html">Listing</a></li>
                                                        <li>
                                                            <a
                                                                href="blog-grid.html">Grid</a>
                                                            <ul>
                                                                <li><a
                                                                        href="blog-grid-2cols.html">Grid
                                                                        2
                                                                        columns</a></li>
                                                                <li><a
                                                                        href="blog-grid-3cols.html">Grid
                                                                        3
                                                                        columns</a></li>
                                                                <li><a
                                                                        href="blog-grid-4cols.html">Grid
                                                                        4
                                                                        columns</a></li>
                                                                <li><a
                                                                        href="blog-grid-sidebar.html">Grid
                                                                        sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Masonry</a>
                                                            <ul>
                                                                <li><a
                                                                        href="blog-masonry-2cols.html">Masonry
                                                                        2
                                                                        columns</a></li>
                                                                <li><a
                                                                        href="blog-masonry-3cols.html">Masonry
                                                                        3
                                                                        columns</a></li>
                                                                <li><a
                                                                        href="blog-masonry-4cols.html">Masonry
                                                                        4
                                                                        columns</a></li>
                                                                <li><a
                                                                        href="blog-masonry-sidebar.html">Masonry
                                                                        sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Mask</a>
                                                            <ul>
                                                                <li><a
                                                                        href="blog-mask-grid.html">Blog
                                                                        mask
                                                                        grid</a></li>
                                                                <li><a
                                                                        href="blog-mask-masonry.html">Blog
                                                                        mask
                                                                        masonry</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="post-single.html">Single
                                                                Post</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="contact-us.html">Pages</a>
                                                    <ul>

                                                        <li><a
                                                                href="contact-us.html">About
                                                                Us</a></li>
                                                        <li><a
                                                                href="become-a-vendor.html">Become
                                                                A
                                                                Vendor</a></li>
                                                        <li><a
                                                                href="contact-us.html">Contact
                                                                Us</a></li>
                                                        <li><a
                                                                href="login.html">Login</a></li>
                                                        <li><a
                                                                href="faq.html">FAQs</a></li>
                                                        <li><a
                                                                href="error-404.html">Error
                                                                404</a></li>
                                                        <li><a
                                                                href="coming-soon.html">Coming
                                                                Soon</a></li>
                                                        <li><a
                                                                href="wishlist.html">Wishlist</a></li>
                                                        <li><a
                                                                href="cart.html">Cart</a></li>
                                                        <li><a
                                                                href="checkout.html">Checkout</a></li>
                                                        <li><a
                                                                href="my-account.html">My
                                                                Account</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="elements.html">Elements</a>
                                                    <ul>
                                                        <li><a
                                                                href="element-products.html">Products</a></li>
                                                        <li><a
                                                                href="element-titles.html">Titles</a></li>
                                                        <li><a
                                                                href="element-typography.html">Typography</a></li>
                                                        <li><a
                                                                href="element-categories.html">Product
                                                                Category</a></li>
                                                        <li><a
                                                                href="element-buttons.html">Buttons</a></li>
                                                        <li><a
                                                                href="element-accordions.html">Accordions</a></li>
                                                        <li><a
                                                                href="element-alerts.html">Alert
                                                                &amp;
                                                                Notification</a></li>
                                                        <li><a
                                                                href="element-tabs.html">Tabs</a></li>
                                                        <li><a
                                                                href="element-testimonials.html">Testimonials</a></li>
                                                        <li><a
                                                                href="element-blog-posts.html">Blog
                                                                Posts</a></li>
                                                        <li><a
                                                                href="element-instagrams.html">Instagrams</a></li>
                                                        <li><a
                                                                href="element-cta.html">Call
                                                                to
                                                                Action</a></li>
                                                        <li><a
                                                                href="element-vendors.html">Vendors</a></li>
                                                        <li><a
                                                                href="element-icon-boxes.html">Icon
                                                                Boxes</a></li>
                                                        <li><a
                                                                href="element-icons.html">Icons</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane"
                                            id="categories">
                                            <ul class="mobile-menu">
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-tshirt2"></i>Fashion
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Women</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">New
                                                                        Arrivals</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Best
                                                                        Sellers</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Trending</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Clothing</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Shoes</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Bags</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Accessories</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Jewlery
                                                                        &
                                                                        Watches</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Men</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">New
                                                                        Arrivals</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Best
                                                                        Sellers</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Trending</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Clothing</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Shoes</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Bags</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Accessories</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Jewlery
                                                                        &
                                                                        Watches</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-home"></i>Home
                                                        & Garden
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Bedroom</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Beds,
                                                                        Frames
                                                                        &
                                                                        Bases</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Dressers</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Nightstands</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Kid's
                                                                        Beds
                                                                        &
                                                                        Headboards</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Armoires</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Living
                                                                Room</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Coffee
                                                                        Tables</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Chairs</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Tables</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Futons
                                                                        &
                                                                        Sofa
                                                                        Beds</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Cabinets
                                                                        &
                                                                        Chests</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Office</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Office
                                                                        Chairs</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Desks</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Bookcases</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">File
                                                                        Cabinets</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Breakroom
                                                                        Tables</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Kitchen
                                                                & Dining</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Dining
                                                                        Sets</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Kitchen
                                                                        Storage
                                                                        Cabinets</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Bashers
                                                                        Racks</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Dining
                                                                        Chairs</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Dining
                                                                        Room
                                                                        Tables</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Bar
                                                                        Stools</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-electronics"></i>Electronics
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Laptops
                                                                &amp;
                                                                Computers</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Desktop
                                                                        Computers</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Monitors</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Laptops</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Hard
                                                                        Drives
                                                                        &amp;
                                                                        Storage</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Computer
                                                                        Accessories</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">TV
                                                                &amp; Video</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">TVs</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Home
                                                                        Audio
                                                                        Speakers</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Projectors</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Media
                                                                        Streaming
                                                                        Devices</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Digital
                                                                Cameras</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Digital
                                                                        SLR
                                                                        Cameras</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Sports
                                                                        &
                                                                        Action
                                                                        Cameras</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Camera
                                                                        Lenses</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Photo
                                                                        Printer</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Digital
                                                                        Memory
                                                                        Cards</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Cell
                                                                Phones</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Carrier
                                                                        Phones</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Unlocked
                                                                        Phones</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Phone
                                                                        &
                                                                        Cellphone
                                                                        Cases</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Cellphone
                                                                        Chargers</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-furniture"></i>Furniture
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Furniture</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Sofas
                                                                        &
                                                                        Couches</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Armchairs</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Bed
                                                                        Frames</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Beside
                                                                        Tables</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Dressing
                                                                        Tables</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Lighting</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Light
                                                                        Bulbs</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Lamps</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Celling
                                                                        Lights</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Wall
                                                                        Lights</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Bathroom
                                                                        Lighting</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Home
                                                                Accessories</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Decorative
                                                                        Accessories</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Candals
                                                                        &
                                                                        Holders</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Home
                                                                        Fragrance</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Mirrors</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Clocks</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">Garden
                                                                & Outdoors</a>
                                                            <ul>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Garden
                                                                        Furniture</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Lawn
                                                                        Mowers</a>
                                                                </li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Pressure
                                                                        Washers</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">All
                                                                        Garden
                                                                        Tools</a></li>
                                                                <li><a
                                                                        href="shop-fullwidth-banner.html">Outdoor
                                                                        Dining</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-heartbeat"></i>Healthy
                                                        &
                                                        Beauty
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-gift"></i>Gift
                                                        Ideas
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-gamepad"></i>Toy
                                                        & Games
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-ice-cream"></i>Cooking
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-ios"></i>Smart
                                                        Phones
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-camera"></i>Cameras
                                                        & Photo
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-fullwidth-banner.html">
                                                        <i
                                                            class="w-icon-ruby"></i>Accessories
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="shop-banner-sidebar.html"
                                                        class="font-weight-bold
                                                        text-primary
                                                        text-uppercase
                                                        ls-25">
                                                        View All Categories<i
                                                            class="w-icon-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Mobile Menu -->

                            <!-- Start of Newsletter popup -->
                           
                            <!-- End of Newsletter popup -->

                            <!-- Start of Quick View -->
                            <div class="product product-single
                                product-popup">
                                <div class="row gutter-lg">
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <div class="product-gallery
                                            product-gallery-sticky mb-0">
                                            <div
                                                class="product-single-swiper
                                                swiper-container
                                                swiper-theme nav-inner">
                                                <div class="swiper-wrapper
                                                    row cols-1 gutter-no">
                                                    <div
                                                        class="swiper-slide">
                                                        <figure
                                                            class="product-image">
                                                            <img
                                                                src="assets/images/products/popup/1-440x494.jpg"
                                                                data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                                                alt="Water
                                                                Boil Black
                                                                Utensil"
                                                                width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="swiper-slide">
                                                        <figure
                                                            class="product-image">
                                                            <img
                                                                src="assets/images/products/popup/2-440x494.jpg"
                                                                data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                                                alt="Water
                                                                Boil Black
                                                                Utensil"
                                                                width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="swiper-slide">
                                                        <figure
                                                            class="product-image">
                                                            <img
                                                                src="assets/images/products/popup/3-440x494.jpg"
                                                                data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                                                alt="Water
                                                                Boil Black
                                                                Utensil"
                                                                width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                    <div
                                                        class="swiper-slide">
                                                        <figure
                                                            class="product-image">
                                                            <img
                                                                src="assets/images/products/popup/4-440x494.jpg"
                                                                data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                                                alt="Water
                                                                Boil Black
                                                                Utensil"
                                                                width="800"
                                                                height="900">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-thumbs-wrap
                                                swiper-container">
                                                <div class="product-thumbs
                                                    swiper-wrapper">
                                                    <div class="swiper-slide
                                                        product-thumb">
                                                        <img
                                                            src="assets/images/products/popup/1-103x116.jpg"
                                                            alt="Product
                                                            Thumb"
                                                            width="103"
                                                            height="116">
                                                    </div>
                                                    <div class="swiper-slide
                                                        product-thumb">
                                                        <img
                                                            src="assets/images/products/popup/2-103x116.jpg"
                                                            alt="Product
                                                            Thumb"
                                                            width="103"
                                                            height="116">
                                                    </div>
                                                    <div class="swiper-slide
                                                        product-thumb">
                                                        <img
                                                            src="assets/images/products/popup/3-103x116.jpg"
                                                            alt="Product
                                                            Thumb"
                                                            width="103"
                                                            height="116">
                                                    </div>
                                                    <div class="swiper-slide
                                                        product-thumb">
                                                        <img
                                                            src="assets/images/products/popup/4-103x116.jpg"
                                                            alt="Product
                                                            Thumb"
                                                            width="103"
                                                            height="116">
                                                    </div>
                                                </div>
                                                <button class="thumb-up
                                                    disabled"><i
                                                        class="w-icon-angle-left"></i></button>
                                                <button class="thumb-down
                                                    disabled"><i
                                                        class="w-icon-angle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 overflow-hidden
                                        p-relative">
                                        <div class="product-details
                                            scrollable pl-0">
                                            <h2 class="product-title">Electronics
                                                Black Wrist Watch</h2>
                                            <div class="product-bm-wrapper">
                                                <figure class="brand">
                                                    <img
                                                        src="assets/images/products/brand/brand-1.jpg"
                                                        alt="Brand"
                                                        width="102"
                                                        height="48" />
                                                </figure>
                                                <div class="product-meta">
                                                    <div
                                                        class="product-categories">
                                                        Category:
                                                        <span
                                                            class="product-category"><a
                                                                href="#">Electronics</a></span>
                                                    </div>
                                                    <div
                                                        class="product-sku">
                                                        SKU: <span>MS46891340</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="product-divider">
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings"
                                                        style="width: 80%;"></span>
                                                    <span class="tooltiptext
                                                        tooltip-top"></span>
                                                </div>
                                                <a href="#"
                                                    class="rating-reviews">(3
                                                    Reviews)</a>
                                            </div>

                                            <div class="product-short-desc">
                                                <ul class="list-type-check
                                                    list-style-none">
                                                    <li>Ultrices eros in
                                                        cursus turpis massa
                                                        cursus
                                                        mattis.</li>
                                                    <li>Volutpat ac
                                                        tincidunt vitae
                                                        semper quis
                                                        lectus.</li>
                                                    <li>Aliquam id diam
                                                        maecenas ultricies
                                                        mi eget
                                                        mauris.</li>
                                                </ul>
                                            </div>

                                            <hr class="product-divider">
                                            <div class="product-form
                                                product-variation-form
                                                product-color-swatch">
                                                <label>Color:</label>
                                                <div class="d-flex
                                                    align-items-center
                                                    product-variations">
                                                    <a href="#"
                                                        class="color"
                                                        style="background-color:
                                                        #ffcc01"></a>
                                                    <a href="#"
                                                        class="color"
                                                        style="background-color:
                                                        #ca6d00;"></a>
                                                    <a href="#"
                                                        class="color"
                                                        style="background-color:
                                                        #1c93cb;"></a>
                                                    <a href="#"
                                                        class="color"
                                                        style="background-color:
                                                        #ccc;"></a>
                                                    <a href="#"
                                                        class="color"
                                                        style="background-color:
                                                        #000;"></a>
                                                </div>
                                            </div>
                                            <div class="product-form
                                                product-variation-form
                                                product-size-swatch">
                                                <label class="mb-1">Size:</label>
                                                <div class="flex-wrap d-flex
                                                    align-items-center
                                                    product-variations">
                                                    <a href="#"
                                                        class="size">Small</a>
                                                    <a href="#"
                                                        class="size">Medium</a>
                                                    <a href="#"
                                                        class="size">Large</a>
                                                    <a href="#"
                                                        class="size">Extra
                                                        Large</a>
                                                </div>
                                                <a href="#"
                                                    class="product-variation-clean">Clean
                                                    All</a>
                                            </div>

                                            <div
                                                class="product-variation-price">
                                                <span></span>
                                            </div>

                                            <div class="product-form">
                                                <div
                                                    class="product-qty-form">
                                                    <div
                                                        class="input-group">
                                                        <input
                                                            class="quantity
                                                            form-control"
                                                            type="number"
                                                            min="1"
                                                            max="10000000">
                                                        <button
                                                            class="quantity-plus
                                                            w-icon-plus"></button>
                                                        <button
                                                            class="quantity-minus
                                                            w-icon-minus"></button>
                                                    </div>
                                                </div>
                                                <button class="btn
                                                    btn-primary btn-cart">
                                                    <i class="w-icon-cart"></i>
                                                </button>
                                            </div>

                                            <div
                                                class="social-links-wrapper">
                                                <div class="social-links">
                                                    <div class="social-icons
                                                        social-no-color
                                                        border-thin">

                                                        <a href="#"
                                                            class="social-icon
                                                            social-facebook
                                                            w-icon-facebook"></a>
                                                        <a href="#"
                                                            class="social-icon
                                                            social-twitter
                                                            w-icon-twitter"></a>
                                                        <a href="#"
                                                            class="social-icon
                                                            social-instagram
                                                            w-icon-instagram"></a>
                                                        <a href="#"
                                                            class="social-icon
                                                            social-youtube
                                                            w-icon-youtube"></a>
                                                        <a href="#"
                                                            class="social-icon
                                                            social-pinterest
                                                            w-icon-pinterest"></a>
                                                    </div>
                                                </div>
                                                <span class="divider
                                                    d-xs-show"></span>
                                                <div
                                                    class="product-link-wrapper
                                                    d-flex">
                                                    <a href="#"
                                                        class="btn-product-icon
                                                        btn-wishlist
                                                        w-icon-heart"><span></span></a>
                                                    <a href="#"
                                                        class="btn-product-icon
                                                        btn-compare
                                                        btn-icon-left
                                                        w-icon-compare"><span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Quick view -->

                            <!-- Plugin JS File -->
                            <script
                                src="assets/vendor/jquery/jquery.min.js"></script>
                            <script
                                src="assets/vendor/floating-parallax/parallax.min.js"></script>
                            <script
                                src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
                            <script
                                src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
                            <script
                                src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
                            <script
                                src="assets/vendor/swiper/swiper-bundle.min.js"></script>
                            <script
                                src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
                            <script
                                src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
                            <script src="assets/vendor/zoom/jquery.zoom.js"></script>
                            <!-- Main JS -->
                            <script src="assets/js/main.min.js"></script>
                        </body>