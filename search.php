<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="container section">

    <?php if ( have_posts() ) : ?>
        <?php 
            get_sidebar('sidebar-1')    ;
        ?>

        <header class="center-text">
            <h1>
                <?php
                printf( __( 'Resultados para: %s', 'bookreviews' ),'<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
        </header><!-- .page-header -->

        <?php
        // Start the Loop.
        while ( have_posts() ) :
            the_post();

            // Include the template for the content.
            get_template_part( 'template-parts/content', 'search' );

        endwhile;

        // Display navigation to next/previous pages when applicable.
        the_posts_navigation();

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();
?>
