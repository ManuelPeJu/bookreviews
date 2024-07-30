<?php
    get_header(); // get the header
?>

<main class="section container">
    <?php 
        $author = get_queried_object(); //get the object that WP are consulting to the DB
    ?>
    <h2 class="primary-text text-center">Autor: <?php echo $author->data->display_name; ?></h2>
    <p class="text-center">
        <?php 
            echo get_the_author_meta("description", $author->data->ID);
        ?>
    </p>
    <ul class="grid-list">
        <?php
            while (have_posts()) {
                the_post();
                get_template_part("template-parts/blog");
            }
        ?>
    </ul>
</main>

<?php
    get_footer(); // get the footer
?>