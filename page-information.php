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
        <h4>Informations</h4>

        <div class="container">
            <form action="action_page.php">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre nom..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Nom de falille..">

                <label for="country">Pays</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>
        </section>
    </section>

</section>




<?php get_footer(); ?>
