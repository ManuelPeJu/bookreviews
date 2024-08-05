<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>/img/logo.svg" type="image/x-icon">
    <?php 
        wp_head(); // charge a lot of wp content example: scripts and css 
    ?> 
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <nav class="container navbar"> 
            <div class="logo">
                <a href="<?php echo site_url("/"); ?>" class="no-logo">
                    Logotipo
                </a>
            </div>
            <div class="hamburguer-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="72" height="72" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </div>

            <div class="container-menu">
                <?php 
                    $args = array (
                        "theme_location" => "menu-principal", // locate the menu u want to render
                        "container" => "nav", // set the container as a nav tag, default container are a div
                        "container_class" => "main-menu", // set the classname for a css modification
                    );  

                    wp_nav_menu($args); // this function render a menu taking a associative array as menu location
                ?>
            </div>
            <!-- add the dynamic menu -->
           
        </nav>

            <?php 
                if(is_front_page()) {
                    ?>
                        <div class="tagline center-text container">
                            <h1>
                                <?php 
                                    the_field('hero_heading')
                                ?>
                            </h1>
                            <p>
                                <?php 
                                    the_field('hero_texto')
                                ?>
                            </p>
                            <button class="primary-button button" id="hero_button">Descubrir</button>
                        </div>
                    <?php
                }
            ?>
    </header>    
</body>