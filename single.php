<?php 
    get_header();
?>

<main class="container section">
    <section class="main-content">
        <?php 
            get_template_part('template-parts/post')
        ?>
    </section>

    <div class="comments focus-content center-text content-2">
        <?php 
            comment_form();
            ?>

            <h3 class="center-text primary-text comments">Comentarios</h3>
            <ul class="comments-list">
                <?php 
                    $comentarios = get_comments(array(
                        'post_id' => $post -> ID,
                        'status' => 'approve',

                    ));
                    wp_list_comments(array(
                        'per_page' => 10,
                        'reverse_top_level' => false,
                    ), $comentarios)
                    
                ?>
            </ul>

            <?php
        ?>
    </div>
</main>

<?php 
    get_footer();
?>