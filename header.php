
<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>
<body<?php body_class(); ?>>
<header>


    <div class="logo">

        <a href="<?php echo esc_url(home_url('/')); ?>"
           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"
                 />
        </a>

    </div>
    <div id="hamburger">
        <div id="hamburger-content">
            <nav>
                <ul class="main-nav">
                    <li><?php wp_nav_menu(array(
                                'theme_location' => 'menu_principal',
                                'container' => 'nav'
                            )
                        ); ?></li>
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

<?php
