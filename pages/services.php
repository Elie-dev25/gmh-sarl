<?php
$page_title = 'Nos Services';
$page_description = 'Découvrez les services proposés par GM&H : informatique, healthcare, sécurité réseau, téléphonie IP et plus encore.';
$page_css = 'pages.css';
include_once __DIR__ . '/../includes/header.php';
?>

<!-- Page Header avec Bannière -->
<div class="page-header with-banner" style="background-image: linear-gradient(rgba(26, 26, 46, 0.8), rgba(47, 131, 194, 0.8)), url('<?php echo $base_path; ?>assets/images/banners/banner-fullwidth.jpg');">
    <div class="page-header-content">
        <h1 class="page-title">Nos Services</h1>
        <p class="page-subtitle">Des solutions complètes pour votre entreprise</p>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>index.php">Accueil</a></li>
            <li class="breadcrumb-separator">/</li>
            <li class="breadcrumb-item active">Services</li>
        </ul>
    </div>
</div>

<!-- Services Overview -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Ce que nous offrons</span>
            <h2 class="section-title">Des solutions complètes pour votre entreprise</h2>
            <p class="section-subtitle">
                GM&H propose une gamme complète de services pour répondre à tous vos besoins 
                en informatique, healthcare et infrastructure.
            </p>
        </div>
        
        <div class="services-overview-grid">
            <a href="#informatique" class="service-overview-card" data-animate="fadeInUp">
                <div class="service-overview-icon">
                    <i class="la la-laptop"></i>
                </div>
                <h3 class="service-overview-title">Matériels Informatiques</h3>
                <p class="service-overview-text">
                    Fourniture d'équipements informatiques de pointe pour entreprises et particuliers.
                </p>
                <span class="service-overview-link">
                    En savoir plus <i class="la la-arrow-right"></i>
                </span>
            </a>
            
            <a href="#communication" class="service-overview-card" data-animate="fadeInUp" data-delay="100">
                <div class="service-overview-icon">
                    <i class="la la-phone-volume"></i>
                </div>
                <h3 class="service-overview-title">Téléphonie IP</h3>
                <p class="service-overview-text">
                    Solutions de communication modernes et efficaces pour votre entreprise.
                </p>
                <span class="service-overview-link">
                    En savoir plus <i class="la la-arrow-right"></i>
                </span>
            </a>
            
            <a href="#healthcare" class="service-overview-card" data-animate="fadeInUp" data-delay="200">
                <div class="service-overview-icon">
                    <i class="la la-heartbeat"></i>
                </div>
                <h3 class="service-overview-title">Healthcare</h3>
                <p class="service-overview-text">
                    Équipements médicaux et solutions de santé pour les professionnels.
                </p>
                <span class="service-overview-link">
                    En savoir plus <i class="la la-arrow-right"></i>
                </span>
            </a>
            
            <a href="#sauvegarde" class="service-overview-card" data-animate="fadeInUp" data-delay="300">
                <div class="service-overview-icon">
                    <i class="la la-database"></i>
                </div>
                <h3 class="service-overview-title">Sauvegarde des Données</h3>
                <p class="service-overview-text">
                    Solutions de backup sécurisées pour protéger vos informations critiques.
                </p>
                <span class="service-overview-link">
                    En savoir plus <i class="la la-arrow-right"></i>
                </span>
            </a>
            
            <a href="#securite" class="service-overview-card" data-animate="fadeInUp" data-delay="400">
                <div class="service-overview-icon">
                    <i class="la la-shield-alt"></i>
                </div>
                <h3 class="service-overview-title">Sécurité Réseau</h3>
                <p class="service-overview-text">
                    Protection avancée pour sécuriser vos données et infrastructures.
                </p>
                <span class="service-overview-link">
                    En savoir plus <i class="la la-arrow-right"></i>
                </span>
            </a>
            
            <a href="#infrastructure" class="service-overview-card" data-animate="fadeInUp" data-delay="500">
                <div class="service-overview-icon">
                    <i class="la la-network-wired"></i>
                </div>
                <h3 class="service-overview-title">Infrastructure Réseau</h3>
                <p class="service-overview-text">
                    Conception et déploiement d'infrastructures réseau performantes.
                </p>
                <span class="service-overview-link">
                    En savoir plus <i class="la la-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Service Detail: Informatique -->
<section id="informatique" class="services-page-section">
    <div class="container">
        <div class="service-detail">
            <div class="service-detail-image" data-animate="slideInLeft">
                <img src="../images/informatique.png" alt="Matériels Informatiques">
            </div>
            <div class="service-detail-content" data-animate="slideInRight">
                <div class="service-detail-icon">
                    <i class="la la-laptop"></i>
                </div>
                <h2 class="service-detail-title">Matériels Informatiques</h2>
                <p class="service-detail-text">
                    Nous fournissons une gamme complète d'équipements informatiques de dernière génération 
                    pour répondre aux besoins de votre entreprise. De l'ordinateur de bureau au serveur 
                    haute performance, nous avons la solution qu'il vous faut.
                </p>
                <ul class="service-features-list">
                    <li><i class="la la-check-circle"></i> Ordinateurs de bureau et portables</li>
                    <li><i class="la la-check-circle"></i> Serveurs et stations de travail</li>
                    <li><i class="la la-check-circle"></i> Périphériques et accessoires</li>
                    <li><i class="la la-check-circle"></i> Logiciels et licences</li>
                    <li><i class="la la-check-circle"></i> Maintenance et support technique</li>
                </ul>
                <a href="produits.php#informatique" class="btn btn-primary">
                    Voir les produits <i class="la la-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service Detail: Communication -->
<section id="communication" class="services-page-section">
    <div class="container">
        <div class="service-detail reverse">
            <div class="service-detail-image" data-animate="slideInRight">
                <img src="../images/telephonie.png" alt="Téléphonie IP">
            </div>
            <div class="service-detail-content" data-animate="slideInLeft">
                <div class="service-detail-icon">
                    <i class="la la-phone-volume"></i>
                </div>
                <h2 class="service-detail-title">Téléphonie IP & Communication</h2>
                <p class="service-detail-text">
                    Modernisez vos communications avec nos solutions de téléphonie IP. Réduisez vos coûts 
                    tout en améliorant la qualité et la flexibilité de vos communications d'entreprise.
                </p>
                <ul class="service-features-list">
                    <li><i class="la la-check-circle"></i> Installation de systèmes PABX/IPBX</li>
                    <li><i class="la la-check-circle"></i> Solutions de visioconférence</li>
                    <li><i class="la la-check-circle"></i> Radio communication professionnelle</li>
                    <li><i class="la la-check-circle"></i> Intégration avec systèmes existants</li>
                    <li><i class="la la-check-circle"></i> Support et maintenance</li>
                </ul>
                <a href="contact.php" class="btn btn-primary">
                    Demander un devis <i class="la la-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service Detail: Healthcare -->
<section id="healthcare" class="services-page-section">
    <div class="container">
        <div class="service-detail">
            <div class="service-detail-image" data-animate="slideInLeft">
                <img src="../images/healcare.png" alt="Healthcare">
            </div>
            <div class="service-detail-content" data-animate="slideInRight">
                <div class="service-detail-icon">
                    <i class="la la-heartbeat"></i>
                </div>
                <h2 class="service-detail-title">Healthcare Solutions</h2>
                <p class="service-detail-text">
                    GM&H est votre partenaire de confiance pour les équipements médicaux et les solutions 
                    de santé. Nous fournissons du matériel médical de qualité pour les hôpitaux, cliniques 
                    et cabinets médicaux.
                </p>
                <ul class="service-features-list">
                    <li><i class="la la-check-circle"></i> Équipements de diagnostic</li>
                    <li><i class="la la-check-circle"></i> Matériel de laboratoire</li>
                    <li><i class="la la-check-circle"></i> Mobilier médical</li>
                    <li><i class="la la-check-circle"></i> Consommables médicaux</li>
                    <li><i class="la la-check-circle"></i> Formation et accompagnement</li>
                </ul>
                <a href="produits.php#healthcare" class="btn btn-primary">
                    Voir les produits <i class="la la-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service Detail: Sauvegarde -->
<section id="sauvegarde" class="services-page-section">
    <div class="container">
        <div class="service-detail reverse">
            <div class="service-detail-image" data-animate="slideInRight">
                <img src="../images/sauvegarde.png" alt="Sauvegarde des Données">
            </div>
            <div class="service-detail-content" data-animate="slideInLeft">
                <div class="service-detail-icon">
                    <i class="la la-database"></i>
                </div>
                <h2 class="service-detail-title">Sauvegarde des Données</h2>
                <p class="service-detail-text">
                    Protégez vos données critiques avec nos solutions de sauvegarde professionnelles. 
                    Nous proposons des solutions adaptées à toutes les tailles d'entreprise pour 
                    garantir la continuité de vos activités.
                </p>
                <ul class="service-features-list">
                    <li><i class="la la-check-circle"></i> Sauvegarde locale et cloud</li>
                    <li><i class="la la-check-circle"></i> Solutions NAS et SAN</li>
                    <li><i class="la la-check-circle"></i> Plan de reprise d'activité (PRA)</li>
                    <li><i class="la la-check-circle"></i> Virtualisation des données</li>
                    <li><i class="la la-check-circle"></i> Monitoring et alertes</li>
                </ul>
                <a href="contact.php" class="btn btn-primary">
                    Demander un devis <i class="la la-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service Detail: Sécurité -->
<section id="securite" class="services-page-section">
    <div class="container">
        <div class="service-detail">
            <div class="service-detail-image" data-animate="slideInLeft">
                <img src="../images/Securite.png" alt="Sécurité Réseau">
            </div>
            <div class="service-detail-content" data-animate="slideInRight">
                <div class="service-detail-icon">
                    <i class="la la-shield-alt"></i>
                </div>
                <h2 class="service-detail-title">Sécurité Réseau</h2>
                <p class="service-detail-text">
                    Protégez votre entreprise contre les cybermenaces avec nos solutions de sécurité 
                    réseau avancées. Nous assurons la protection de vos données et de votre infrastructure.
                </p>
                <ul class="service-features-list">
                    <li><i class="la la-check-circle"></i> Pare-feu et UTM</li>
                    <li><i class="la la-check-circle"></i> Antivirus et anti-malware</li>
                    <li><i class="la la-check-circle"></i> Vidéosurveillance IP</li>
                    <li><i class="la la-check-circle"></i> Contrôle d'accès</li>
                    <li><i class="la la-check-circle"></i> Audit de sécurité</li>
                </ul>
                <a href="contact.php" class="btn btn-primary">
                    Demander un audit <i class="la la-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service Detail: Infrastructure -->
<section id="infrastructure" class="services-page-section">
    <div class="container">
        <div class="service-detail reverse">
            <div class="service-detail-image" data-animate="slideInRight">
                <img src="../images/reseau.png" alt="Infrastructure Réseau">
            </div>
            <div class="service-detail-content" data-animate="slideInLeft">
                <div class="service-detail-icon">
                    <i class="la la-network-wired"></i>
                </div>
                <h2 class="service-detail-title">Infrastructure Réseau</h2>
                <p class="service-detail-text">
                    Nous concevons et déployons des infrastructures réseau performantes et évolutives. 
                    Du câblage structuré à la fibre optique, nous avons l'expertise pour vos projets.
                </p>
                <ul class="service-features-list">
                    <li><i class="la la-check-circle"></i> Câblage réseau structuré</li>
                    <li><i class="la la-check-circle"></i> Liaisons fibre optique</li>
                    <li><i class="la la-check-circle"></i> Réseaux WiFi professionnels</li>
                    <li><i class="la la-check-circle"></i> Data centers</li>
                    <li><i class="la la-check-circle"></i> Maintenance préventive</li>
                </ul>
                <a href="contact.php" class="btn btn-primary">
                    Demander un devis <i class="la la-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-modern">
    <div class="cta-content">
        <h2>Besoin d'un service personnalisé ?</h2>
        <p>Notre équipe d'experts est à votre disposition pour étudier vos besoins et vous proposer une solution sur mesure.</p>
        <a href="contact.php" class="btn btn-primary btn-lg">
            <i class="la la-phone"></i>
            Contactez-nous
        </a>
    </div>
</section>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
