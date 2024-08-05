<?php 
/*
    Template Name: Listado Libros
*/
    get_header();

?>

<main class="container section center-text">
    <?php 
        if(is_page('libros')) {
            ?>   
                <?php 
                    get_sidebar('libros');
                ?>
            <?php
        }
    ?>

    <?php 
        get_template_part('template-part/pagina');
    ?>

    <?php 
        bookreviews_lista_libros();
    ?>
</main>

<?php 
    get_footer();
?>