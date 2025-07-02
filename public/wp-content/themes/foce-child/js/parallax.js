// Ajoute un écouteur d'événement sur le scroll de la fenêtre
window.addEventListener('scroll', function () {
    // Sélectionne la section parallax
    var section = document.querySelector('.parallax-section');
    // Si la section n'existe pas, arrête le script
    if (!section) return;

    // Récupère la position et la hauteur de la section
    var sectionTop = section.offsetTop;
    var sectionHeight = section.offsetHeight;

    // Calcule la position actuelle du scroll (bas de la fenêtre)
    var scrollY = window.scrollY + window.innerHeight;

    // Calcule la progression du scroll à l'intérieur de la section
    // 0 : début de la section, 1 : fin de la section (valeur clampée entre 0 et 1)
    var progress = Math.min(1, Math.max(0, (scrollY - sectionTop) / (sectionHeight + window.innerHeight)));

    // Sélectionne les nuages
    var cloud1 = section.querySelector('.cloud1');
    var cloud2 = section.querySelector('.cloud2');

    // Applique la translation horizontale sur 300px en fonction du scroll
    if (cloud1) {
        cloud1.style.transform = `translateX(-${progress * 300}px)`; // Nuage 1 se déplace de gauche à droite
    }
    if (cloud2) {
        cloud2.style.transform = `translateX(-${progress * 300}px)`; // Nuage 2 idem
    }
});



// parallaxe sur banner-logo

document.addEventListener('DOMContentLoaded', function () {
    const banner = document.querySelector('.banner');
    const logo = document.querySelector('.banner__logo');
    if (!banner || !logo) return;

    // Fonction qui gère la position du logo en fonction du scroll
    function updateLogoPosition() {
        const bannerHeight = banner.offsetHeight;
        const logoHeight = logo.offsetHeight;
        const scrollY = window.scrollY || window.pageYOffset;
        const bannerTop = banner.offsetTop;

        // Position de base selon la taille d'écran
        function getBaseTop() {
            // Sur mobile, on bloque le logo (plus de parallaxe)
            if (window.innerWidth <= 767) {
                return banner.offsetHeight * 0.10; // centre verticalement
            } else {
                return 15 * 15; // 18em en px (à ajuster)
            }
        }

        // Seulement desktop/tablette (>767px)
        if (window.innerWidth > 767) {
            let delta = scrollY - bannerTop;
            if (delta < 0) delta = 0;
            const max = bannerHeight - logoHeight - getBaseTop();
            if (delta < max) {
                logo.style.position = 'absolute';
                logo.style.top = `${getBaseTop() + delta}px`;
            } else {
                logo.style.position = 'absolute';
                logo.style.top = `${bannerHeight - logoHeight}px`;
            }
            logo.style.left = '50%';
            logo.style.transform = 'translateX(-50%)';
        } else {
            // Mobile : pas de parallaxe, logo replacé en position normale
            logo.style.position = '';
            logo.style.top = '';
            logo.style.left = '';
            logo.style.transform = '';
        }
    }

    // Gestion propre des événements
    function handleParallax() {
        updateLogoPosition();
        // On ajoute ou enlève les listeners selon la taille
        if (window.innerWidth > 767) {
            window.addEventListener('scroll', updateLogoPosition);
        } else {
            window.removeEventListener('scroll', updateLogoPosition);
        }
    }

    // Premier appel
    handleParallax();

    // Si on change la taille de fenêtre : on adapte
    window.addEventListener('resize', handleParallax);
});

