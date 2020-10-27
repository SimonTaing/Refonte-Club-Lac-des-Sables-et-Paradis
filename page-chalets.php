<?php /*template name: Chalets */?>
<?php get_header(); ?>

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
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>"/>
                    <div class="tout">
                        <div class="premier">
                            <div>
                                <h1><?php echo the_title(); ?></h1>
                                <p>10 personnes</p>
                                <p>Éloigné du Lac-des-Sables</p>
                            </div>
                        </div>
                        <div class="deuxieme">
                            <p>200$/nuit</p>
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