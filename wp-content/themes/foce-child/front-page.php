<?php

get_header();
?>

    <main id="primary" class="site-main vignets">
        <section class="banner video__transition">

                    <video class="video video__transition" preload="auto" autoplay loop>

                    <source src="https://course.oc-static.com/projects/D%C3%A9veloppeur+Web/DWP+IW_P9+Studio+d'animation/Studio+Koukaki-vide%CC%81o+header+sans+son+(1).mp4" type="video/mp4">
                    
                    </video> 

                    <img class="parallax titre__anime animate-me" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="#story" class="story rotationElement rotationLentAfter">
            <div class='bg bgstory'>
                <h2 class="titreInvisible titreH">L'histoire</h2>
            </div>
            <article class="story__article rotationElement rotationLentAfter">
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
            <article id="characters">
                <div class="main-character">
                    <div class='bg bgcharacters'>
                        <h3 class="titreInvisible titreP">Les personnages</h3>
                    </div>


                    <div id="slider" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                        <?php                    
                        while ( $characters_query->have_posts() ) {
                            $characters_query->the_post();
                            echo ' <div class="swiper-slide">';
                            echo get_the_post_thumbnail( get_the_ID(), 'full' );
                            the_title();
                            echo '</div>';       
                        } 
                        ?>
                        </div>
                    </div>
  
                </div>
                
            </article>
            <article id="place">
                <div>
                <div class='bg bglieu'>
                    <h3 id="lieu" class="titreInvisible titreL">Le Lieu</h3>
                </div>
                    <div class="placeafter"></div>
                    <div class="placebefore"></div>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio">
        <div class="beforestudio rotationElement rotationLentAfter">
            <div class='bg bgstudio rotationElement rotationLentAfter'>
                <h2 class="titreInvisible titreK">Studio Koukaki</h2>
            </div>
        </div>
            <div class='studiotext'>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        
        </section>

        <section>
            <article class="oscar">
                <div class="before rotationElement rotationLent"></div>
                <div class="bg textoscar"><p>Fleurs d’oranger & chats errants </br>
                 est nominé aux Oscars Short</br> Film Animated de 2022 !</p></div>
                <div class="imgoscar"></div>
                <div class="after rotationElement rotationLent"></div>
            </article>
        </section>


    </main><!-- #main -->

<?php
get_footer();

//<?php /* Template Name: Contact */ 