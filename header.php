<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="container">
            <div class="logo">
                <a href="<?php echo site_url(); ?>" class="no-logo">
                    Logotipo
                </a>
            </div>
            <div class="contaier-menu">
                <?php 
                    $args = array (
                        "theme_location" => "menu-principal", // locate the menu u want to render
                        "container" => "nav", // set the container as a nav tag, default container are a div
                        "container_class" => "main-menu", // set the classname for a css modification
                    );  

                    wp_nav_menu($args); // this function render a menu taking a associative array as menu location
                ?>
            </div>
        </nav>
    </header>    
</body>
