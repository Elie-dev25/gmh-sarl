<?php
$page_title = 'Contact';
$page_description = 'Contactez GM&H pour vos besoins en solutions informatiques et healthcare. Notre équipe est à votre disposition.';
$page_css = 'pages.css';
include_once __DIR__ . '/../includes/header.php';
?>

<!-- Page Header -->
<div class="page-header">
    <div class="page-header-content">
        <h1 class="page-title">Contactez-nous</h1>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>index.php">Accueil</a></li>
            <li class="breadcrumb-separator">/</li>
            <li class="breadcrumb-item active">Contact</li>
        </ul>
    </div>
</div>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info" data-animate="slideInLeft">
                <h2 class="contact-info-title">Informations de contact</h2>
                <p class="contact-info-text">
                    N'hésitez pas à nous contacter pour toute question ou demande de devis. 
                    Notre équipe vous répondra dans les plus brefs délais.
                </p>
                
                <ul class="contact-info-list">
                    <li class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="la la-map-marker"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Adresse</h4>
                            <p>15 BP 168 Abidjan<br>Côte d'Ivoire</p>
                        </div>
                    </li>
                    <li class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="la la-phone"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Téléphone</h4>
                            <a href="tel:+2250706841082">+225 07 06 84 10 82</a>
                        </div>
                    </li>
                    <li class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="la la-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <a href="mailto:info@gmh-sarl.com">info@gmh-sarl.com</a>
                        </div>
                    </li>
                    <li class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="la la-clock"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Horaires</h4>
                            <p>Lun - Ven: 8h00 - 18h00<br>Sam: 9h00 - 13h00</p>
                        </div>
                    </li>
                </ul>
                
                <div class="contact-social">
                    <a href="#" title="Facebook"><i class="la la-facebook-f"></i></a>
                    <a href="#" title="Twitter"><i class="la la-twitter"></i></a>
                    <a href="#" title="Instagram"><i class="la la-instagram"></i></a>
                    <a href="#" title="LinkedIn"><i class="la la-linkedin-in"></i></a>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form-wrapper" data-animate="slideInRight">
                <h2 class="contact-form-title">Envoyez-nous un message</h2>
                
                <form class="contact-form" action="../api/send.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="name">Nom complet *</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="phone">Téléphone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+225 XX XX XX XX XX">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="subject">Sujet *</label>
                            <select class="form-control form-select" id="subject" name="subject" required>
                                <option value="">Sélectionnez un sujet</option>
                                <option value="devis">Demande de devis</option>
                                <option value="info">Demande d'information</option>
                                <option value="support">Support technique</option>
                                <option value="partenariat">Partenariat</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="message">Message *</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Décrivez votre demande..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="la la-paper-plane"></i>
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <iframe 
        title="Localisation de GM&H à Abidjan"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254517.28594407027!2d-4.1079839!3d5.3599517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan%2C%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sfr!4v1680000000000!5m2!1sfr!2sfr" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
