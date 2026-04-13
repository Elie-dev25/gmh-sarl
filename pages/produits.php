<?php
$page_title = 'Produits';
$page_description = 'Découvrez notre gamme complète de produits informatiques, healthcare et solutions professionnelles.';
include '../includes/header.php';
?>

<!-- CSS supplémentaires pour cette page -->
<link rel="stylesheet" href="../assets/css/plugins/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="../assets/css/plugins/magnific-popup/magnific-popup.css">
<link rel="stylesheet" href="../assets/css/plugins/jquery.countdown.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/skins/skin-demo-4.css">
<link rel="stylesheet" href="../assets/css/demos/demo-4.css">
<link rel="stylesheet" href="../assets/css/active.css">
<link rel="stylesheet" href="../assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">

<style>
    .intro-slide {
        background-size: cover;
        background-position: center;
        height: 400px;
    }
    /* Ajuster le contenu pour le nouveau header */
    .page-wrapper {
        padding-top: 70px;
    }
</style>

    <div class="page-wrapper">

        <main class="main">
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
                    data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(../assets/images/demos/demo-4/slider/slide-1.png);">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <!-- <h3 class="intro-subtitle text-third">Deals and Promotions</h3> -->
                                    <h1 class="intro-title">Commerce</h1>
                                    <h1 class="intro-title">Géneral</h1><!-- End .intro-title -->


                                    <a href="about.php" class="btn btn-primary btn-round">
                                        <span>En savoir plus</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-lg-11 offset-lg-1 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(../assets/images/demos/demo-4/slider/slide-2.png);">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <!-- <h3 class="intro-subtitle text-primary">New Arrival</h3> -->
                                    <h1 class="intro-title">Healthcare <br>Solutions </h1><!-- End .intro-title -->


                                    <a href="category.html" class="btn btn-primary btn-round">
                                        <span>En savoir plus</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-md-6 offset-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <h2 class="title text-center mb-4">Nos produits</h2><!-- End .title text-center -->
                
                <div class="cat-blocks-container">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="../assets/images/demos/demo-4/cats/1.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Imprimante thermique</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="../assets/images/demos/demo-4/cats/2.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Balance scolaire</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="../assets/images/demos/demo-4/cats/3.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">RC-4/RC-4HC</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="../assets/images/demos/demo-4/cats/4.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Réfrigérateur médical</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="../assets/images/demos/demo-4/cats/5.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Imprimante matricielle</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="../assets/images/demos/demo-4/cats/6.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Pèse-bébé numérique servocare</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->
                    </div><!-- End .row -->
                </div><!-- End .cat-blocks-container -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-4 -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="../assets/images/demos/demo-4/banners/Capture d’écran 2024-06-21 111652.png" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">MADE IN GERMANY</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>Transpalette peseur <br>KERN VHB</strong></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Transpalette peseur')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="../assets/images/demos/demo-4/banners/Capture d’écran 2024-06-21 111734.png" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">MADE IN GERMANY</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>Pèse-bébé numérique <br> servocare</strong></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Pèse-bébé numérique')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="../assets/images/demos/demo-4/banners/Capture d’écran 2024-06-21 120031.png" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">MADE IN GERMANY</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>Centrifugeuse</strong> </a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Centrifugeuse')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-3"></div><!-- End .mb-5 -->

            <div class="container new-arrivals">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Gatégories de produits</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                   <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">Tout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab" aria-controls="new-tv-tab" aria-selected="false">Healthcare</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab" role="tab" aria-controls="new-computers-tab" aria-selected="false">Infracstructure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab" role="tab" aria-controls="new-phones-tab" aria-selected="false">Informatique</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab" role="tab" aria-controls="new-watches-tab" aria-selected="false">Securité</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-acc-link" data-toggle="tab" href="#new-acc-tab" role="tab" aria-controls="new-acc-tab" aria-selected="false">Sauvegarde</a>
                            </li>
                        </ul>
                   </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html" >
                                        <img  src="../assets/images/demos/demo-4/products/tout/7.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                         <a href="#">Healthcare</a> 
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Appareil d'hématologie</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Apareil d’hermatologie')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/18.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Securité</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Combinaison</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 6 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('combinaison')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/17.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Infracstructure</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Multimètre</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('multimetre')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/16.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Securité</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Camera de surveillance</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                  
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 10 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Camera de surveillance')">Acheter<i class="icon-long-arrow-right"></i></a>

                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/15.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Informatique</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Imprimante</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 5 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Imprimante')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-top">Top</span>
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/14.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Informatique</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html"></a>Banderole</h3><!-- End .product-title -->
                                    <div class="product-price">
                                        
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit(' Banderole')">Banderole<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/13.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>

                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">materiel industriel</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Pompe</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit(' Pompe')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/8.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Appareil biochimie</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Apareil biochimie')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .prod uct -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">New</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/4.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Cuisine</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Thermométre numérique à<br>  stylet portable WT-1B</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->

                                <a href="#" class="banner-link" onclick="acheterProduit('Thermométre numérique à stylet portable WT-1B')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/10.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Chaine elisa & <br> kit elisa</a></h3><!-- End .product-title -->
                                <div class="product-price">

                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 10 vus )</span>
                                </div><!-- End .rating-container -->

                                <a href="#" class="banner-link" onclick="acheterProduit('Chaine elisa & kit elisa')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/12.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Congélateur plafond à ultra basse température</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 5 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Congélateur plafond à ultra basse température')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/3.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Cuisine</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Détecteur de fuite de gaz</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Détecteur de fuite de gaz')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-tv-tab" role="tabpanel" aria-labelledby="new-tv-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/22.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>

                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Tensionmètre</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Tensionmètre')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/8.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Apareil biochimie</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Apareil biochimie')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">New</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/20.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Gel hydroalcoolique</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->

                                <a href="#" class="banner-link" onclick="acheterProduit('Gel hydroalcoolique')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/10.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Chaine elisa & <br>Kit elisa</a></h3><!-- End .product-title -->
                                <div class="product-price">

                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 10 vus )</span>
                                </div><!-- End .rating-container -->

                                <a href="#" class="banner-link" onclick="acheterProduit('Chaine elisa & Kit elisa')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/12.png" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Congélateur ptofond à ultra basse température</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 5 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Congélateur ptofond à ultra basse température')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/21.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Healthcare</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">gel hydroalcoolique</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('gel hydroalcoolique')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            }
                        }
                    }'>
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <img src="../assets/images/demos/demo-4/products/tout/2.png" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>

                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Healthcare</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Cache nez</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 vus )</span>
                            </div><!-- End .rating-container -->
                            <a href="#" class="banner-link" onclick="acheterProduit('Cache nez')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="../assets/images/demos/demo-4/products/tout/23.png" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Healthcare</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Réfractomètre analogique</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 vus )</span>
                            </div><!-- End .rating-container -->
                            <a href="#" class="banner-link" onclick="acheterProduit('Réfractomètre analogique')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="product.html">
                                <img src="../assets/images/demos/demo-4/products/tout/01.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Healthcare</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Thermoplastic</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 vus )</span>
                            </div><!-- End .rating-container -->

                            <a href="#" class="banner-link" onclick="acheterProduit('Thermoplastic')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <img src="../assets/images/demos/demo-4/products/tout/02.png" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Healthcare</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Test de grossesse</a></h3><!-- End .product-title -->
                            <div class="product-price">

                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 vus )</span>
                            </div><!-- End .rating-container -->

                            <a href="#" class="banner-link" onclick="acheterProduit('Test de grossesse')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <img src="../assets/images/demos/demo-4/products/tout/03.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Healthcare</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Thermométre</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 5 vus )</span>
                            </div><!-- End .rating-container -->
                            <a href="#" class="banner-link" onclick="acheterProduit('Thermométre')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <img src="../assets/images/demos/demo-4/products/tout/6.png" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Healthcare</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Pèse-palettes KERN UIB</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 vus )</span>
                            </div><!-- End .rating-container -->
                            <a href="#" class="banner-link" onclick="acheterProduit('Pèse-palettes KERN UIB')">Acheter<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-computers-tab" role="tabpanel" aria-labelledby="new-computers-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/13.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
    
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Infracstructure</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Pompe</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Pompe')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/00.jpg" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Infracstructure</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Equipement de conatruction</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Equipement de conatruction')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">New</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/n3.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Infracstructure</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Equipement de protection</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
    
                                <a href="#" class="banner-link" onclick="acheterProduit('quipement de protection')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/infra.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Infracstructure</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Instinteur</a></h3><!-- End .product-title -->
                                <div class="product-price">
    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 10 vus )</span>
                                </div><!-- End .rating-container -->
    
                                <a href="#" class="banner-link" onclick="acheterProduit('Instinteur')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                      
    
                       
                    </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-phones-tab" role="tabpanel" aria-labelledby="new-phones-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/ordi.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
    
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Informatique/a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Ordimateur portable</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Ordimateur portable')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/ordina.jpg" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Informatique</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">PC MAC</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('PC MAC')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">New</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/15.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Informatique</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Imprimante</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
    
                                <a href="#" class="banner-link" onclick="acheterProduit('Imprimante')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/laptop.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Informatique</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Ordinateur de bureaux</a></h3><!-- End .product-title -->
                                <div class="product-price">
    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 10 vus )</span>
                                </div><!-- End .rating-container -->
    
                                <a href="#" class="banner-link" onclick="acheterProduit('Ordinateur de bureaux')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/switch-hp-2520-24g-poe-j9299a-1-1024x322.jpg" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Informatique</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">switch</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 5 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('switch')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/reseaux.jpg" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Informatique</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Cable reseaux</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Cable reseaux')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-watches-tab" role="tabpanel" aria-labelledby="new-watches-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/ordi.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
    
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Securité</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">laptop</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('laptop')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/reseux.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">securité</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">dispositif de mesure</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('dispositif de protection')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">New</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/switch-hp-2520-24g-poe-j9299a-1-1024x322.jpg" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">securité</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">switch</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
    
                                <a href="#" class="banner-link" onclick="acheterProduit('switch')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/16.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">securité</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Camera de surveillance</a></h3><!-- End .product-title -->
                                <div class="product-price">
    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 10 vus )</span>
                                </div><!-- End .rating-container -->
    
                                <a href="#" class="banner-link" onclick="acheterProduit('Camera de surveillance')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                       
    
                      
                    </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-acc-tab" role="tabpanel" aria-labelledby="new-acc-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/reseux.png" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
    
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Sauvegarde</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Dispositif de mesure </a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Dispositif de mesure ')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="../assets/images/demos/demo-4/products/tout/reseaux.jpg" alt="Product image" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                </div><!-- End .product-action -->
    
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Sauvegarde</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Cables reseaux</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 vus )</span>
                                </div><!-- End .rating-container -->
                                <a href="#" class="banner-link" onclick="acheterProduit('Cables reseaux')">Acheter<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-body -->
                        </div><!-- End .product -->
    
                      

                        <!-- <div id="cart">
                            <h2>Panier</h2>
                            <ul id="cart-items"></ul>
                            <button onclick="clearCart()">Vider le panier</button>
                        </div> -->
                        
                    <!--     <script>

                        const cart = [];

document.querySelectorAll('.btn-cart').forEach(button => {
    button.addEventListener('click', event => {
        event.preventDefault();
        const product = event.target.closest('.product');
        const title = product.querySelector('.product-title a').textContent;
        addToCart(title);
    });
});

function addToCart(title) {
    cart.push(title);
    displayCart();
}

function displayCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';

    cart.forEach((item, index) => {
        const listItem = document.createElement('li');
        listItem.textContent = item;
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Supprimer';
        removeButton.onclick = () => {
            removeFromCart(index);
        };
        listItem.appendChild(removeButton);
        cartItems.appendChild(listItem);
    });
}

function removeFromCart(index) {
    cart.splice(index, 1);
    displayCart();
}

function clearCart() {
    cart.length = 0;
    displayCart();
}


 </script> -->
















    

                    </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="cta cta-border mb-5" style="background-image: url(../assets/images/demos/demo-4/bg-1.jpg);">
                    <img src="../assets/images/demos/demo-4/camera.png" alt="camera" class="cta-img">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="cta-content">
                                <div class="cta-text text-right text-white">
                                    <p>Besoin d'autre produits<br> qui n'apparaient pas dans le site<strong></strong></p>
                                </div><!-- End .cta-text -->
                                <a href="#" class="btn btn-primary btn-round"><span>Ecrivez-nous</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .cta-content -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .cta -->
            </div><!-- End .container -->

            <div class="container">
                <div class="heading text-center mb-3">
                    <h2 class="title">Healthcare</h2><!-- End .title -->
                    <p class="title-desc">Produits de qualités en Promotions</p><!-- End .title-desc -->
                </div><!-- End .heading -->

                <div class="row">
                    <div class="col-lg-6 deal-col">
                        <div class="deal" style="background-image: url('../assets/images/demos/demo-4/deal/blood-collection-1949542_960_720.jpg');">
                            <div class="deal-top">
                                <h2>Trousse de prelèvement</h2>
                                <h4>Quantité limite. </h4>
                                <!-- <h4>Promotion</h4> -->
                            </div><!-- End .deal-top -->

                            <div class="deal-content">
                                <!-- End .product-title -->

                               

                                <a href="product.html" class="btn btn-link" style="background-color: #2F83C2!important;color: white!important;border-radius: 10%;"><span >Acheter</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .deal-content -->

                
                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->

                    <div class="col-lg-6 deal-col">
                        <div class="deal" style="background-image: url('../assets/images/demos/demo-4/deal/blood-pressure-monitor-1952924_1280.jpg');">
                            <div class="deal-top">
                                <h2>Cardiograme.</h2>
                                <h4>Quantité limite.</h4>
                                <!-- <h4>Promotion</h4> -->
                            </div><!-- End .deal-top -->

                            <div class="deal-content">


                                <div class="product-price">

                                </div><!-- End .product-price -->

                                <a href="login.html" class="btn btn-link" style="background-color: #2F83C2!important;color: white!important;border-radius: 10%;"><span>Acheter</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .deal-content -->

                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="more-container text-center mt-1 mb-5">
                    <a href="tout.html" class="btn btn-outline-dark-2 btn-round btn-more"><span>En savoir plus</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->

            <div class="container">
                <hr class="mb-0">
                <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
                    <a href="#" class="brand">
                        <img src="../assets/images/brands/01.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="../assets/images/brands/02.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="../assets/images/brands/03.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="../assets/images/brands/04.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="../assets/images/brands/05.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="../assets/images/brands/06.png" alt="Brand Name">
                    </a>
                    <a href="#" class="brand">
                        <img src="../assets/images/brands/07.png" alt="Brand Name">
                    </a>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="bg-light pt-5 pb-6">
                <div class="container trending-products">
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">Healthcare</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                       <div class="heading-right">
                            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="trending-top-link" data-toggle="tab" href="#trending-top-tab" role="tab" aria-controls="trending-top-tab" aria-selected="true">securité</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-best-link" data-toggle="tab" href="#trending-best-tab" role="tab" aria-controls="trending-best-tab" aria-selected="false">laboratoire</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-sale-link" data-toggle="tab" href="#trending-sale-tab" role="tab" aria-controls="trending-sale-tab" aria-selected="false">santé</a>
                                </li>
                            </ul>
                       </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="row">
                        <div class="col-xl-5col d-none d-xl-block">
                            <div class="banner">
                                <a href="#">
                                    <img src="../assets/images/demos/demo-4/banners/operating-room-6215473_1280.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-xl-5col -->

                        <div class="col-xl-4-5col">
                            <div class="tab-content tab-content-carousel just-action-icons-sm">
                                <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel" aria-labelledby="trending-top-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                      

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/2.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                    
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Cache nez</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 vus )</span>
                                                </div><!-- End .rating-container -->
                                                
                                                <a href="#" class="banner-link" onclick="acheterProduit('Cache nez')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                <br>
                                                <br>
                                                <br>
                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/21.jpg" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Gel hydro alcoolique</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 6 vus )</span>
                                                </div><!-- End .rating-container -->
                                                <a href="#" class="banner-link" onclick="acheterProduit('Gel hydro alcoolique')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-new">New</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/01.jpg" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Thermoplastic</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 vus )</span>
                                                </div><!-- End .rating-container -->
                    
                                                <a href="#" class="banner-link" onclick="acheterProduit('Thermoplastic')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <span class="product-label label-circle label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/02.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Test de grossesse</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 vus )</span>
                                                </div><!-- End .rating-container -->
                    
                                                <a href="#" class="banner-link" onclick="acheterProduit('Test de grossesse')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/20.jpg" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Gel hydro alcoolique</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 5 vus )</span>
                                                </div><!-- End .rating-container -->
                                                <a href="#" class="banner-link" onclick="acheterProduit('Gel hydro alcoolique')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                       
                                   




                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel" aria-labelledby="trending-best-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/8.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                    
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Apariel biochimie</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 vus )</span>
                                                </div><!-- End .rating-container -->
                                                
                                                <a href="#" class="banner-link" onclick="acheterProduit('Apariel biochimie')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                <br>
                                                <br>
                                                <br>
                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/12.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Congélateur profond</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 6 vus )</span>
                                                </div><!-- End .rating-container -->
                                                <a href="#" class="banner-link" onclick="acheterProduit('Congélateur profond')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-new">New</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/7.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Appareil d’Hématologie </a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 vus )</span>
                                                </div><!-- End .rating-container -->
                    
                                                <a href="#" class="banner-link" onclick="acheterProduit('Apareil d’ hermatologie')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <span class="product-label label-circle label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/5.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Incubateur à convection Forcée</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 vus )</span>
                                                </div><!-- End .rating-container -->
                    
                                                <a href="#" class="banner-link" onclick="acheterProduit('Incubateur à convection Forcée')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/nn1.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Gel hydro alcoolique</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 5 vus )</span>
                                                </div><!-- End .rating-container -->
                                                <a href="#" class="banner-link" onclick="acheterProduit('Gel hydro alcoolique')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel" aria-labelledby="trending-sale-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": true, 
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                       



                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/03.jpg" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                    
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Thermométre</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 vus )</span>
                                                </div><!-- End .rating-container -->
                                                
                                                <a href="#" class="banner-link" onclick="acheterProduit('Thermométre')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                <br>
                                                <br>
                                                <br>
                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/22.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Tensionmètre</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 6 vus )</span>
                                                </div><!-- End .rating-container -->
                                                <a href="#" class="banner-link" onclick="acheterProduit('Tensionmètre')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-new">New</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/02.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Test de grossesse</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 vus )</span>
                                                </div><!-- End .rating-container -->
                    
                                                <a href="#" class="banner-link" onclick="acheterProduit('Test de grossesse')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                    
                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <span class="product-label label-circle label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="../assets/images/demos/demo-4/products/tout/Capture d’écran 2024-06-21 112035.png" alt="Product image" class="product-image">
                                                </a>
                    
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                                </div><!-- End .product-action -->
                    
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->
                    
                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Healthcare</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Balance scolaire</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                    
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 vus )</span>
                                                </div><!-- End .rating-container -->
                    
                                                <a href="#" class="banner-link" onclick="acheterProduit('Balance scolaire')">Acheter<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .product-body -->
                                        </div><!-- End .product -->




                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .col-xl-4-5col -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light pt-5 pb-6 -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="container for-you">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Produits disponible</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                   <div class="heading-right">
                        <a href="galerie.php" class="title-link">Voir la galerie <i class="icon-long-arrow-right"></i></a>
                   </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/n1.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter aux panier"><span>ajouter au panier</span></a>
                                      
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Healthcare</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Réfractomètre analogique</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                              
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 vus)</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Réfractomètre analogique')">Acheter<i class="icon-long-arrow-right"></i></a>

                                    <div class="product-nav product-nav-dots">

                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->

                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/n11.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                    
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Healthcare</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Étuve de laboratoire isotherme OFA</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                      
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Étuve de laboratoire isotherme OFA')">Acheter<i class="icon-long-arrow-right"></i></a>

                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/n3.png" alt="Product image" class="product-image">
                                        <img src="../assets/images/demos/demo-4/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Infracstructure</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Equipement de protection</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Equipement de protection')">Acheter<i class="icon-long-arrow-right"></i></a>

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>

                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/n4.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                   
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Healthcare</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Réfractomètre </a></h3><!-- End .product-title -->
                                    <div class="product-price">

                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Réfractomètre ')">Acheter<i class="icon-long-arrow-right"></i></a>

                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/n5.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="aouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                       
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Healthcare/a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Réfrigérateur de banque de sang</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                   
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 50%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Réfrigérateur de banque de sang')">Acheter<i class="icon-long-arrow-right"></i></a>

                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/n10.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Healthcare</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html"> POSTE DE MICROBIOLOGIE</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                      
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 24 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('POSTE DE MICROBIOLOGIE')">Acheter<i class="icon-long-arrow-right"></i></a>
                                    <div class="product-nav product-nav-dots">
                     
                                        <a href="#" style="background: #333333;"><span class="sr-only">couleur</span></a>
                           
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/ordi.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                          
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Informatique</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Ordinateur portable</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Ordinateur portable')">Acheter<i class="icon-long-arrow-right"></i></a>
                                    <div class="product-nav product-nav-dots">

                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="../assets/images/demos/demo-4/products/tout/n9.png" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="ajouter aux souhaits"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="ajouter au panier"><span>ajouter au panier</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Infracstructure</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Crochet peseur KERN HFD</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                     
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 vus )</span>
                                    </div><!-- End .rating-container -->
                                    <a href="#" class="banner-link" onclick="acheterProduit('Crochet peseur KERN HFD')">Acheter<i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-4 -->

            <div class="container">
                <hr class="mb-0">
            </div><!-- End .container -->

            <div class="icon-boxes-container bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Paiement & livraison</h3><!-- End .icon-box-title -->
                                    <p>livraison gratuite pour les commandes de plus de 50$</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Retour & remboursement</h3><!-- End .icon-box-title -->
                                    <p>garanti de remboursement a 100% gratuite</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Support de qualité</h3><!-- End .icon-box-title -->
                                    <p>commentaires en ligne 24h/24 et 7j/7</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Aide sur le net</h3><!-- End .icon-box-title -->
                                    <p>disponible H24</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->
        </main><!-- End .main -->

        <footer class="footer" style="background-color: #2F83C2!important;color: white!important;">

            <div class="cta bg-image bg-dark pt-4 pb-5 mb-0" style="background-image: url(../assets/images/demos/demo-4/bg-5.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <div class="cta-heading text-center">
                                <h3 class="cta-title text-white">Connectez vous sur notre Site</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white"></p><!-- End .cta-desc -->
                            </div><!-- End .text-center -->
                        
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Entrez votre Email" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" style="background-color: #2F83C2!important;border: #2F83C2;"><span>S'inscrire</span><i class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="../assets/images/Sans titre - 1.svg" class="footer-logo" alt="Footer Logo" width="105" height="25">
                                <p style="color: white;">fournir un ensemble diversifié
                                    et personnalisé de solutions
                                    à la grande satisfaction des
                                    besoins de ses clients. </p>

                                <div class="social-icons">
                                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">pages</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="../index.php">Acceuil</a></li>
                                    <li><a href="produits.php">Nos produits</a></li>
                                    <li><a href="about.php">A propos</a></li>
                                    <li><a href="produits.php">Nos services</a></li>
                                   
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Services client</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="cathalogue.php">catalogue</a></li>
                                    <li><a href="galerie.php">galerie</a></li>
                                    <li><a href="contact.php">Contactez-Nous</a></li>
                                    <li><a href="login.html">S'identifier</a></li>
                            
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Mon Compte</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Connexion</a></li>
                                    <li><a href="panier.php">Voir le panier</a></li>
                                    <li><a href="#">Ma liste de souhaits</a></li>
                                    <li><a href="#">Aider</a></li>
                            
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright" style="color: white;">GENERAL MARKET & HEALTHCARE ENTERPRISE SARL • Bp:  15 BP 168 Abidjan• Tel: +2250706841082 • info@gmh-sarl.com.</p><!-- End .footer-copyright -->
                    <figure class="footer-payments">
                        <!-- <img src="../assets/images/payments.png" alt="Payment methods" width="272" height="20"> -->
                    </figure><!-- End .footer-payments -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top" style="background-color: #009FDA;color: white;"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light"  style="background-color: #2F83C2!important;color: white!important;">
        <div class="mobile-menu-wrapper"  >
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                <!-- </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li> -->
            </ul>

            <div class="tab-content" >
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="../index.php" style="color: white!important;">Accueil</a>
                            </li>
                            <li>
                                <a href="produits.php" style="color: white!important;">Produits</a>
                                <ul>
                                    <li><a href="produits.php#new-phones-tab" class="nav-category" style="color: white!important;">Informatique</a></li>
                                    <!-- <li><a href="#new-all-link">Communication</a></li> -->
                                    <li><a href="produits.php#new-tv-tab" class="nav-category" style="color: white!important;">Healthcare</a></li>
                                    <li><a href="produits.php#new-acc-tab" class="nav-category" style="color: white!important;">Sauvegarde</a></li>
                                    <li><a href="produits.php#new-watches-tab" class="nav-category" style="color: white!important;">Securité</a></li>
                                    <li><a href="produits.phpp#new-computers-tab" class="nav-category" style="color: white!important;">Infracstructure</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="services.php" class="sf-with-ul" style="color: white!important;">Service</a>
                                <ul>
                                    <li><a href="services.php#section7" style="color: white!important;">Informatique</a></li>
                                    <li><a href="services.php#section8" style="color: white!important;">Communication</a></li>
                                    <li><a href="services.php#section9" style="color: white!important;"><span>Healthcare<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="services.php#section10" style="color: white!important;">Sauvegarde</a></li>
                                    <li><a href="services.php#section11" style="color: white!important;">Securité</a></li>
                                    <li><a href="services.php#section12" style="color: white!important;">Infracstructure</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.php" style="color: white!important;">a propos</a>

                            </li>
                            <li>
                                <a href="contact.php" style="color: white!important;">contact</a>

                            </li>
                            <li>
                                <a href="cathalogue.php" style="color: white!important;">catalogue</a>
    
                            </li>
                           
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">

                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons" >
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f" style="color: white!important;"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter" style="color: white!important;"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram" style="color: white!important;"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube" style="color: white!important;"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->

    <!-- Modal de connexion -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="signin-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Contenu de votre formulaire de connexion ici -->
                <div class="form-box">
                    <div class="form-tab">
                        <!-- Vos onglets de formulaire de connexion et d'inscription -->
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Se connecter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">S'inscrire</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <form action="../api/process_login.php" method="post">
                                    <div class="form-group">
                                        <label for="signin-email">Nom ou adresse mail *</label>
                                        <input type="text" class="form-control" id="signin-email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password">Mot de passe *</label>
                                        <input type="password" class="form-control" id="signin-password" name="password" required>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>CONNEXION</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember">
                                            <label class="custom-control-label" for="signin-remember">Se souvenir de moi</label>
                                        </div>
                                        <a href="#" class="forgot-link">Mot de passe oublié?</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form action="../api/process_register.php" method="post">
                                    <div class="form-group">
                                        <label for="register-name">Nom *</label>
                                        <input type="text" class="form-control" id="register-name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-email">Adresse mail *</label>
                                        <input type="email" class="form-control" id="register-email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-phone">Numéro de téléphone *</label>
                                        <input type="text" class="form-control" id="register-phone" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-password">Mot de passe *</label>
                                        <input type="password" class="form-control" id="register-password" name="password" required>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>INSCRIPTION</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                            <label class="custom-control-label" for="register-policy">J'accepte <a href="#">les conditions d'utilisateur</a> *</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin du contenu du formulaire -->
            </div>
        </div>
    </div>
   

    <!-- Plugins JS File -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.hoverIntent.min.js"></script>
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/superfish.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/bootstrap-input-spinner.js"></script>
    <script src="../assets/js/jquery.plugin.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <!-- Molla Carousel Init -->
    <script src="../assets/js/molla-init.js"></script>
    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/demos/demo-4.js"></script>
    <script src="../assets/js/produits.js"></script>
    
    <!-- Script pour la fonction acheter -->
    <script>
    function acheterProduit(productName) {
        var form = document.createElement("form");
        form.method = "POST";
        form.action = "process_purchase.php";
        
        var input = document.createElement("input");
        input.type = "hidden";
        input.name = "product_name";
        input.value = productName;
        form.appendChild(input);
        
        document.body.appendChild(form);
        form.submit();
    }
    </script>
</body>
</html>