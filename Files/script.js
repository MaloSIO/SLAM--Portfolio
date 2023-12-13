// Obtenez toutes les sections de la page
var sections = document.querySelectorAll('section');

// Ajoutez un gestionnaire d'événement pour le défilement
window.addEventListener('scroll', function () {
    var scrollPosition = window.scrollY;
    
    // Parcourez les sections et vérifiez la position
    sections.forEach(function (section) {
        var sectionId = section.getAttribute('id');
        var sectionTop = section.offsetTop;
        var sectionHeight = section.clientHeight;

        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            // Cette section est actuellement visible
            // Ajoutez la classe "actif" à l'onglet correspondant dans la barre de navigation
            document.querySelector('#nav a[href="#' + sectionId + '"]').classList.add('actif');
        } else {
            // Cette section n'est pas visible, retirez la classe "actif" de l'onglet
            document.querySelector('#nav a[href="#' + sectionId + '"]').classList.remove('actif');
        }
    });
});