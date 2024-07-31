<?php 

    function bookreviews_lista_libros($cantidad = -1) {

        ?>
            <ul class="grid-list">
                <?php 
                $args = array(
                    'post_type' => 'bookreviews_books',
                    'posts_per_page' => $cantidad, // Corrección del parámetro
                );

                $libros = new WP_Query($args);

                if ($libros->have_posts()) {
                    while($libros->have_posts()) {
                        $libros->the_post();
                        ?>
                        <li class="card">
                            <?php 
                            if (has_post_thumbnail()) {
                                the_post_thumbnail(); 
                            }
                            ?>
                            <div class="content">
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p> <!-- Usar the_excerpt() en vez de the_content() para resúmenes -->
                                </a>
                            </div>
                        </li>
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    ?>
                    <li><?php _e('No books found', 'text-domain'); ?></li>
                    <?php
                }
                ?>
            </ul>

        <?php
    } 
?>