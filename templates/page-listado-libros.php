<?php 
/*
    Template Name: Listado Libros
*/
    get_header();

?>

<main class="container section center-text">
    <?php 
        get_sidebar('libros');
    ?>
       
    <?php 
        get_template_part("template-parts/pagina");
    ?>

    <?php 
        bookreviews_lista_libros();
    ?>
</main>

<?php 
    get_footer();
?>