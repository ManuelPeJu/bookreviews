<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // Check if the post type is 'post' or 'bookreviews_books'.
    if ( 'post' === get_post_type() || 'bookreviews_books' === get_post_type() ) :
    ?>
        <section class="container section">
            <div class="grid-search">
                <div class="text-content">
                        <?php
                        // Display the post title with a link to the full post.
                        if ( is_singular() ) :
                            the_title( '<h1 class="primary-text center text">', '</h1>' );
                        else :
                            the_title( '<h2 class="primary-text center text"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;
                        ?>

                        <?php
                        // Display the post excerpt.
                        the_excerpt();
                        ?>
                </div><!-- .entry-header -->

                <div class="image-content">
                    <?php 
                        the_post_thumbnail("full", array("class" => "search-image"));
                    ?>
                </div>
            </div>

            <div class="button-container">
                <a href="<?php echo esc_url(get_permalink()) ?>" class="button primary-button">Ver más</a>
            </div>

        </section>
        
    <?php
    endif;
    ?>
</article><!-- #post-<?php the_ID(); ?> -->
