<?php 
    get_header();
?>

<main class="container section">
    <?php 
        $categoria = get_queried_object();
    ?>
    <h2 class="primary-text center-text">Categoría: <?php echo $categoria->name; ?></h2>
    <ul class="grid-list">
        <?php 
            while(have_posts()) {
                the_post();
                get_template_part('tempalte.parts/blog');
            }
        ?>
    </ul>
</main>

<?php 
    get_footer();
?>