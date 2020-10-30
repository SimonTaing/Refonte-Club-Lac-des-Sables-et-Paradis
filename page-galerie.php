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



<section class="promotions">
    <div class="proinfo">
        <h4>Promotion!</h4>
        <p>Profitez de 30% de rabais durant la fin de semaine du 5 au 7 septembre!</p>
    </div>
</section>


<section class="couleurbleue wrapper">
    <section class="contenue">
    <h4> <?php the_title() ?> </h4>

        <div class="glide wrapper">
            <div class="glide__track" data-glide-el="track">
                <?php
        $rows = get_field('carrousel');
            if( $rows ) {   ?>
                <ul class="glide__slides">';
                <?php
                    foreach( $rows as $row ) {
                    $image = $row['image']; ?>
                    <li class="glide__slide">
                        <article>
                             <img src="<?php echo $image?>" width="600" height="450"/>
                        </article>
                    </li>
                    <?php } ?>
                </ul>
            <?php } ?>
         </div>

            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i>
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
        <section class="carrouselpara">
            <?php the_content() ?>
        </section>
    </section>

</section>



<?php get_footer(); ?>
