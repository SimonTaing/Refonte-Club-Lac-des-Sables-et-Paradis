<?php get_header(); ?>

<section class="couleurbleue wrapper">
    <section class="contenue">
        <h4><?php the_title(); ?></h4>

    <section class="flex-maps">
        <iframe
                width="600"
                height="450"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDgBO0jZ6nSNzM4izPmyrw9ENq3iXEbWms
    &q=POURVOIRIE+CLUB+LAC+DES+SABLES+ET+PARADIS+(Côte-Nord,+Québec)" allowfullscreen>
        </iframe>

    </section>
        <div class="container">
            <?php the_content(); ?>
        </div>
        </section>
    </section>
</section>

<?php get_footer(); ?>
