<?php /*template name: chalet */?>
<?php get_header(); ?>
    <section class="hero">
        <div class="containertexte">
            <h1>La Pourvoirie Club Lac des Sables et Paradis</h1>

            <a href="<?php echo site_url('information');?>">
                <button>
                    Réserver
                </button>
            </a>
        </div>
    </section>

<?php if(get_field('pw_promo_toggle', 'option') === true) { ?>
    <section class="promotions">
        <div class="proinfo">
            <h4>Promotion!</h4>
            <p><?php echo the_field('pw_promo_txt' , 'option');?></p>
        </div>
    </section>
<?php } ?>

<section class="couleurbleue wrapper">

    <section class="contenu-chalets wrapper">

        <?php $indexquerry2=1;

        query_posts(array(
            'post_type'=>'pW_chalet',
            'order'=>'ASC',
            'post_status'=>'publish',
            'showposts'=>-1
        ));

        while(have_posts()) {
            the_post();
            ?>

            <article>
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_field('pw_image_chalet') ?>" alt="<?php echo the_title(); ?>"/>
                    <div class="tout">
                        <div class="premier">
                            <div>
                                <h1><?php echo the_title(); ?></h1>
                                <p><?php the_field('pw_personnes') ?></p>
                                <p><?php the_field('pw_emplacement') ?></p>
                            </div>
                        </div>
                        <div class="deuxieme">
                            <p><?php the_field('pw_prix') ?></p>
                            <span class="material-icons">navigate_next</span>
                        </div>
                    </div>
                </a>
            </article>
            <?php
            $indexquerry2++;
        }
        wp_reset_query();
        ?>

    </section>

</section>

<?php get_footer();?>