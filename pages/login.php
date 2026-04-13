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
    <title>Connexion - GM&H</title>
    <meta name="description" content="Connectez-vous à votre compte GM&H">
    
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
        <div class="auth-card">
            <div class="auth-logo">
                <a href="../index.php">
                    <img src="../assets/images/demos/demo-21/gmh.png" alt="GM&H">
                </a>
            </div>
            
            <h1 class="auth-title">Connexion</h1>
            <p class="auth-subtitle">Bienvenue ! Connectez-vous à votre compte.</p>
            
            <?php if (isset($_GET['error'])): ?>
            <div style="background: #fee; color: #c00; padding: 1rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.9rem;">
                <i class="la la-exclamation-circle"></i>
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
            <?php endif; ?>
            
            <?php if (isset($_GET['success'])): ?>
            <div style="background: #efe; color: #060; padding: 1rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.9rem;">
                <i class="la la-check-circle"></i>
                <?php echo htmlspecialchars($_GET['success']); ?>
            </div>
            <?php endif; ?>
            
            <form class="auth-form" action="../api/process_login.php" method="POST">
                <div class="form-group">
                    <label class="form-label" for="email">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer; font-size: 0.9rem; color: var(--gray-600);">
                        <input type="checkbox" name="remember" style="width: 16px; height: 16px;">
                        Se souvenir de moi
                    </label>
                    <a href="#" style="font-size: 0.9rem;">Mot de passe oublié ?</a>
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg">
                    <i class="la la-sign-in-alt"></i>
                    Se connecter
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
                Vous n'avez pas de compte ? <a href="register.php">Créer un compte</a>
            </div>
            
            <div style="text-align: center; margin-top: 1.5rem;">
                <a href="../index.php" style="color: var(--gray-500); font-size: 0.9rem;">
                    <i class="la la-arrow-left"></i> Retour à l'accueil
                </a>
            </div>
        </div>
    </section>
</body>
</html>
