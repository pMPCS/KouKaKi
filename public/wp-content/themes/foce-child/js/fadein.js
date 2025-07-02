// Animation des sections
// // Attend que le DOM soit prêt avant d’exécuter le script
document.addEventListener("DOMContentLoaded", function () {
    // Sélectionne les sections à animer (banner, story, studio...)
    const sections = document.querySelectorAll(
        'section.banner, section[id="#story"].story, section#studio, section.nomination, article.parallax-section, footer.site-footer'
    );

    // Fonction utilitaire : vérifie si un élément est déjà visible dans le viewport
    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top < window.innerHeight && rect.bottom > 0
        );
    }

    // Création d’un observer pour déclencher l’animation quand la section entre dans le viewport
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Quand la section entre dans le viewport, ajoute la classe visible avec un délai
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, 500); // délai en ms (à ajuster)
                // Arrête d’observer cette section une fois qu’elle est visible
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 }); // 15% de la section visible pour déclencher

    // Pour chaque section...
    sections.forEach(section => {
        // Si elle est déjà visible à l’ouverture (ex. : rechargement en bas de page)
        if (isInViewport(section)) {
            setTimeout(() => {
                section.classList.add('visible');
            }, 500); // même délai
        } else {
            // Sinon, on la met sous surveillance pour l’apparition lors du scroll
            observer.observe(section);
        }
    });
});


// Animation des titres
// Attend que le DOM soit prêt avant d’exécuter le script
document.addEventListener("DOMContentLoaded", function () {
    // Liste des titres à animer (en minuscules, sans accents)
    const titresAnimes = [
        "l'histoire",
        "les personnages",
        "le lieu",
        "studio koukaki"
    ];

    // Pour chaque h2 ou h3 du site...
    document.querySelectorAll('h2, h3').forEach(title => {
        // On récupère le texte du titre (minuscule, sans espaces)
        const texte = title.textContent.trim().toLowerCase();
        // Si ce titre fait partie de la liste
        if (titresAnimes.includes(texte)) {
            // Et si le titre n’a pas déjà un span.sectionTitle
            if (!title.querySelector('.sectionTitle')) {
                // On enveloppe tout le contenu dans un <span class="sectionTitle">
                title.innerHTML = `<span class="sectionTitle">${title.innerHTML}</span>`;
            }
        }
    });

    // Sélectionne tous les spans à animer
    const spans = document.querySelectorAll('.sectionTitle');
    // Création d’un observer pour déclencher l’animation au scroll
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Quand le span entre dans le viewport, on applique la classe visible après un délai
                setTimeout(() => {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }, 400);
            }
        });
    }, { threshold: 0.6 }); // Plus de la moitié du titre visible

    // Met sous surveillance chaque span
    spans.forEach(span => observer.observe(span));
});
