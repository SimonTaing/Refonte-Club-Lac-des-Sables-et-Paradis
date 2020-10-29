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
    <section class="contenue">
<h4>Gallery</h4>

        <div class="glide wrapper">
            <div class="glide__track" data-glide-el="track">
                <?php
        $rows = get_field('carrousel');
            if( $rows ) {    echo ' <ul class="glide__slides">';


                foreach( $rows as $row ) {
                $image = $row['image'];


                echo'<li class="glide__slide">


                             <article>';

             echo wp_get_attachment_image( $image, 'full' );echo '
 
             </article>
 </li>
 
   </ul>
 
                ';}}



          

                ?>



  </div>



            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i>
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
        <section class="carrouselpara">


            <p>Située à 20 minutes de Tadoussac à Bergeronnes, notre pourvoirie est facile d’accès. À 4 km en forêt seulement, 100 km2 de territoire. 52 petits lacs et 2 grands lacs. Sentiers de VTT, plage et parc aquatique. Nous acceptons les embarcations, les moteurs et les VTT. Nos lacs abritent la truite mouchetée et l’omble chevalier. Chasse à l’ours et à l’orignal. Plan européen, américain, VIP et vacances familles.

                Services et équipements
                Accès Internet au public
                BBQ
                Congélateur
                Embarcation
                Guide de pêche
                Moteur à essence
                Poêle à bois/foyer
                Rampe de mise à l’eau
                Recharge de batterie(s)
                Service d’éviscération des prises
                Service d’éviscération du gibier
                Site d’éviscération
                Système téléphonique
                Transport aux sites de chasse
                Supplément ($)
                Animaux de compagnie
                Entreposage du gibier
                Glace
                Transport aux sites de pêche
                Vente d’appâts
                Vente d’articles de pêche
                Vente d’essence
                Veste(s) de flottaison</p>


        </section>
    </section>

</section>



<?php get_footer(); ?>
