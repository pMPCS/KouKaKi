document.addEventListener('DOMContentLoaded', function () {
    // =========================
    // 1. Apparition du titre au scroll
    // =========================
    const title = document.querySelector('#characters .section-title');
    if (title) {
        // On crée un observer pour détecter l'entrée du titre dans le viewport
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Ajoute la classe visible quand le titre est dans la fenêtre
                    entry.target.classList.add('visible');
                    // Arrête d'observer pour éviter de le refaire à chaque scroll
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.25 }); // 25% du titre doit être visible pour déclencher
        observer.observe(title);
    }

    // =========================
    // 2. Slider Swiper pour les personnages
    // =========================
    var swiper = new Swiper('.characters-swiper', {
        // Effet de défilement style "coverflow" 3D
        effect: 'coverflow',
        grabCursor: true,         // Curseur "main" quand on survole le slider
        centeredSlides: true,     // Slide actif centré
        slidesPerView: 3,         // Nombre de slides visibles (desktop)
        spaceBetween: 32,         // Espacement entre slides
        loop: true,               // Boucle infinie
        pauseOnMouseEnter: true,  // Met en pause le slider au survol de la souris
        speed: 3000,              // Durée de transition (ms) entre les slides
        autoplay: {
            delay: 3000,            // Attente entre chaque slide auto
            disableOnInteraction: false // Ne désactive pas l'autoplay si l'utilisateur interagit
        },
        coverflowEffect: {
            rotate: 70,     // Angle de rotation
            stretch: 0,     // Espace étiré entre slides
            depth: 100,     // Profondeur 3D
            modifier: 1,    // Force de l'effet
            slideShadows: false // Pas d’ombre sous les slides
        },
        // Responsive : nombre de slides visibles selon la taille de l'écran
        breakpoints: {
            0:    { slidesPerView: 1 },   // Mobile
            700:  { slidesPerView: 2 },   // Tablette portrait/paysage
            1024: { slidesPerView: 3 }    // Desktop
        }
    });
});
