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

<main class="container center-text" id="main_id">
    <h2 class="center-text primary-text">Registro de Libros</h2>
        <?php 
            bookreviews_lista_libros(4); 
        ?>

    <div class="button-container">
        <a href="<?php echo esc_url(get_permalink(21))?>" class="button primary-button">
            Ver todos los libros
        </a>
    </div>
</main>

<section class="container section">
    <h2 class="center-text primary-text">Nuestros Blog </h2>
    <p class="center-text">Reseñas de nuestros expertos</p>
        <ul class="grid-list">
            <?php 
                $args = array (
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                );

                $blog = new WP_query($args);
                while($blog->have_posts()) {
                    $blog -> the_post();

                    get_template_part("template-parts/blog");
                }
                wp_reset_postdata();
            ?>
        </ul>
        <div class="button-container">
            <a href="<?php echo esc_url(get_permalink(53))?>" class="button primary-button">
                Ver todas las reseñas
            </a>
        </div>

</section>

<?php 
    get_footer();
?>