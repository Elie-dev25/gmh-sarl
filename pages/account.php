<?php
// Logique de session et base de données
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Inclure la connexion à la base de données
include_once __DIR__ . '/../config/db_connection.php';

// Requête pour récupérer les informations de l'utilisateur connecté
$sql = "SELECT name, email, phone FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

// Requête pour récupérer l'historique des achats
$sql = "SELECT product_name, purchase_date FROM purchases WHERE user_id = ? ORDER BY purchase_date DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$purchases = [];
while ($row = $result->fetch_assoc()) {
    $purchases[] = $row;
}

$stmt->close();
$conn->close();

$page_title = 'Mon Espace';
$page_description = 'Gérez votre compte GM&H.';
include_once __DIR__ . '/../includes/header.php';
?>

<!-- CSS supplémentaires pour cette page -->
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/active.css">
<link rel="stylesheet" href="../assets/css/styles.css">

<style>
    .page-wrapper {
        padding-top: 70px;
    }
</style>

    <div class="page-wrapper">
    <div class="client-space-container">
    <header class="client-space-header">
    <h1>Mon Espace</h1>
    <a href="logout.php"><button class="client-space-logout-btn">Déconnexion</button></a>
    </header>

        </header>
        <section class="client-space-personal-info">
    <h2>Informations Personnelles</h2>
    <div class="client-space-info-box">
        <p><strong>Nom: </strong> <span id="name"> <?php echo $user['name']; ?></span></p>
        <p><strong>Email: </strong> <span id="email"> <?php echo $user['email']; ?></span></p>
        <p><strong>Téléphone: </strong> <span id="phone"> <?php echo $user['phone']; ?></span></p>
    </div>
    <button class="client-space-update-info-btn" id="modify-btn">Modifier mes informations</button>

    <!-- Formulaire de modification caché par défaut -->
    <form action="update_user_info.php" method="POST" id="update-form" style="display: none;">
        <label for="name">Nom: </label>
        <input type="text" name="name" id="name-input" value="<?php echo $user['name']; ?>" required>
        
        <label for="email">Email: </label>
        <input type="email" name="email" id="email-input" value="<?php echo $user['email']; ?>" required>
        
        <label for="phone">Téléphone: </label>
        <input type="tel" name="phone" id="phone-input" value="<?php echo $user['phone']; ?>">
        
        <input type="submit" value="Enregistrer les modifications">
    </form>
</section>

<section class="client-space-purchase-history">
    <h2>Historique des achats</h2>

    <div id="purchase-history">
        <?php
        if (empty($purchases)) {
            // Si l'utilisateur n'a pas encore d'achats
            echo "<p>Votre historique d'achat va s'afficher ici lorsque vous aurez effectuer des achats.</p>";
        } else {
            // Afficher les 5 premiers achats
            for ($i = 0; $i < min(5, count($purchases)); $i++) {
                $purchase = $purchases[$i];
                $date = date("d/m/Y", strtotime($purchase['purchase_date']));
                $time = date("H:i", strtotime($purchase['purchase_date']));
                echo "<div class='client-space-history-item'>Vous avez acheté le produit nommé \"{$purchase['product_name']}\" le $date à $time.</div>";
            }
        }
        ?>
    </div>

    <?php if (!empty($purchases) && count($purchases) > 5): ?>
        <button class="client-space-more-history-btn" id="load-more-btn">Voir plus</button>
    <?php endif; ?>
</section>



<section class="client-space-account-settings">
    <h2>Paramètres du compte</h2>
    <button class="client-space-change-password-btn" id="change-password-btn">Changer le mot de passe</button>

    <!-- Formulaire de changement de mot de passe (caché par défaut) -->
    <form action="change_password.php" method="POST" id="change-password-form" style="display: none;">
        <label for="current_password">Mot de passe actuel:</label>
        <input type="password" name="current_password" id="current_password" required>

        <label for="new_password">Nouveau mot de passe:</label>
        <input type="password" name="new_password" id="new_password" required>

        <label for="confirm_password">Confirmer le nouveau mot de passe:</label>
        <input type="password" name="confirm_password" id="confirm_password" required>

        <input type="submit" value="Enregistrer le nouveau mot de passe">
    </form>
</section>

    </div>
</body>



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
   
        <script>
    let purchases = <?php echo json_encode($purchases); ?>;
    let currentCount = 5;

    document.getElementById('load-more-btn').addEventListener('click', function() {
        let purchaseHistoryDiv = document.getElementById('purchase-history');

        for (let i = currentCount; i < Math.min(currentCount + 5, purchases.length); i++) {
            let purchase = purchases[i];
            let date = new Date(purchase.purchase_date);
            let formattedDate = date.toLocaleDateString('fr-FR');
            let formattedTime = date.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });

            let historyItem = document.createElement('div');
            historyItem.classList.add('client-space-history-item');
            historyItem.textContent = `Vous avez acheté le produit nommé "${purchase.product_name}" le ${formattedDate} à ${formattedTime}.`;

            purchaseHistoryDiv.appendChild(historyItem);
        }

        currentCount += 5;

        // Masquer le bouton si tous les éléments ont été affichés
        if (currentCount >= purchases.length) {
            this.style.display = 'none';
        }
    });
</script>

<script>
    // Récupérer les éléments du bouton et du formulaire
    const modifyBtn = document.getElementById('modify-btn');
    const updateForm = document.getElementById('update-form');

    // Ajouter un gestionnaire d'événements au bouton
    modifyBtn.addEventListener('click', function() {
        // Afficher le formulaire de modification
        updateForm.style.display = 'block';
        
        // Masquer le bouton "Modifier mes informations" une fois que le formulaire est affiché
        modifyBtn.style.display = 'none';
    });
</script>


<script>
    // Récupérer les éléments du bouton et du formulaire
    const changePasswordBtn = document.getElementById('change-password-btn');
    const changePasswordForm = document.getElementById('change-password-form');

    // Ajouter un gestionnaire d'événements au bouton
    changePasswordBtn.addEventListener('click', function() {
        // Afficher le formulaire de changement de mot de passe
        changePasswordForm.style.display = 'block';
        
        // Masquer le bouton "Changer le mot de passe" une fois que le formulaire est affiché
        changePasswordBtn.style.display = 'none';
    });
</script>


</body>
</html>

