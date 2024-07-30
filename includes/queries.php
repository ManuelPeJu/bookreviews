<?php 

    function bookreviews_lista_libros($cantidad = -1) {

        ?>
        <ul>
            <?php 
            $args = array(
                'post_type' => 'bookreviews_libros',
                'post_per_page' => $cantidad,
            );

            $libros = new WP_Query($args);

            while($libros->have_posts()) {
                $libros->the_post();
                ?>
                    <li class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="content">
                            <a href="<?php the_permalink(); ?>">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <p>
                                    <?php 
                                        the_content();
                                    ?>
                                </p>
                            </a>
                        </div>
                    </li>
                <?php
            }
            wp_reset_postdata();
            ?>
            <h1>esto sirve ?</h1>
        </ul>

        <?php
    } 
?>