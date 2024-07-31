
    <?php //Create the name of the child template
        /*
            Template Name: Contenido Centrado (No Sidebars)
        */
        get_header();
    ?>

    <main class="container section focus-content center-text">
        <?php 
             get_template_part("template-parts/pagina")
        ?>
    </main>

    <?php 
        get_footer(); // get the footer
    ?>
