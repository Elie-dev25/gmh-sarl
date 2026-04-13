// Obtenir la fenêtre modale
var modal = document.getElementById('modal');

// Obtenir l'image et l'insérer dans la modale
var modalImg = document.getElementById('modal-image');

// Obtenir toutes les images et configurer l'événement de clic
var images = document.querySelectorAll('.gallery-item img');
images.forEach(function(image) {
    image.addEventListener('click', function() {
        // Vérifier la largeur de l'écran avant d'ouvrir la modale
        if (window.innerWidth >= 1024) {
            modal.style.display = 'flex';
            modalImg.src = this.src;
        }
    });
});

// Obtenir l'élément <span> qui ferme la modale
var span = document.querySelector('.close');

// Fermer la modale lorsque l'utilisateur clique sur <span> (x)
span.onclick = function() {
    modal.style.display = 'none';
}

// Fermer la modale lorsqu'on clique en dehors de l'image
modal.onclick = function(event) {
    if (event.target !== modalImg) {
        modal.style.display = 'none';
    }
}

// Obtenir toutes les images et configurer l'événement de clic pour le bouton "Acheter"
var images = document.querySelectorAll('.gallery-item');
images.forEach(function(item) {
    var img = item.querySelector('img');
    var button = item.querySelector('.buy-button');
    
    // Définir l'URL de WhatsApp avec le message personnalisé
    var message = "J'ai vu ce produit dans votre galerie et je suis intéressé: ";
    var whatsappURL = "https://wa.me/+2250706841082?text=" + encodeURIComponent(message + img.src);
    
    // Assigner l'URL au bouton
    button.href = whatsappURL;
});
