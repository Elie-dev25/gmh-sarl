<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current_page = basename($_SERVER['PHP_SELF'], '.php');
$is_home = ($current_page === 'index');
$header_class = $is_home ? 'gmh-header transparent' : 'gmh-header solid';

// Déterminer le chemin de base selon l'emplacement du fichier
$script_path = dirname($_SERVER['PHP_SELF']);
$base_path = (strpos($script_path, '/pages') !== false) ? '../' : '';
$pages_path = (strpos($script_path, '/pages') !== false) ? '' : 'pages/';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo isset($page_title) ? $page_title . ' - GM&H' : 'GM&H - General Market and Healthcare'; ?></title>
    <meta name="keywords" content="GMH, General Market, Healthcare, Informatique, Sécurité, Cameroun, Côte d'Ivoire">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'GM&H - Votre partenaire de confiance pour les solutions informatiques, healthcare et services professionnels'; ?>">
    <meta name="author" content="GM&H SARL">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_path; ?>assets/images/icons/gmh.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_path; ?>assets/images/icons/gmh.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_path; ?>assets/images/icons/gmh.png">
    <link rel="shortcut icon" href="<?php echo $base_path; ?>assets/images/icons/gmh.png">
    <meta name="theme-color" content="#2F83C2">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/gmh-global.css">
    <?php if ($is_home): ?>
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/home-modern.css">
    <?php endif; ?>
    <?php if (isset($page_css)): ?>
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/<?php echo $page_css; ?>">
    <?php endif; ?>
</head>
<body>
    <!-- Overlay for mobile menu -->
    <div class="gmh-overlay" id="overlay"></div>
    
    <!-- Header -->
    <header class="<?php echo $header_class; ?>" id="header">
        <div class="gmh-header-inner">
            <!-- Logo -->
            <a href="<?php echo $base_path; ?>index.php" class="gmh-logo">
                <img src="<?php echo $base_path; ?>assets/images/demos/demo-21/gmh.png" alt="GM&H" width="120">
            </a>
            
            <!-- Navigation -->
            <nav class="gmh-nav">
                <ul class="gmh-nav-list">
                    <li class="gmh-nav-item">
                        <a href="<?php echo $base_path; ?>index.php" class="gmh-nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">
                            Accueil
                        </a>
                    </li>
                    <li class="gmh-nav-item">
                        <a href="<?php echo $pages_path; ?>produits.php" class="gmh-nav-link <?php echo $current_page === 'produits' ? 'active' : ''; ?>">
                            Produits
                            <i class="la la-angle-down"></i>
                        </a>
                        <div class="gmh-dropdown">
                            <a href="<?php echo $pages_path; ?>produits.php#informatique" class="gmh-dropdown-link">Informatique</a>
                            <a href="<?php echo $pages_path; ?>produits.php#healthcare" class="gmh-dropdown-link">Healthcare</a>
                            <a href="<?php echo $pages_path; ?>produits.php#sauvegarde" class="gmh-dropdown-link">Sauvegarde</a>
                            <a href="<?php echo $pages_path; ?>produits.php#securite" class="gmh-dropdown-link">Sécurité</a>
                            <a href="<?php echo $pages_path; ?>produits.php#infrastructure" class="gmh-dropdown-link">Infrastructure</a>
                        </div>
                    </li>
                    <li class="gmh-nav-item">
                        <a href="<?php echo $pages_path; ?>services.php" class="gmh-nav-link <?php echo $current_page === 'services' ? 'active' : ''; ?>">
                            Services
                            <i class="la la-angle-down"></i>
                        </a>
                        <div class="gmh-dropdown">
                            <a href="<?php echo $pages_path; ?>services.php#informatique" class="gmh-dropdown-link">Informatique</a>
                            <a href="<?php echo $pages_path; ?>services.php#communication" class="gmh-dropdown-link">Communication</a>
                            <a href="<?php echo $pages_path; ?>services.php#healthcare" class="gmh-dropdown-link">Healthcare</a>
                            <a href="<?php echo $pages_path; ?>services.php#sauvegarde" class="gmh-dropdown-link">Sauvegarde</a>
                            <a href="<?php echo $pages_path; ?>services.php#securite" class="gmh-dropdown-link">Sécurité</a>
                            <a href="<?php echo $pages_path; ?>services.php#infrastructure" class="gmh-dropdown-link">Infrastructure</a>
                        </div>
                    </li>
                    <li class="gmh-nav-item">
                        <a href="<?php echo $pages_path; ?>about.php" class="gmh-nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">
                            À Propos
                        </a>
                    </li>
                    <li class="gmh-nav-item">
                        <a href="<?php echo $pages_path; ?>cathalogue.php" class="gmh-nav-link <?php echo $current_page === 'cathalogue' ? 'active' : ''; ?>">
                            Catalogue
                        </a>
                    </li>
                    <li class="gmh-nav-item">
                        <a href="<?php echo $pages_path; ?>contact.php" class="gmh-nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- Header Actions -->
            <div class="gmh-header-actions">
                <a href="#" class="gmh-header-icon" id="search-toggle" title="Rechercher">
                    <i class="la la-search"></i>
                </a>
                <a href="<?php echo $pages_path; ?>panier.php" class="gmh-header-icon" title="Panier" style="position: relative;">
                    <i class="la la-shopping-cart"></i>
                    <span class="gmh-cart-count">0</span>
                </a>
                <a href="<?php echo $pages_path; ?><?php echo isset($_SESSION['email']) ? 'account.php' : 'login.php'; ?>" class="btn btn-sm btn-outline-white" style="text-decoration: none;">
                    <i class="la la-user"></i>
                    <?php echo isset($_SESSION['email']) ? 'Mon Compte' : 'Connexion'; ?>
                </a>
                
                <!-- Mobile Menu Toggle -->
                <button class="gmh-menu-toggle" id="menu-toggle" aria-label="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    
    <!-- Mobile Menu -->
    <div class="gmh-mobile-menu" id="mobile-menu">
        <div class="gmh-mobile-menu-header">
            <a href="<?php echo $base_path; ?>index.php" class="gmh-logo">
                <img src="<?php echo $base_path; ?>assets/images/demos/demo-21/gmh.png" alt="GM&H" width="100" style="filter: brightness(0) invert(1);">
            </a>
            <button class="gmh-mobile-menu-close" id="menu-close">
                <i class="la la-times"></i>
            </button>
        </div>
        <nav class="gmh-mobile-nav">
            <ul class="gmh-mobile-nav-list">
                <li class="gmh-mobile-nav-item">
                    <a href="<?php echo $base_path; ?>index.php" class="gmh-mobile-nav-link">Accueil</a>
                </li>
                <li class="gmh-mobile-nav-item">
                    <a href="#" class="gmh-mobile-nav-link" data-toggle="dropdown">
                        Produits
                        <i class="la la-angle-down"></i>
                    </a>
                    <div class="gmh-mobile-dropdown">
                        <a href="<?php echo $pages_path; ?>produits.php#informatique">Informatique</a>
                        <a href="<?php echo $pages_path; ?>produits.php#healthcare">Healthcare</a>
                        <a href="<?php echo $pages_path; ?>produits.php#sauvegarde">Sauvegarde</a>
                        <a href="<?php echo $pages_path; ?>produits.php#securite">Sécurité</a>
                        <a href="<?php echo $pages_path; ?>produits.php#infrastructure">Infrastructure</a>
                    </div>
                </li>
                <li class="gmh-mobile-nav-item">
                    <a href="#" class="gmh-mobile-nav-link" data-toggle="dropdown">
                        Services
                        <i class="la la-angle-down"></i>
                    </a>
                    <div class="gmh-mobile-dropdown">
                        <a href="<?php echo $pages_path; ?>services.php#informatique">Informatique</a>
                        <a href="<?php echo $pages_path; ?>services.php#communication">Communication</a>
                        <a href="<?php echo $pages_path; ?>services.php#healthcare">Healthcare</a>
                        <a href="<?php echo $pages_path; ?>services.php#sauvegarde">Sauvegarde</a>
                        <a href="<?php echo $pages_path; ?>services.php#securite">Sécurité</a>
                        <a href="<?php echo $pages_path; ?>services.php#infrastructure">Infrastructure</a>
                    </div>
                </li>
                <li class="gmh-mobile-nav-item">
                    <a href="<?php echo $pages_path; ?>about.php" class="gmh-mobile-nav-link">À Propos</a>
                </li>
                <li class="gmh-mobile-nav-item">
                    <a href="<?php echo $pages_path; ?>cathalogue.php" class="gmh-mobile-nav-link">Catalogue</a>
                </li>
                <li class="gmh-mobile-nav-item">
                    <a href="<?php echo $pages_path; ?>contact.php" class="gmh-mobile-nav-link">Contact</a>
                </li>
                <li class="gmh-mobile-nav-item">
                    <a href="<?php echo $pages_path; ?><?php echo isset($_SESSION['email']) ? 'account.php' : 'login.php'; ?>" class="gmh-mobile-nav-link">
                        <?php echo isset($_SESSION['email']) ? 'Mon Compte' : 'Connexion'; ?>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="gmh-social-links" style="justify-content: center; padding: var(--space-lg);">
            <a href="#" class="gmh-social-link"><i class="la la-facebook-f"></i></a>
            <a href="#" class="gmh-social-link"><i class="la la-twitter"></i></a>
            <a href="#" class="gmh-social-link"><i class="la la-instagram"></i></a>
            <a href="#" class="gmh-social-link"><i class="la la-linkedin-in"></i></a>
        </div>
    </div>
    
    <main class="main-content">
