<?php
$page_title = 'Catalogue';
$page_description = 'Découvrez notre catalogue complet de produits GM&H.';
include '../includes/header.php';
?>

<!-- CSS supplémentaires pour cette page -->
<link rel="stylesheet" href="../assets/css/plugins/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/active.css">
<link rel="stylesheet" href="../assets/css/ajout.css">

<style>
    .page-wrapper {
        padding-top: 70px;
    }
</style>

    <div class="page-wrapper">
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('../assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title" >Notre catalogue<span style="color: #009FDA!important;">GMH</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">GMH</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Notre catalogue</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">

                	<div class="entry-container max-col-2" data-layout="fitRows">
                        <div class="entry-item lifestyle shopping col-sm-6">
                            <article class="entry entry-grid text-center">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="../image/cat1.png" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                          <a>Enrégistreur de données sans fil</a>
                                        </span>
                                        <span class="meta-separator">|</span>
                                        <a href="#">intelligent</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">double canal de temperature</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">RCW -600Wifi</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-content">
                                       <ul style=" list-style-type: disc;  text-align: left;">
                                        <li>Alimentation: 5V/1A (DC)</li>
                                        <li>Plage de mesure de la temperature: -40°C à +80°C</li>
                                        <li>Précision de la temperature: ±0.5°C ( -20°C à +40°C) ±1°C (Pour le reste)</li>
                                        <li>Type de Capteur: NTC</li>
                                        <li>Longueur de cable du capteur: 5M</li>
                                        <li>Intervalle de téléchargement des données: 1min à 24H</li>
                                        <li>Capacité d’enrégistrement en cas de rupture du reseau Wifi: 20,000 Points de mesure</li>
                                        <li>Alarme: Visuelle (Indicateur LED, sonore et rappel online (à travers le Cloud))</li>
                                        <li>Port de communication: WIFI</li>
                                        <li>Batterie Stand-By: 3.7V 1100mAH lithium</li>
                                       </ul>
                                       <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .entry-item -->

                        <div class="entry-item lifestyle col-sm-6">
                            <article class="entry entry-grid text-center">
                                <figure class="entry-media ">
                                    <a href="single.html">
                                        <img src="../image/cat2.png" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                            <a href="#">Enrégistreur de données sans fil</a>
                                        </span>
                                        <span class="meta-separator">|</span>
                                        <a href="#">intelligent</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">température et humidité</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">RCW -800Wifi</a>
                                    </h2><!-- End .entry-title -->

                                   
                                    <div class="entry-content">
                                        <ul style=" list-style-type: disc;  text-align: left;">
                                        <li>Alimentation: 5V/1A (DC)</li>
                                        <li>Plage de mesure de la temperature: -40°C à +80°C</li>
                                        <li>Plage de mesure d’humidité: 10% à 95%</li>
                                        <li>Précision de la temperature: ±0.5°C ( -20°C à +40°C) ±1°C (Pour le reste)</li>
                                        <li>Type de Capteur: NTC</li>
                                        <li>Précision de l’humidité: ±5%RH</li>
                                        <li>Type de Capteur d’humidité: Honeywell</li>
                                        <li>Longueur de cable du capteur: 5M</li>
                                        <li>Intervalle de téléchargement des données: 1min à 24H</li>
                                        <li>Capacité d’enrégistrement en cas de rupture du reseau Wifi: 20,000 Points de mesure</li>
                                        <li>Alarme: Visuelle (Indicateur LED, sonore et rappel online (à travers le Cloud))</li>
                                        <li>Port de communication: WIFI</li>
                                        <li>Batterie Stand-By: 3.7V 1100mAH lithium</li>
                                       </ul>
                                       <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .entry-item -->

                        <div class="entry-item lifestyle fashion col-sm-6">
                            <article class="entry entry-grid text-center">
                                <figure class="entry-media">
                                    <div class="owl-carousel owl-simple owl-light " data-toggle="owl">
                                        <a href="single.html">
                                            <img src="../image/cat3.jpg" alt="image desc">
                                        </a>
                                    </div><!-- End .owl-carousel -->
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                            <a href="#">Enrégistreurs de tempéraure</a>
                                        </span>
                                        <span class="meta-separator">|</span>
                                        <a href="#">usage unique</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">RC18 / RC19</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-content">
                                       <ul style=" list-style-type: disc;  text-align: left;">
                                        <li>Plage de mesure de la temperature: -30°C à +70°C</li>
                                        <li>Précision de la temperature: ±0.5°C ( -20°C à +40°C) ±1°C (Pour le reste)</li>
                                        <li>Retard de démarrage: 1min – 6hr</li>
                                        <li>Intervalle d’enrégistrement: 10sec – 12hr</li>
                                        <li>Capacité de stockage: 16,000 Points (Max)</li>
                                        <li>Type d’alarme: Visuel (LED Alarme)</li>
                                        <li>Modèle RC18: Alarme Unique</li>
                                        <li>Modèle RC19: Multiple Alarme</li>
                                        <li>Alimentation: 3.0V CR2450 Batterie Lithium (2 ans)</li>
                                        <li>IP Ratio: IP67</li>
                                        <li>Génère des rapports en PDF automatiquement sur les systèmes Windows et MAC</li>
                                        <li>Génère des rapports en PDF automatiquement sur les systèmes Windows et MAC</li>
                                        <li>Port de communication: USB</li>
                                       </ul>
                                       <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .entry-item -->

                        <div class="entry-item travel col-sm-6">
                            <article class="entry entry-grid text-center">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="../image/cat4.png" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                           <a href="#">Enrégistreurs de tempéraure</a>
                                        </span>
                                        <span class="meta-separator">|</span>
                                        <a href="#">Usage multiple</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">RC-4 / RC- 4HC.</a>
                                    </h2><!-- End .entry-title -->

                                  

                                    <div class="entry-content">
                                       <ul style=" list-style-type: disc;  text-align: left;">
                                        <li> Plage de mesure de la température: <br>-30°C à +60°C (Capteur interne) <br>-40°C à +85°C (Capteur externe optionel)</li>
                                        <li>Plage de mesure d’humidité: 0 à 99%RH (Uniquement pour le modèle RC-4HC)</li>
                                        <li>Précision de la temperature: ±0.5°C ( -20°C à +40°C) ±1°C (Pour le reste)</li>
                                        <li>Précision de l’humidité: ±3%RH (25°C, 20-90%RH), ±5%RH (les Autres) (Uniquement pour le modèle RC-4HC)</li>
                                        <li>Résolution d’affichage: 0.1°C/0,1%RH</li>
                                        <li>Intervalle d’enrégistrement: 10sec – 24hr</li>
                                        <li>Capacité de stockage: 16,000 Points (Max)</li>
                                        <li>Type d’alarme: Visuelle et Sonore (Limite supérieure, Limite inférieure)</li>
                                        <li>Alimentation: 3.0V CR2450</li>
                                        <li>Batterie Lithium (Remplaçable)</li>
                                        <li>IP Ratio: IP67</li>
                                        <li>Génère des rapports en</li>
                                        <li>PDF/Word/Excel/TXT</li>
                                        <li>Logiciel de gestion des données supporté par Windows et MAC</li>
                                        <li>Port de communication: USB</li>
                                       </ul>
                                       <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .entry-item -->

                        <div class="entry-item travel hobbies col-sm-6">
                            <article class="entry entry-grid text-center">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="../image/cat5.jpg" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                         <a href="#">Enrégistreurs de tempéraure</a>
                                        </span>
                                        <span class="meta-separator">|</span>
                                        <a href="#">Enrégistreurs d'humidité</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">usage multiple</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">RC-51 / RC- 51H</a>
                                    </h2><!-- End .entry-title -->

                                    

                                    <div class="entry-content">
                                       <ul style=" list-style-type: disc;  text-align: left;">
                                        <li>Plage de mesure de la température: -30°C à +70°C (Capteur interne)</li>
                                        <li>Plage de mesure d’humidité: 10 - 95%RH (Uniquement pour le modèle RC-51H)</li>
                                        <li>Précision de la temperature: ±0.5°C ( -20°C à +40°C) ±1°C (Pour le reste)</li>
                                        <li>Précision de la temperature: ±0.5°C ( -20°C à +40°C) ±1°C (Pour le reste) (Uniquement pour le modèle RC-51H)</li>
                                        <li>Résolution d’affichage: 0.1°C/0,1%RH</li>
                                        <li>Intervalle d’enrégistrement: 10sec – 24hr</li>
                                        <li>Capacité de stockage: 32,000 Points (Max)</li>
                                        <li>Alarme: Multiple alarmes (3x Limite supérieure, 2x Limite inférieure)</li>
                                        <li>Alimentation: 3.6V Batterie Lithium (Remplaçable)</li>
                                        <li>Alimentation: 3.6V Batterie Lithium (Remplaçable)</li>
                                        <li>Alimentation: 3.6V Batterie Lithium (Remplaçable)</li>
                                        <li>Logiciel de gestion des données supporté par Windows et MAC</li>
                                        <li>Port de communication: USB</li>
                                        <li>Resistance à L’eau: IP67 pour RC-51H</li>
                                       </ul>
                                       <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .entry-content -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .entry-item -->

                        <div class="entry-item hobbies col-sm-6">
                            <article class="entry entry-grid text-center">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="../image/cat6.png" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <span class="entry-author">
                                         <a href="#">Enrégistreurs de tempéraure</a>
                                        </span>
                                        <span class="meta-separator">|</span>
                                        <a href="#">Enrégistreurs d'humidité</a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">usage multiple</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="single.html">RC-5</a>
                                    </h2><!-- End .entry-title -->

                                    <div class="entry-content">
                                        <ul style=" list-style-type: disc;  text-align: left;">
                                         <li>Plage de mesure de la température: -30°C à +70°C (Capteur interne)</li>
                                         <li>Précision de la temperature: ±0.5°C ( -20°C à +40°C) ±1°C (Pour le reste)</li>
                                         <li>Résolution d’affichage: 0.1°C</li>
                                         <li>Intervalle d’enrégistrement: 10sec – 24hr</li>
                                         <li>Capacité de stockage: 32,000 Points (Max)</li>
                                         <li>Alarme: Multiple alarmes</li>
                                         <li>Alimentation: 3.6V Batterie Lithium (Remplaçable)</li>
                                         <li>Capteur: interne Type: NTC à résistance thermique</li>
                                         <li>Écran: LCD</li>
                                         <li>Génère des rapports en PDF/WORD/Excel/TXT</li>
                                         <li>Logiciel de gestion des données supporté par Windows et MAC</li>
                                        </ul>
                                        <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                     </div><!-- End .entry-content -->
                                    </div><!-- End .entry-body -->
                                    </article><!-- End .entry -->
                                    </div><!-- End .entry-item -->

                                    <div class="entry-item travel hobbies col-sm-6">
                                        <article class="entry entry-grid text-center">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="../image/cat8.png" alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->
                                    
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <span class="entry-author">
                                                        <a href="#">Détection de fuite avancée</a>
                                                       </span>
                                                       <span class="meta-separator">|</span>
                                                       <a href="#">Détecteur de fuite halogène</a>
                                                       <span class="meta-separator">|</span>
                                                       <a href="#">idéal et économique</a>
                                                </div><!-- End .entry-meta -->
                                    
                                                <h2 class="entry-title">
                                                    <a href="single.html">WJL-6000 Détecteur de fuite gaz</a>
                                                </h2><!-- End .entry-title -->
                                    
                                                <div class="entry-cats">
                                                    <p>Il répondra à tous les réfrigérants halogénés (contient du chlore ou du fluor). Cela comprend, mais sans s’y limiter: CFC par exemple R12, R11, R500, R503 etc. HCFC par exemple R22, R123, R124, R502 etc. HFC par ex. R134a, R404s, R125 etc. Mélanges tels que AZ-50. HP62. MP39 etc.</p>
                                                    </div><!-- End .entry-cats -->
                                    
                                                <div class="entry-content">
                                                    <ul style=" list-style-type: disc;  text-align: left;">
                                                        <p>Le détecteur de fuite halogène Elitech WJL-6000 peut également être utilisé pour:</p>
                                                        <li>Détecter les fuites de gaz d’oxyde d’éthylène dans les équipements de stérilisation des hôpitaux (il détectera le gaz vecteur halogéné).</li>
                                                        <li>Détecter SF-6 dans les disjoncteurs haute tension</li>
                                                        <li>Détecter la plupart des gaz contenant du chlore, du fluor et du brome (gaz halogènes).</li>
                                                        <li>Détecter les agents de nettoyage utilisés dans les applications</li>
                                                        <li>de nettoyage à sec comme le chloroéthylène</li>
                                                        <li>Détecter les gaz halogènes dans le système d’extinction d’incendie.</li>
                                                       </ul>
                                                       
                                                       <ul style=" list-style-type: disc;  text-align: left;">
                                                        <p style="font-weight:bold;">Caractéristiques principales :</p>
                                                        <li>Détecter toutes sortes de gaz réfrigérants halogènes;</li>
                                                        <li>Sensibilité ajustée à tout moment et elle peut être ajustée automatiquement au meilleur état de détection;</li>
                                                        <li>Circuit intégré précis avec conception de circuit à très faible consommation d’énergie, durée de vie de la batterie plus stable et plus longue;</li>
                                                        <li>Affichage visuel bicolore de la tension de la batterie;</li>
                                                        <li> Excellent capteur, haute sensibilité, longue durée de vie</li>
                                                       </ul>
                                                       
                                                       <ul style=" list-style-type: disc;  text-align: left;">
                                                        <p style="font-weight:bold;">Paramètres techniques :</p>
                                                        <li>Température de fonctionnement: 0°C - 52°C</li>
                                                        <li>Sensibilité maximale: 6 g / an, pour tous les fluides frigorigènes halogénés;</li>
                                                        <li>Autonomie de la batterie: environ 50 heures d’utilisation normale;</li>
                                                        <li>Temps de réponse: instantané;</li>
                                                        <li> Mode de fonctionnement: continu, sans limitation;</li>
                                                        <li>Longueur de sonde fixe: 20 cm;</li>
                                                        <li>Dimensions: 22,9 * 6,5 * 6,5 (cm);</li>
                                                        <li>Temps de préchauffage: environ 6 secondes;</li>
                                                        <li>Temps de réinitialisation: deux à dix secondes;</li>
                                                        <li>Alimentation 6V DC, quatre piles alcalines AAA</li>
                                                       </ul>
                                                   <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->
                                    </div><!-- End .entry-item -->
                                    

                
                                    <div class="entry-item hobbies col-sm-6">
                                        <article class="entry entry-grid text-center">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="../image/cat9.png" alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->
            
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <span class="entry-author">
                                                        <a href="#">Thermomètre numérique</a>
                                                     </span>
                                                     <span class="meta-separator">|</span>
                                                     <a href="#">Maison ou cuisine professionnelle</a>
                                                </div><!-- End .entry-meta -->
            
                                                <h2 class="entry-title">
                                                    <a href="single.html">Thermomètre numérique à stylet portable WT-1B</a>
                                                </h2><!-- End .entry-title -->
            
                                                <div class="entry-content">
                                                    <ul style=" list-style-type: disc;  text-align: left;">
                                                        <p style="font-weight: bold;">Application:</p>
                                                        <p>Le thermomètre numérique à stylet portable UWT-1B offre une totale tranquillité d’esprit lors de la cuisson afin que vous puissiez vous assurer que la viande et la volaille sont cuites en toute sécurité. La longue sonde en acier inoxydable est entièrement étanche et facile à nettoyer. Arrêt automatique après 10 minutes.</p>
                                                        <p style="font-weight: bold;">Paramètres:</p>
                                                        <li>Rapide et facile à utiliser, un bouton pour l’allumer, puis utilisez simplement la sonde en acier inoxydable pour mesurer la température</li>
                                                        <li>Mesure en Fahrenheit et en Celsius avec un écran LCD facile à lire</li>
                                                        <li>Piles incluses donc prêtes à l’emploi immédiatement.</li>
                                                        <li>Livré dans un étui de rangement étanche avec sangle de suspension.</li>
                                                        <li><span style="font-weight: bold;">Mesure de la température :</span>-50°C ~ +300°C Précision de la température: ±1°C</li>
                                                        <p style="font-weight: bold;">Applications :</p>
                                                        <li>BBQ et cuisson de viande</li>
                                                        <li>Fabrication de confiture</li>
                                                        <li>Brassage </li>
                                                        <li>Vinification </li>
                                                        <li> Fabrication de gâteaux</li>
                                                        <li>Pain </li>
                                                        <li>Fabrication de fudge</li>
                                                        <li>Fabrication de chocolat </li>
                                                        <li>Réfrigération</li>
                                                        <li>Utilisation en laboratoire</li>
                                                       </ul>
                                                    <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                                 </div><!-- End .entry-content -->
                                                </div><!-- End .entry-body -->
                                                </article><!-- End .entry -->
                                                </div><!-- End .entry-item -->


                                                <div class="entry-item travel hobbies col-sm-6">
                                                    <article class="entry entry-grid text-center">
                                                        <figure class="entry-media">
                                                            <a href="single.html">
                                                                <img src="../image/cat7.png" alt="image desc">
                                                            </a>
                                                        </figure><!-- End .entry-media -->
                        
                                                        <div class="entry-body">
                                                            <div class="entry-meta">
                                                                <span class="entry-author">
                                                                    <a href="#">Enrégistreurs de tempéraure</a>
                                                                   </span>
                                                                   <span class="meta-separator">|</span>
                                                                   <a href="#">Enrégistreurs d'humidité</a>
                                                                   <span class="meta-separator">|</span>
                                                                   <a href="#">usage multiple</a>
                                                            </div><!-- End .entry-meta -->
                        
                                                            <h2 class="entry-title">
                                                                <a href="single.html">RC-5+</a>
                                                            </h2><!-- End .entry-title -->    
                                                            <div class="entry-content">
                                                                <ul style=" list-style-type: disc;  text-align: left;">
                                                                    <li>Plage de mesure de la température: -30°C à +70°C (Capteur interne)</li>
                                                                    <li>Précision de la temperature: ±0.5°C ( -20°C à +40°C) ±1°C (Pour le reste)</li>
                                                                    <li>Résolution d’affichage: 0.1°C</li>
                                                                    <li>Intervalle d’enrégistrement: 10sec – 12hr</li>
                                                                    <li>Capacité de stockage: 32,000 Points (Max)</li>
                                                                    <li>Alarme: Multiple alarmes</li>
                                                                    <li>Alimentation: 3.6V Batterie Lithium (Remplaçable)</li>
                                                                    <li>Capteur: interne Type: NTC à résistance thermique</li>
                                                                    <li>Écran: LCD</li>
                                                                    <li>Génère des rapports en PDF/WORD/Excel/TXT</li>
                                                                    <li>Rapports en format PDF sont génèrés automatiquement et peuvent être protèger par un MOT DE PASSE.</li>
                                                                    <li>Logiciel de gestion des données supporté par Windows et MAC</li>
                                                                    <li>Port de communication: USB</li>
                                                                    <li>Resistance à L’eau: IP67 pour RC-51H</li>
                                                                </ul>
                                                               <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                                            </div><!-- End .entry-content -->
                                                        </div><!-- End .entry-body -->
                                                    </article><!-- End .entry -->
                                                </div><!-- End .entry-item -->



                                                 <div class="entry-item hobbies col-sm-6">
                                        <article class="entry entry-grid text-center">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="../image/cat10.png" alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->
            
                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <span class="entry-author">
                                                        <a href="#">GMH</a>
                                                     </span>
                                                     <span class="meta-separator">|</span>
                                                     <a href="#">Distributeur Exclusif</a>
                                                </div><!-- End .entry-meta -->
            
                                                <h2 class="entry-title">
                                                    <a href="single.html">Gamme de Centrifugeuse HERMLE</a>
                                                </h2><!-- End .entry-title -->
            
                                                <div class="entry-content">
                                                    <ul style=" list-style-type: disc;  text-align: left;">
                                                        <li>La petite centrifugeuse Z 207 A est idéale pour une utilisation dans les cabinets médicaux et les laboratoires avec un petit nombre d’échantillons.</li>
                                                        <li>Il est fourni avec un rotor angulaire pouvant contenir jusqu’à 8 x 15 ml et les tubes de prélèvement sanguin les plus courants. L’interface utilisateur innovante avec fonction «tactile» est particulièrement conviviale et unique dans cette classe de centrifugeuses</li>
                                                        <li>Spécifications techniques Vitesse: 6 800 tr / min max; max. RZB: 4,445 xg; volume max: 8 x 15 ml RB / 4 x 15 ml Falcon</li>
                                                        <li>Plage de vitesse: 200 - 6 800 min-1</li>
                                                        <li> Durée: 59 min 50 s / En pas de 10s 99 h 59 min /En pas de 1min </li>
                                                        <li>Dimensions: 28 cm x 24 cm x 35 cm (LxHxP)</li>
                                                        <li>Poids: 8 kg</li>
                                                        <li>Consommation électrique: 50 W </li>
                                                       </ul>
                                                    <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                                 </div><!-- End .entry-content -->
                                                </div><!-- End .entry-body -->
                                                </article><!-- End .entry -->
                                                </div><!-- End .entry-item -->



                                                <div class="entry-item travel hobbies col-sm-6">
                                                    <article class="entry entry-grid text-center">
                                                        <figure class="entry-media">
                                                            <a href="single.html">
                                                                <img src="../image/cat11.png" alt="image desc">
                                                            </a>
                                                        </figure><!-- End .entry-media -->
                        
                                                        <div class="entry-body">
                                                            <div class="entry-meta">
                                                                <span class="entry-author">
                                                                    <a href="#">GMH</a>
                                                                   </span>
                                                                   <span class="meta-separator">|</span>
                                                                   <a href="#">Distributeur Exclusif</a>
                                                            </div><!-- End .entry-meta -->
                        
                                                            <h2 class="entry-title">
                                                                <a href="single.html">Gamme de produits KERN</a>
                                                            </h2><!-- End .entry-title -->    
                                                            <div class="entry-content">
                                                                <ul style=" list-style-type: disc;  text-align: left; font-weight: bold;">
                                                                    <li>Microscope à lumière transmise</li>
                                                                    <li>Microscope binoculaire </li>
                                                                    <li>Microscope à contraste de phase</li>
                                                                    <li>Microscope fluorescent</li>
                                                                    <li>Microscope polarisant </li>
                                                                    <li>Microscope métallurgique</li>
                                                                    <li>Microscope inversé</li>
                                                                </ul>
                                                               <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                                            </div><!-- End .entry-content -->
                                                        </div><!-- End .entry-body -->
                                                    </article><!-- End .entry -->
                                                </div><!-- End .entry-item -->
                          
                                                
                                                <div class="entry-item hobbies col-sm-6">
                                                    <article class="entry entry-grid text-center">
                                                        <figure class="entry-media">
                                                            <a href="single.html">
                                                                <img src="../image/cat12.png" alt="image desc">
                                                            </a>
                                                        </figure><!-- End .entry-media -->
                        
                                                        <div class="entry-body">
                                                            <div class="entry-meta">
                                                                <span class="entry-author">
                                                                    <a href="#">GMH</a>
                                                                 </span>
                                                                 <span class="meta-separator">|</span>
                                                                 <a href="#">Distributeur Exclusif</a>
                                                            </div><!-- End .entry-meta -->
                        
                                                            <h2 class="entry-title">
                                                                <a href="single.html">Eclairage col de cygne</a>
                                                            </h2><!-- End .entry-title -->
                        
                                                            <div class="entry-content">
                                                                <ul style=" list-style-type: disc;  text-align: left;">
                                                                    <p>Choisissez ici votre éclairage externe favoris afin d’obtenir un maximum de modularité et la meilleure facilité d’utilisation possible pour les microscopes binoculaires <br> Ces systèmes d’éclairage professionnels garantissent une lumière d’intensité constante d’excellente qualité sur l’objet</p>
                                                                    <li style="font-weight: bold;">OZB-A4571</li>
                                                                    <li style="font-weight: bold;">OZB-A4572</li>
                                                                    <li>Spécifications techniques Vitesse: 6 800 tr / min max; max. RZB: 4,445 xg; volume max: 8 x 15 ml RB / 4 x 15 ml Falcon</li>
                                                                    <li>Plage de vitesse: 200 - 6 800 min-1</li>
                                                                    <li> Durée: 59 min 50 s / En pas de 10s 99 h 59 min /En pas de 1min </li>
                                                                    <li>Dimensions: 28 cm x 24 cm x 35 cm (LxHxP)</li>
                                                                    <li>Poids: 8 kg</li>
                                                                    <li>Consommation électrique: 50 W </li>
                                                                   </ul>
                                                                <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                                             </div><!-- End .entry-content -->
                                                            </div><!-- End .entry-body -->
                                                            </article><!-- End .entry -->
                                                            </div><!-- End .entry-item -->


                                                            <div class="entry-item travel hobbies col-sm-6">
                                                                <article class="entry entry-grid text-center">
                                                                    <figure class="entry-media">
                                                                        <a href="single.html">
                                                                            <img src="../image/cat13.png" alt="image desc">
                                                                        </a>
                                                                    </figure><!-- End .entry-media -->
                                    
                                                                    <div class="entry-body">
                                                                        <div class="entry-meta">
                                                                            <span class="entry-author">
                                                                                <a href="#">Double col de cygne à led</a>
                                                                             </span>
                                                                             <span class="meta-separator">|</span>
                                                                             <a href="#">Source de lumière froide</a>
                                                                        </div><!-- End .entry-meta -->
                                    
                                                                        <h2 class="entry-title">
                                                                            <a href="single.html">Éclairage col-de-cygne KERN OZB-IF</a>
                                                                        </h2><!-- End .entry-title -->    
                                                                        <div class="entry-content">
                                                                            <ul style=" list-style-type: disc;  text-align: left;">
                                                                                <p style="font-weight: bold;">Caractéristiques :</p>
                                                                                <p>Avec l’éclairage col-de-cygne LED 20 W OZB-A4516 à faisceau lumineux focalisable, vous pouvez régler votre éclairage individu- ellement. Un rayonnement ponctuel ou dispersé permet un éclairage optimal de votre échantillon</p>
                                                                               </ul>
                                                                           <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                                                        </div><!-- End .entry-content -->
                                                                    </div><!-- End .entry-body -->
                                                                </article><!-- End .entry -->
                                                            </div><!-- End .entry-item -->

                                                            
                                                            <div class="entry-item hobbies col-sm-6">
                                                                <article class="entry entry-grid text-center">
                                                                    <figure class="entry-media">
                                                                        <a href="single.html">
                                                                            <img src="../image/cat14.png" alt="image desc">
                                                                        </a>
                                                                    </figure><!-- End .entry-media -->
                                    
                                                                    <div class="entry-body">
                                                                        <div class="entry-meta">
                                                                            <span class="entry-author">
                                                                                <a href="#">GMH</a>
                                                                             </span>
                                                                             <span class="meta-separator">|</span>
                                                                             <a href="#">Distributeur Exclusif</a>
                                                                        </div><!-- End .entry-meta -->
                                    
                                                                        <h2 class="entry-title">
                                                                            <a href="single.html">Réfractomètre d‘Abbe KERN ORT-1</a>
                                                                        </h2><!-- End .entry-title -->
                                    
                                                                        <div class="entry-content">
                                                                            <ul style=" list-style-type: disc;  text-align: left;">

                                                                               </ul>
                                                                            <a href="#" class="banner-link" style="color: #009FDA!important;">En savoir plus<i class="icon-long-arrow-right"></i></a>
                                                                         </div><!-- End .entry-content -->
                                                                        </div><!-- End .entry-body -->
                                                                        </article><!-- End .entry -->
                                                                        </div ><!-- End .entry-item -->
                                                                    </div><!-- End .entry-container -->

                                                                        <nav aria-label="Page navigation">
                                                                            <ul class="pagination justify-content-center">
                                                                                
                                                                                <li class="page-item active" aria-current="page" ><a style="color:#007bff;" class="page-link" href="cathalogue.php">1</a></li>
                                                                                <li class="page-item"><a class="page-link" href="cathalogue2.php">2</a></li>
                                                                                <li class="page-item"><a class="page-link" href="contact.php">3</a></li>
                                                                                
                                                                            </ul>
                                                                        </nav>
                 </div><!-- End .container -->
            </div><!-- End .page-content -->
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
                            <a href="contact.php" style="color: white!important;">contact</a>

                        </li>
                        <li>
                            <a href="#" style="color: white!important;">catalogue</a>

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

</div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.hoverIntent.min.js"></script>
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/superfish.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>

    <script src="../assets/js/demos/demo-16.js"></script>
    <script src="main.js"></script>

    <script src="server.js"></script>
    <script src="routes/auth.js"></script>


</body>


<!-- molla/blog-grid-2cols.html  22 Nov 2019 10:04:15 GMT -->
</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all product links
        const products = document.querySelectorAll('.product-image, .cat-block');
    
        products.forEach(product => {
            product.addEventListener('click', function(event) {
                event.preventDefault();
                if (product.classList.contains('cat-block')) {
                    // Handle cat-block elements
                    const productName = product.querySelector('.cat-block-title').innerText;
                    const productImage = product.querySelector('img').src;
                    showPopup(productName, 'Category: N/A', productImage); // No category available for cat-block
                } else {
                    // Handle product elements
                    const productElement = product.closest('.product');
                    const productName = productElement.querySelector('.product-title a').innerText;
                    const productCategory = productElement.querySelector('.product-cat a').innerText;
                    const productImage = productElement.querySelector('.product-image').src;
                    showPopup(productName, productCategory, productImage);
                }
            });
        });
    
        function showPopup(name, category, imageSrc) {
            // Create the popup overlay
            const popupOverlay = document.createElement('div');
            popupOverlay.style.position = 'fixed';
            popupOverlay.style.top = '0';
            popupOverlay.style.left = '0';
            popupOverlay.style.width = '100%';
            popupOverlay.style.height = '100%';
            popupOverlay.style.backgroundColor = 'rgba(0,0,0,0.5)';
            popupOverlay.style.display = 'flex';
            popupOverlay.style.justifyContent = 'center';
            popupOverlay.style.alignItems = 'center';
            popupOverlay.style.zIndex = '1000';
    
            // Create the popup container
            const popupContainer = document.createElement('div');
            popupContainer.style.backgroundColor = 'white';
            popupContainer.style.padding = '20px';
            popupContainer.style.borderRadius = '10px';
            popupContainer.style.textAlign = 'center';
            popupContainer.style.position = 'relative';
    
            // Create the close button
            const closeButton = document.createElement('span');
            closeButton.innerHTML = '&times;';
            closeButton.style.position = 'absolute';
            closeButton.style.top = '10px';
            closeButton.style.right = '10px';
            closeButton.style.cursor = 'pointer';
            closeButton.style.fontSize = '20px';
            closeButton.addEventListener('click', function() {
                document.body.removeChild(popupOverlay);
            });
    
            // Create the product image element
            const productImage = document.createElement('img');
            productImage.src = imageSrc;
            productImage.alt = name;
            productImage.style.maxWidth = '100%';
    
            // Create the product name element
            const productName = document.createElement('h2');
            productName.innerText = name;
    
            // Create the product category element
            const productCategory = document.createElement('p');
            productCategory.innerText = category;
    
            // Append elements to the popup container
            popupContainer.appendChild(closeButton);
            popupContainer.appendChild(productImage);
            popupContainer.appendChild(productName);
            popupContainer.appendChild(productCategory);
    
            // Append the popup container to the overlay
            popupOverlay.appendChild(popupContainer);
    
            // Append the overlay to the body
            document.body.appendChild(popupOverlay);
        }
    });
    
      </script>