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
<section class="contenue ">

    <section class="photo">

        <img src="<?php the_field('pw_image_chalet')?>" height="343" width="400"/></section>

    <h2><?php echo the_title();?></h2>
<section class="contenuinfo">


<section>
    <article class="contenuepara">

        <p>
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();?>
                    <?php the_content()?>
                    <?php
                }
            }
            ?>
        </p>


    </article>





</section>




</section>

</section>



<?php get_footer(); ?>