<?php 
    get_header();
?>

<section class="welcome section container center-text">
    <h2 class="primary-text">
        <?php the_field("encabezado_bienvenida");?>
    </h2>
    <p>
        <?php the_field("texto_bienvenida");?>
    </p>
</section>

<main class="container center-text">
    <h2 class="center-text primary-text">Registro de Libros</h2>
        <?php 
            bookreviews_lista_libros(4); 
        ?>

    <div class="button-container">
        <a href="<?php echo esc_url(get_permalink(21))?>" class="button primary-button">
            Ver todas los libros
        </a>
    </div>
</main>

<?php 
    get_footer();
?>