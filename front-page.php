<?php get_header(); ?>
<section class="hero">
    <div class="containertexte">
        <h1>La Pourvoirie Club Lac des Sables et Paradis</h1>

        <button>
            <a href="<?php echo site_url('page-informaiton');?>">
                Réserver
            </a>
        </button>
    </div>
</section>



<section class="promotions">
    <div class="proinfo">
        <h4>Promotion!</h4>
        <p>Profitez de 30% de rabais durant la fin de semaine du 5 au 7 septembre!</p>
    </div>
</section>

<section class="couleurbleue wrapper">
    <section class="contenue contenu-accueil wrapper">
        <div class="row-accueil">

            <div class="row-accueil-text1">
                <h3>L’OMBLE CHEVALIER À 3 HEURES DE QUÉBEC EN POURVOIRIE!</h3>
                <p>Cette pourvoirie à droits exclusifs est située au début de la Cote Nord à Bergeronnes à peine 15 min de Tadoussac. Par la route 138, seulement 4 km à faire en forêt. Avec 18 chalets de 2 à 16 personnes. Territoire de 100 km carré avec 52 lacs de mouchetées dont le Lac des Sables et le Lac Paradis ont également de l’ombles chevaliers!</p>
            </div>
            <img class="accueil-img-1" src="<?php echo get_template_directory_uri(); ?>/images/accueil-1.png" alt="">
        </div>

        <div class="row-accueil invert-flex">
            <img class="accueil-img-2" src="<?php echo get_template_directory_uri(); ?>/images/accueil-2.png" alt="">
            <div class="row-accueil-text2">
                <p>Vous savez , il faut aller dans le Grand Nord pour en attraper. Le record à battre est de 10 livres ! Les ombles chevaliers et les éperlans dont elles se nourrit se sont adaptés aux eaux douces dans les 2 grands lacs. Ce poisson trophée est fort apprécié pour sa saveur mais aussi pour le combat qu’il nous livre. Osez venir découvrir ce merveilleux coin de pays…
                    <br>
                    <a href="<?php echo get_template_directory_uri(); ?>/images/brochure.pdf">En savoir plus...</a></p>
            </div>
        </div>
    <div class="accueil-extra">
        <p class="txt-apporter">VOUS POUVEZ APPORTER: Bateau avec moteur, VTT, motorisé, roulotte</p>

        <h4>Venez nous voir en grand nombre à la pourvoirie!</h4>

        <button>
            Réserver
        </button>
    </div>


    </section>
</section>

<section class="partenaires wrapper">
    <div class="partenaires-flex">
        <h4>
            Nos partenaires
        </h4>
        <div class="partenaires-img">
            <?php
            query_posts(array(
                'post_type' => 'pW_commanditaire',
                'order' => 'ASC',
                'orderby' => 'name',
                'post_status' => 'publish',
            ));
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <img src="<?php the_field('logo') ?>" alt="">
                <?php endwhile;
                wp_reset_query();
            else:

            endif;
            ?>
        </div>
    </div>
</section>

<section class="newsletter wrapper">
    <div class="flex-newsletter">
        <h4>Voulez-vous être prévenus de nos promotions?</h4>
        <p>Abonnez-vous à notre infolettre!</p>
        <form>
            <input type="email" id="email" name="email" placeholder="Adresse courriel">
            <input type="submit" value="S'abonner">
        </form>
    </div>
</section>
<?php get_footer(); ?>