<!-- SECTION Personnages sous forme d'article -->
<article id="characters">

    <!-- Titre de section "Les personnages" avec effet d'animation sur chaque mot -->
    <h3>
        <!-- Première partie du titre avec animation d'apparition -->
        <span class="sectionTitle title-first">Les</span>
        <!-- Deuxième partie du titre avec animation d'apparition décalée -->
        <span class="sectionTitle title-second">personnages</span>
    </h3>
    
    <!-- Slider Swiper pour faire défiler les personnages -->
    <div class="swiper characters-swiper">
        <!-- Wrapper Swiper contenant chaque slide de personnage -->
        <div class="swiper-wrapper">
            <?php
            // Définition des arguments pour récupérer tous les custom post types "characters"
            $args = array(
                'post_type'      => 'characters',          // Type de contenu personnalisé
                'posts_per_page' => -1,                    // Récupérer tous les personnages
                'meta_key'       => '_main_char_field',    // Trier selon ce champ personnalisé
                'orderby'        => 'meta_value_num',      // Tri numérique du champ
            );
            // Nouvelle requête WP_Query avec ces arguments
            $characters_query = new WP_Query($args);
            
            // Boucle sur chaque personnage trouvé
            while ($characters_query->have_posts()) :
                $characters_query->the_post(); ?>
                
                <!-- Slide Swiper pour chaque personnage -->
                <div class="swiper-slide">
                    <figure>
                        <!-- Image à la une du personnage -->
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                        <!-- Nom du personnage sous l'image -->
                        <figcaption><?php the_title(); ?></figcaption>
                    </figure>
                </div>
            
            <?php endwhile; 
            // Remise à zéro de la boucle principale WordPress (important)
            wp_reset_postdata(); ?>
        </div>
    </div>
</article>
