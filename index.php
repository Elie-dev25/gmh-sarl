<?php
$page_title = 'Accueil';
$page_description = 'GM&H - Votre partenaire de confiance pour les solutions informatiques, healthcare et services professionnels en Afrique.';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-modern">
    <div class="hero-content">
        <span class="hero-badge" data-animate="fadeInDown">
            <i class="la la-star"></i>
            Votre partenaire de confiance depuis 2015
        </span>
        
        <h1 class="hero-title" data-animate="fadeInUp" data-delay="100">
            Solutions <span>Informatiques</span> & Healthcare pour votre entreprise
        </h1>
        
        <p class="hero-subtitle" data-animate="fadeInUp" data-delay="200">
            GMH vous accompagne dans votre transformation digitale avec des solutions innovantes, 
            du matériel de qualité et un service client d'excellence.
        </p>
        
        <div class="hero-buttons" data-animate="fadeInUp" data-delay="300">
            <a href="pages/produits.php" class="btn btn-primary btn-lg">
                <i class="la la-shopping-bag"></i>
                Découvrir nos produits
            </a>
            <a href="pages/contact.php" class="btn btn-outline-white btn-lg">
                <i class="la la-phone"></i>
                Nous contacter
            </a>
        </div>
        
        <div class="hero-stats" data-animate="fadeInUp" data-delay="400">
            <div class="stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Clients satisfaits</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">1000+</span>
                <span class="stat-label">Produits</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">15+</span>
                <span class="stat-label">Pays desservis</span>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="features-grid">
        <a href="pages/services.php" class="feature-card" data-animate="fadeInUp">
            <div class="feature-icon">
                <i class="la la-cogs"></i>
            </div>
            <div class="feature-content">
                <h3>Nos Services</h3>
                <p>Solutions complètes pour votre infrastructure IT et vos besoins en santé</p>
            </div>
        </a>
        
        <a href="pages/produits.php#healthcare" class="feature-card" data-animate="fadeInUp" data-delay="100">
            <div class="feature-icon">
                <i class="la la-heartbeat"></i>
            </div>
            <div class="feature-content">
                <h3>Healthcare</h3>
                <p>Équipements médicaux et solutions de santé pour les professionnels</p>
            </div>
        </a>
        
        <a href="pages/produits.php#informatique" class="feature-card" data-animate="fadeInUp" data-delay="200">
            <div class="feature-icon">
                <i class="la la-laptop"></i>
            </div>
            <div class="feature-content">
                <h3>Informatique</h3>
                <p>Matériel informatique de pointe pour entreprises et particuliers</p>
            </div>
        </a>
    </div>
</section>

<!-- About Section -->
<section class="about-modern">
    <div class="about-container-modern">
        <div class="about-image-wrapper" data-animate="slideInLeft">
            <img src="images/propos.png" alt="À propos de GM&H">
            <div class="about-badge">
                <span class="about-badge-number">9+</span>
                <span class="about-badge-text">Années d'expérience</span>
            </div>
        </div>
        
        <div class="about-content-modern" data-animate="slideInRight">
            <span class="section-tag">À propos de nous</span>
            <h2 class="section-title-modern">
                Un partenaire fiable pour vos solutions technologiques
            </h2>
            <p class="about-text-modern">
                GENERAL MARKET & HEALTHCARE est un fournisseur de solutions et services établi 
                dont le siège est à Douala-Cameroun. Notre activité principale est la distribution 
                de produits divers grand public et professionnels. GMH propose des produits, 
                solutions et services à un certain nombre d'entreprises nationales et internationales.
            </p>
            
            <div class="about-features">
                <div class="about-feature-item">
                    <i class="la la-check"></i>
                    <span>Produits certifiés</span>
                </div>
                <div class="about-feature-item">
                    <i class="la la-check"></i>
                    <span>Support 24/7</span>
                </div>
                <div class="about-feature-item">
                    <i class="la la-check"></i>
                    <span>Livraison rapide</span>
                </div>
                <div class="about-feature-item">
                    <i class="la la-check"></i>
                    <span>Prix compétitifs</span>
                </div>
            </div>
            
            <a href="pages/about.php" class="btn btn-primary">
                En savoir plus
                <i class="la la-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-modern">
    <div class="section-header">
        <span class="section-tag">Ce que nous offrons</span>
        <h2 class="section-title-modern">Nos Services</h2>
        <p class="section-subtitle">Des solutions complètes pour répondre à tous vos besoins technologiques et de santé</p>
    </div>
    
    <div class="services-grid-modern">
        <a href="pages/services.php#healthcare" class="service-card-modern" data-animate="fadeInUp">
            <div class="service-image-modern">
                <img src="images/healcare.png" alt="Healthcare">
                <div class="service-overlay"></div>
            </div>
            <div class="service-body-modern">
                <h3>Healthcare</h3>
                <p>Équipements médicaux et solutions de santé pour les établissements de soins</p>
                <span class="service-link">
                    Découvrir <i class="la la-arrow-right"></i>
                </span>
            </div>
        </a>
        
        <a href="pages/services.php#informatique" class="service-card-modern" data-animate="fadeInUp" data-delay="100">
            <div class="service-image-modern">
                <img src="images/informatique.png" alt="Informatique">
                <div class="service-overlay"></div>
            </div>
            <div class="service-body-modern">
                <h3>Matériels Informatiques</h3>
                <p>Ordinateurs, serveurs et équipements IT de dernière génération</p>
                <span class="service-link">
                    Découvrir <i class="la la-arrow-right"></i>
                </span>
            </div>
        </a>
        
        <a href="pages/services.php#securite" class="service-card-modern" data-animate="fadeInUp" data-delay="200">
            <div class="service-image-modern">
                <img src="images/Securite.png" alt="Sécurité">
                <div class="service-overlay"></div>
            </div>
            <div class="service-body-modern">
                <h3>Sécurité Réseau</h3>
                <p>Protection avancée pour sécuriser vos données et infrastructures</p>
                <span class="service-link">
                    Découvrir <i class="la la-arrow-right"></i>
                </span>
            </div>
        </a>
        
        <a href="pages/services.php#communication" class="service-card-modern" data-animate="fadeInUp" data-delay="300">
            <div class="service-image-modern">
                <img src="images/telephonie.png" alt="Téléphonie">
                <div class="service-overlay"></div>
            </div>
            <div class="service-body-modern">
                <h3>Téléphonie IP</h3>
                <p>Solutions de communication modernes pour votre entreprise</p>
                <span class="service-link">
                    Découvrir <i class="la la-arrow-right"></i>
                </span>
            </div>
        </a>
        
        <a href="pages/services.php#sauvegarde" class="service-card-modern" data-animate="fadeInUp" data-delay="400">
            <div class="service-image-modern">
                <img src="images/sauvegarde.png" alt="Sauvegarde">
                <div class="service-overlay"></div>
            </div>
            <div class="service-body-modern">
                <h3>Sauvegarde des Données</h3>
                <p>Solutions de backup sécurisées pour protéger vos informations</p>
                <span class="service-link">
                    Découvrir <i class="la la-arrow-right"></i>
                </span>
            </div>
        </a>
        
        <a href="pages/services.php#infrastructure" class="service-card-modern" data-animate="fadeInUp" data-delay="500">
            <div class="service-image-modern">
                <img src="images/reseau.png" alt="Réseaux">
                <div class="service-overlay"></div>
            </div>
            <div class="service-body-modern">
                <h3>Infrastructure Réseau</h3>
                <p>Conception et déploiement d'infrastructures réseau performantes</p>
                <span class="service-link">
                    Découvrir <i class="la la-arrow-right"></i>
                </span>
            </div>
        </a>
    </div>
    
    <div class="services-cta">
        <a href="pages/services.php" class="btn btn-primary btn-lg">
            Voir tous nos services
            <i class="la la-arrow-right"></i>
        </a>
    </div>
</section>

<!-- CTA / Newsletter Section -->
<section class="cta-modern">
    <div class="cta-content">
        <h2>Restez informé de nos offres</h2>
        <p>Inscrivez-vous à notre newsletter pour recevoir nos dernières actualités et promotions</p>
        <form class="newsletter-form" action="#" method="post">
            <input type="email" placeholder="Votre adresse email" required>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
