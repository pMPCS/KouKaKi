// Attend que le DOM soit entièrement chargé avant d’exécuter le script
document.addEventListener("DOMContentLoaded", function () {
    // Sélectionne le bouton du menu burger
    const burger = document.querySelector(".burgerMenu");
    // Sélectionne le menu plein écran par son ID
    const menu = document.getElementById("fullScreenMenu");
    // Sélectionne tous les liens (a) à l'intérieur du menu
    const links = menu.querySelectorAll("a");

    // Si on ne trouve pas le burger ou le menu, on arrête le script (sécurité)
    if (!burger || !menu) return;

    // --- Gestion de l'ouverture/fermeture du menu au clic sur le burger ---
    burger.addEventListener("click", function () {
        // Ajoute ou enlève la classe 'open' au menu, retourne true/false selon l’état
        const isOpen = menu.classList.toggle("open");
        // Ajoute ou enlève la classe 'open' sur le bouton burger
        burger.classList.toggle("open", isOpen);
        // Met à jour l’attribut aria-expanded (pour l’accessibilité)
        burger.setAttribute("aria-expanded", isOpen ? "true" : "false");
        // Met à jour aria-hidden sur le menu (pour l’accessibilité)
        menu.setAttribute("aria-hidden", !isOpen);
        // Ajoute/enlève la classe 'menu-open' au body pour empêcher le scroll en arrière-plan
        document.body.classList.toggle("menu-open", isOpen);
    });

    // --- Ferme le menu lorsqu’on clique sur un lien du menu ---
    links.forEach(link => {
        link.addEventListener("click", function () {
            // Retire la classe 'open' du menu
            menu.classList.remove("open");
            // Retire la classe 'open' du burger
            burger.classList.remove("open");
            // Met aria-expanded à false
            burger.setAttribute("aria-expanded", "false");
            // Met aria-hidden à true sur le menu
            menu.setAttribute("aria-hidden", "true");
            // Enlève la classe qui empêche le scroll du body
            document.body.classList.remove("menu-open");
        });
    });
});
