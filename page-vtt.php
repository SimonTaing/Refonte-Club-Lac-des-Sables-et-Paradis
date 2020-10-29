<?php get_header(); ?>
<section class="hero">
    <div class="containertexte">
        <h1>La Pourvoirie Club Lac des Sables et Paradis</h1>

        <button>
            Réserver
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
