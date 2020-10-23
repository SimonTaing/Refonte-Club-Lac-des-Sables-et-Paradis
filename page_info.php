<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <title>Club Lac des Sables et Paradis</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <link href="css/main.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.css">

</head>
<body>
<header>
    <div class="logo">
        <a href="front-page.html"><img src="images/logo.png"/></a>

    </div>

    <div id="hamburger">
        <div id="hamburger-content">
            <nav>
                <ul class="main-nav">
                    <li><a class="link" href="front-page.html">Accueil</a></li>
                    <li><a class="link" href="single.html">Activités</a></li>
                    <li><a class="link" href="template_contenue.html">Informations</a></li>
                    <li><a class="link" href="index.html">Galerie</a></li>
                    <li><a class="link" href="#">Nous joindre</a></li>
                    <li><a class="link" href="#">EN</a></li>
                </ul>
            </nav>
        </div>

        <button id="hamburger-button"><i class="fas fa-bars"></i></button>

        <div id="hamburger-sidebar">
            <div id="hamburger-sidebar-header"></div>
            <div id="hamburger-sidebar-body"></div>
        </div>

        <div id="hamburger-overlay"></div>
    </div>
</header>
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



<footer>
    <div class="wrapper">
        <div class="footer-flex">
            <a href="front-page.html"><img class="logo-footer" src="images/logo.png" alt="Logo"></a>
            <div class="footer-contenu">
                <div class="footer-text">
                    <p>418 232-2020 (Louise ou Hélène) ou 418 233-3375 (15 mai à la fermeture)</p>
                    <p>info@clublacdessables.com</p>
                </div>
                <div class="footer-media">
                    <a href="https://www.facebook.com"><img src="images/facebook.png" alt="Facebook"></a>
                    <a href="https://www.youtube.com"><img src="images/yotube.png" alt="YouTube"></a>
                </div>
            </div>

        </div>


        <p>©2020</p>
    </div>


</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

<script src="js/script.js"></script>
</html>