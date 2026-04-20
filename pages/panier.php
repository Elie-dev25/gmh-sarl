<?php
$page_title = 'Panier';
$page_description = 'Votre panier GM&H.';
include_once '../includes/header.php';
?>

<!-- CSS supplémentaires pour cette page -->
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/active.css">

<script src="main.js" defer></script>

<style>
    .page-wrapper {
        padding-top: 70px;
    }
    .product-item {
        display: flex;
        align-items: center;
        padding: 10px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    .product-item img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        margin-right: 10px;
        border-radius: 5px;
    }
    .product-item .product-info {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .product-item .product-info span {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .product-item button {
        background-color: #009FDA;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .product-item button:hover {
        background-color: #009FDA;
    }
    .banner-link {
        font-size: 14px;
        color: #000000;
        text-decoration: none;
        margin-bottom: 10px;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .banner-link:hover {
        color: #007bff;
        background-color: #00000000;
    }
</style>

    <div class="page-wrapper">
    <div id="cart">
        
        <h2 class="title text-center mb-4">Panier</h2>
        
        <ul id="cart-items"></ul>

        <div class="more-container text-center mt-1 mb-5">
        <button  class="btn btn-outline-dark-2 btn-round btn-more" onclick="clearCart()">Vider le panier</button>
        <br>
        </div>
    </div>
    






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
                                    <button class="btn btn-primary" type="submit"  style="background-color: #2F83C2!important;border: #2F83C2;"><span>S'inscrire</span><i class="icon-long-arrow-right"></i></button>
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
                                <li><a href="contact.html">Contactez-Nous</a></li>
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
                <p class="footer-copyright" style="color: white;">GENERAL MARKET & HEALTHCARE   ENTERPRISE SARL • Bp:  15 BP 168 Abidjan• Tel: +2250706841082 • info@gmh-sarl.com.</p><!-- End .footer-copyright -->
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

        <ul class="nav nav-pills-mobile nav-border-anim">
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
                                <li><a href="produits.php#new-computers-tab" class="nav-category" style="color: white!important;">Infracstructure</a></li>
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
                            <a href="contact.html" style="color: white!important;">contact</a>

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
                    <ul class="nav nav-pills nav-fill">
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

    </div><!-- End .modal -->


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
    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/demos/demo-4.js"></script>


</body>
</html>
