<?php
$page_title = 'À Propos';
$page_description = 'Découvrez GM&H, votre partenaire de confiance pour les solutions informatiques et healthcare en Afrique depuis 2015.';
$page_css = 'pages.css';
include __DIR__ . '/../includes/header.php';
?>

<!-- Page Header avec Bannière -->
<div class="page-header with-banner" style="background-image: linear-gradient(rgba(26, 26, 46, 0.8), rgba(47, 131, 194, 0.8)), url('<?php echo $base_path; ?>assets/images/banners/banner-1.jpg');">
    <div class="page-header-content">
        <h1 class="page-title">À Propos de Nous</h1>
        <p class="page-subtitle">Votre partenaire de confiance depuis 2015</p>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>index.php">Accueil</a></li>
            <li class="breadcrumb-separator">/</li>
            <li class="breadcrumb-item active">À Propos</li>
        </ul>
    </div>
</div>

<!-- About Hero Section -->
<section class="about-hero">
    <div class="container">
        <div class="about-hero-grid">
            <div class="about-hero-content" data-animate="slideInLeft">
                <span class="section-tag">Qui sommes-nous</span>
                <h1>GENERAL MARKET & HEALTHCARE</h1>
                <p>
                    GENERAL MARKET & HEALTHCARE est un fournisseur de solutions et services établi et en pleine 
                    croissance dont le siège est à Douala-Cameroun. Notre activité principale est la distribution 
                    de produits divers grand public.
                </p>
                <p>
                    GMH propose des produits, solutions et services grand public à un certain nombre d'entreprises 
                    nationales et internationales. Le groupe a actuellement une clientèle diversifiée et des 
                    partenaires répartis dans plusieurs pays.
                </p>
                <p>
                    GMH se distingue également en modifiant en permanence son modèle économique pour inclure les 
                    activités de marque en exploitant le marché de la marque. Les activités de marque du groupe 
                    comprennent la distribution de produits médicaux pour petites et moyennes entreprises (PME), 
                    la fourniture du matériel, l'amélioration de la commodité et des habitudes de vie et 
                    l'élargissement de notre champ d'activité.
                </p>
                <a href="contact.php" class="btn btn-primary btn-lg">
                    <i class="la la-phone"></i>
                    Contactez-nous
                </a>
            </div>
            <div class="about-hero-image" data-animate="slideInRight">
                <img src="../images/propos.png" alt="À propos de GM&H">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card" data-animate="fadeInUp">
                <div class="stat-card-number">9+</div>
                <div class="stat-card-label">Années d'expérience</div>
            </div>
            <div class="stat-card" data-animate="fadeInUp" data-delay="100">
                <div class="stat-card-number">500+</div>
                <div class="stat-card-label">Clients satisfaits</div>
            </div>
            <div class="stat-card" data-animate="fadeInUp" data-delay="200">
                <div class="stat-card-number">1000+</div>
                <div class="stat-card-label">Produits livrés</div>
            </div>
            <div class="stat-card" data-animate="fadeInUp" data-delay="300">
                <div class="stat-card-number">15+</div>
                <div class="stat-card-label">Pays desservis</div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="values-section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Notre engagement</span>
            <h2 class="section-title">Mission & Vision</h2>
            <p class="section-subtitle">
                Nous nous engageons à fournir des solutions de qualité qui répondent aux besoins de nos clients
            </p>
        </div>
        
        <div class="values-grid">
            <div class="value-card" data-animate="fadeInUp">
                <div class="value-icon">
                    <i class="la la-bullseye"></i>
                </div>
                <h3 class="value-title">Notre Mission</h3>
                <p class="value-text">
                    Fournir un ensemble diversifié et personnalisé de solutions à la grande satisfaction 
                    des besoins de ses clients, tout en maintenant les plus hauts standards de qualité 
                    et de service.
                </p>
            </div>
            
            <div class="value-card" data-animate="fadeInUp" data-delay="100">
                <div class="value-icon">
                    <i class="la la-eye"></i>
                </div>
                <h3 class="value-title">Notre Vision</h3>
                <p class="value-text">
                    Devenir le leader régional dans la fourniture de solutions informatiques et healthcare, 
                    reconnu pour notre excellence, notre innovation et notre engagement envers nos clients.
                </p>
            </div>
            
            <div class="value-card" data-animate="fadeInUp" data-delay="200">
                <div class="value-icon">
                    <i class="la la-heart"></i>
                </div>
                <h3 class="value-title">Nos Valeurs</h3>
                <p class="value-text">
                    Intégrité, excellence, innovation et satisfaction client sont au cœur de tout ce que 
                    nous faisons. Nous croyons en des relations durables basées sur la confiance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section" style="background: var(--gray-100);">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Pourquoi nous choisir</span>
            <h2 class="section-title">Nos Avantages</h2>
            <p class="section-subtitle">
                Ce qui nous distingue de la concurrence
            </p>
        </div>
        
        <div class="services-overview-grid">
            <div class="service-overview-card" data-animate="fadeInUp">
                <div class="service-overview-icon">
                    <i class="la la-certificate"></i>
                </div>
                <h3 class="service-overview-title">Produits Certifiés</h3>
                <p class="service-overview-text">
                    Tous nos produits sont certifiés et proviennent de fournisseurs reconnus mondialement 
                    pour leur qualité et leur fiabilité.
                </p>
            </div>
            
            <div class="service-overview-card" data-animate="fadeInUp" data-delay="100">
                <div class="service-overview-icon">
                    <i class="la la-headset"></i>
                </div>
                <h3 class="service-overview-title">Support 24/7</h3>
                <p class="service-overview-text">
                    Notre équipe de support technique est disponible 24h/24 et 7j/7 pour répondre à 
                    toutes vos questions et résoudre vos problèmes.
                </p>
            </div>
            
            <div class="service-overview-card" data-animate="fadeInUp" data-delay="200">
                <div class="service-overview-icon">
                    <i class="la la-shipping-fast"></i>
                </div>
                <h3 class="service-overview-title">Livraison Rapide</h3>
                <p class="service-overview-text">
                    Nous garantissons une livraison rapide et sécurisée de vos commandes partout 
                    en Afrique de l'Ouest et Centrale.
                </p>
            </div>
            
            <div class="service-overview-card" data-animate="fadeInUp" data-delay="300">
                <div class="service-overview-icon">
                    <i class="la la-tags"></i>
                </div>
                <h3 class="service-overview-title">Prix Compétitifs</h3>
                <p class="service-overview-text">
                    Nous offrons les meilleurs prix du marché sans compromettre la qualité de nos 
                    produits et services.
                </p>
            </div>
            
            <div class="service-overview-card" data-animate="fadeInUp" data-delay="400">
                <div class="service-overview-icon">
                    <i class="la la-users"></i>
                </div>
                <h3 class="service-overview-title">Équipe Expérimentée</h3>
                <p class="service-overview-text">
                    Notre équipe est composée de professionnels expérimentés et passionnés, 
                    dédiés à votre satisfaction.
                </p>
            </div>
            
            <div class="service-overview-card" data-animate="fadeInUp" data-delay="500">
                <div class="service-overview-icon">
                    <i class="la la-handshake"></i>
                </div>
                <h3 class="service-overview-title">Partenariats Solides</h3>
                <p class="service-overview-text">
                    Nous avons établi des partenariats solides avec les plus grandes marques 
                    mondiales pour vous offrir le meilleur.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-modern">
    <div class="cta-content">
        <h2>Prêt à travailler avec nous ?</h2>
        <p>Contactez-nous dès aujourd'hui pour discuter de vos besoins et découvrir comment nous pouvons vous aider.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="contact.php" class="btn btn-primary btn-lg">
                <i class="la la-envelope"></i>
                Nous contacter
            </a>
            <a href="produits.php" class="btn btn-outline-white btn-lg">
                <i class="la la-shopping-bag"></i>
                Voir nos produits
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
