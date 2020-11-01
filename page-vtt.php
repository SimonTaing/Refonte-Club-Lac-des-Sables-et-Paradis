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
    <section class="contenue contenu-accueil wrapper">

        <h2><?php the_title() ?></h2>

        <section class="contenuinfo">
            <article class="texte">
                <?php the_content() ?>
            </article>
            <section class="images">
                <img src="<?php the_field('img1') ?>" height="300px"/>
                <img src="<?php the_field('img2') ?>" height="300px"/>
            </section>
        </section>


        <section>
            <article class="para">

                <article class="imagecontenue">
                    <img src="<?php the_field('img1') ?>" height="300px"/>
                </article>
                <article class="imagecontenue">
                    <img src="<?php the_field('img2') ?>" height="300px"/>
                </article>

                <?php the_field('description') ?>
            </article>
        </section>

    </section>
</section>

<?php get_footer(); ?>
