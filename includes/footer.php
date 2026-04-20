    </main>
    
    <!-- Footer -->
    <footer class="gmh-footer">
        <div class="gmh-footer-main">
            <div class="container">
                <div class="gmh-footer-grid">
                    <!-- Brand Column -->
                    <div class="gmh-footer-brand">
                        <a href="<?php echo $base_path; ?>index.php">
                            <img src="<?php echo $base_path; ?>assets/images/demos/demo-21/gmh.png" alt="GM&H" width="120" style="filter: brightness(0) invert(1);">
                        </a>
                        <p>
                            GENERAL MARKET & HEALTHCARE est votre partenaire de confiance pour des solutions 
                            informatiques, healthcare et services professionnels de qualité.
                        </p>
                        <div class="gmh-social-links">
                            <a href="#" class="gmh-social-link" title="Facebook"><i class="la la-facebook-f"></i></a>
                            <a href="#" class="gmh-social-link" title="Twitter"><i class="la la-twitter"></i></a>
                            <a href="#" class="gmh-social-link" title="Instagram"><i class="la la-instagram"></i></a>
                            <a href="#" class="gmh-social-link" title="LinkedIn"><i class="la la-linkedin-in"></i></a>
                        </div>
                    </div>
                    
                    <!-- Navigation Links -->
                    <div class="gmh-footer-col">
                        <h4 class="gmh-footer-title">Navigation</h4>
                        <ul class="gmh-footer-links">
                            <li><a href="<?php echo $base_path; ?>index.php">Accueil</a></li>
                            <li><a href="<?php echo $pages_path; ?>produits.php">Nos Produits</a></li>
                            <li><a href="<?php echo $pages_path; ?>services.php">Nos Services</a></li>
                            <li><a href="<?php echo $pages_path; ?>about.php">À Propos</a></li>
                            <li><a href="<?php echo $pages_path; ?>cathalogue.php">Catalogue</a></li>
                        </ul>
                    </div>
                    
                    <!-- Services Links -->
                    <div class="gmh-footer-col">
                        <h4 class="gmh-footer-title">Services</h4>
                        <ul class="gmh-footer-links">
                            <li><a href="<?php echo $pages_path; ?>services.php#informatique">Informatique</a></li>
                            <li><a href="<?php echo $pages_path; ?>services.php#healthcare">Healthcare</a></li>
                            <li><a href="<?php echo $pages_path; ?>services.php#securite">Sécurité Réseau</a></li>
                            <li><a href="<?php echo $pages_path; ?>services.php#sauvegarde">Sauvegarde</a></li>
                            <li><a href="<?php echo $pages_path; ?>services.php#infrastructure">Infrastructure</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="gmh-footer-col">
                        <h4 class="gmh-footer-title">Contact</h4>
                        <ul class="gmh-footer-contact">
                            <li>
                                <i class="la la-map-marker"></i>
                                <span>15 BP 168 Abidjan<br>Côte d'Ivoire</span>
                            </li>
                            <li>
                                <i class="la la-phone"></i>
                                <a href="tel:+2250706841082">+225 07 06 84 10 82</a>
                            </li>
                            <li>
                                <i class="la la-envelope"></i>
                                <a href="mailto:info@gmh-sarl.com">info@gmh-sarl.com</a>
                            </li>
                            <li>
                                <i class="la la-clock"></i>
                                <span>Lun - Ven: 8h - 18h</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="gmh-footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> GENERAL MARKET & HEALTHCARE ENTERPRISE SARL. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    
    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scroll-top" title="Retour en haut">
        <i class="la la-arrow-up"></i>
    </button>
    
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo $base_path; ?>assets/js/bootstrap.bundle.min.js"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Header scroll effect
        const header = document.getElementById('header');
        const scrollThreshold = 100;
        
        function handleScroll() {
            if (window.scrollY > scrollThreshold) {
                header.classList.add('scrolled');
                header.classList.remove('transparent');
            } else {
                header.classList.remove('scrolled');
                if (header.classList.contains('solid') === false) {
                    header.classList.add('transparent');
                }
            }
        }
        
        window.addEventListener('scroll', handleScroll);
        handleScroll();
        
        // Mobile menu
        const menuToggle = document.getElementById('menu-toggle');
        const menuClose = document.getElementById('menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('overlay');
        
        function openMenu() {
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        function closeMenu() {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        if (menuToggle) menuToggle.addEventListener('click', openMenu);
        if (menuClose) menuClose.addEventListener('click', closeMenu);
        if (overlay) overlay.addEventListener('click', closeMenu);
        
        // Mobile dropdown toggle
        const mobileDropdowns = document.querySelectorAll('.gmh-mobile-nav-link[data-toggle="dropdown"]');
        mobileDropdowns.forEach(function(dropdown) {
            dropdown.addEventListener('click', function(e) {
                e.preventDefault();
                const parent = this.parentElement;
                const submenu = parent.querySelector('.gmh-mobile-dropdown');
                if (submenu) {
                    submenu.classList.toggle('active');
                    this.querySelector('i').classList.toggle('la-angle-up');
                    this.querySelector('i').classList.toggle('la-angle-down');
                }
            });
        });
        
        // Scroll to top
        const scrollTop = document.getElementById('scroll-top');
        
        function toggleScrollTop() {
            if (window.scrollY > 300) {
                scrollTop.classList.add('visible');
            } else {
                scrollTop.classList.remove('visible');
            }
        }
        
        window.addEventListener('scroll', toggleScrollTop);
        
        if (scrollTop) {
            scrollTop.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        const headerHeight = header.offsetHeight;
                        const targetPosition = target.offsetTop - headerHeight - 20;
                        window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                    }
                }
            });
        });
        
        // Animate elements on scroll
        const animateElements = document.querySelectorAll('[data-animate]');
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const animation = entry.target.dataset.animate;
                    const delay = entry.target.dataset.delay || 0;
                    setTimeout(function() {
                        entry.target.classList.add('animate-' + animation);
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        animateElements.forEach(function(el) {
            el.style.opacity = '0';
            observer.observe(el);
        });
    });
    </script>
    
    <?php if (isset($extra_js)): ?>
    <?php foreach ($extra_js as $js): ?>
    <script src="<?php echo $js; ?>"></script>
    <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
