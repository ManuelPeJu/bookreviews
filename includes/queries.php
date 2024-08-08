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

                
                    while($libros->have_posts()) {
                        $libros->the_post();
                        $libro_autor = get_field('libro_autor');
                        $libro_fecha = get_field('libro_fecha');
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
                                    <p>Autor: <?php _e($libro_autor); ?></p>
                                    <p>Fecha Publicación: <?php $libro_fecha ?> </p>
                                    
                                </a>
                            </div>
                        </li>
                        <?php
                    }
                    wp_reset_postdata();
                ?>
            </ul>

        <?php
    } 
?>