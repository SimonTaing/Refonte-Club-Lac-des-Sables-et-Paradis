<?php get_header(); ?>

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