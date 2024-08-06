<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // Check if the post type is 'post' or 'bookreviews_books'.
    if ( 'post' === get_post_type() || 'bookreviews_books' === get_post_type() ) :
    ?>
        <section class="container section">
            <header class="entry-header">
                    <?php
                    // Display the post title with a link to the full post.
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;
                    ?>
            </header><!-- .entry-header -->

            <div class="entry-summary">
                <?php
                // Display the post excerpt.
                the_excerpt();
                ?>
            </div><!-- .entry-summary -->

            <footer class="entry-footer">
                <?php
                // Display post meta information such as category and tags for 'post'.
                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                        <?php
                        echo get_the_date();
                        ?>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            </footer><!-- .entry-footer -->

        </section>
        
    <?php
    endif;
    ?>
</article><!-- #post-<?php the_ID(); ?> -->
