<?php
session_start();
if (isset($_SESSION['email'])) {
    header('Location: account.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inscription - GM&H</title>
    <meta name="description" content="Créez votre compte GM&H">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/icons/gmh.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/icons/gmh.png">
    <link rel="shortcut icon" href="../assets/images/icons/gmh.png">
    <meta name="theme-color" content="#2F83C2">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/gmh-global.css">
    <link rel="stylesheet" href="../assets/css/pages.css">
</head>
<body>
    <section class="auth-section">
        <div class="auth-card" style="max-width: 500px;">
            <div class="auth-logo">
                <a href="../index.php">
                    <img src="../assets/images/demos/demo-21/gmh.png" alt="GM&H">
                </a>
            </div>
            
            <h1 class="auth-title">Créer un compte</h1>
            <p class="auth-subtitle">Rejoignez-nous et profitez de nos services.</p>
            
            <?php if (isset($_GET['error'])): ?>
            <div style="background: #fee; color: #c00; padding: 1rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.9rem;">
                <i class="la la-exclamation-circle"></i>
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
            <?php endif; ?>
            
            <form class="auth-form" action="../api/process_register.php" method="POST">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label" for="firstname">Prénom</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Jean" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="lastname">Nom</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Dupont" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="email">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="phone">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+225 XX XX XX XX XX">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required minlength="6">
                    <small style="color: var(--gray-500); font-size: 0.8rem;">Minimum 6 caractères</small>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password_confirm">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="••••••••" required>
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: flex; align-items: flex-start; gap: 0.5rem; cursor: pointer; font-size: 0.9rem; color: var(--gray-600);">
                        <input type="checkbox" name="terms" required style="width: 16px; height: 16px; margin-top: 2px;">
                        <span>J'accepte les <a href="#">conditions d'utilisation</a> et la <a href="#">politique de confidentialité</a></span>
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg">
                    <i class="la la-user-plus"></i>
                    Créer mon compte
                </button>
            </form>
            
            <div class="auth-divider">
                <span>ou</span>
            </div>
            
            <div class="auth-social">
                <button class="auth-social-btn">
                    <i class="la la-google"></i>
                    Google
                </button>
                <button class="auth-social-btn">
                    <i class="la la-facebook-f"></i>
                    Facebook
                </button>
            </div>
            
            <div class="auth-footer">
                Vous avez déjà un compte ? <a href="login.php">Se connecter</a>
            </div>
            
            <div style="text-align: center; margin-top: 1.5rem;">
                <a href="../index.php" style="color: var(--gray-500); font-size: 0.9rem;">
                    <i class="la la-arrow-left"></i> Retour à l'accueil
                </a>
            </div>
        </div>
    </section>
    
    <script>
        // Password confirmation validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('password_confirm').value;
            
            if (password !== confirm) {
                e.preventDefault();
                alert('Les mots de passe ne correspondent pas.');
            }
        });
    </script>
</body>
</html>
