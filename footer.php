
<footer>
    <div class="wrapper">
        <div class="footer-flex">


            <a href="<?php echo esc_url(home_url('/')); ?>"
               title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"
                    />
            </a>

            </a>
            <div class="footer-contenu">
                <div class="footer-text">
                    <p>418 232-2020 (Louise ou Hélène) ou 418 233-3375 (15 mai à la fermeture)</p>
                    <p>info@clublacdessables.com</p>
                </div>
                <div class="footer-media">
                    <a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook"></a>
                    <a href="https://www.youtube.com"><img src="<?php echo get_template_directory_uri(); ?>/images/yotube.png" alt="YouTube"></a>
                </div>
            </div>

        </div>


        <p>©2020</p>

        <script src="<?php bloginfo('template_url'); ?>/script/script.js"></script>
    </div>


</footer>


<?php wp_footer(); ?>
</body>
</html>
