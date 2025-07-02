<?php

get_header();
?>

    <main id="primary" class="site-main">
		
		


<section class="banner">
            <img class="banner__background" src="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>" alt="">
            <video class="banner__video" width="1440" autoplay="autoplay" muted=""
                    loop="infinite">
                    <source src="<?php echo get_theme_file_uri() . '/assets/video/Studio+Koukaki-vidéo+header+sans+son+(1).mp4 '; ?>" type="video/mp4">
            </video>
            <img class="banner__logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="Logo fleurs d'oranger & chats errants">
        </section>

		
		
		
        <section id="#story" class="story">
            <h2>
                 <span class="sectionTitle title-first">L'</span>
                 <span class="sectionTitle title-second">histoire</span>
            </h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
			
			
          <?php get_template_part('template-parts/slider-characters'); ?>

            <article id="place" class="parallax-section">
				
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/big_cloud.png" class="cloud cloud1" alt="Gros Nuage">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/little_cloud.png" class="cloud cloud2" alt="Petit Nuage">

                <div>
                    <h3>
                        <span class="sectionTitle title-first">Le</span>
                        <span class="sectionTitle title-second">lieu</span>
                    </h3>
					
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2>
               <span class="sectionTitle title-first">Studio</span>
               <span class="sectionTitle title-second">KouKaKi</span>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
		
		<?php get_template_part('template-parts/section-nomination'); ?>
		
    </main><!-- #main -->

<?php
get_footer();



