<?php 
    while (have_posts()) : the_post(); // start the loop and contact the DB of wp
    the_title("<h1 class='text-center primary-text'>", "</h1>"); // set the name of the page/post
    if (has_post_thumbnail()) {
        // we use this if to check if we have a featured image, if we have it we publish the image, if not we don't use this code saving execution time
        the_post_thumbnail("full", array("class" => "featured-image"));
        // set the featured image. As 1st param, u can set the size of the picture.
        // As 2nd param with a associative array, u can set a class to modify with ur css
    };
    ?>
        <div class="info-meta">
            <p class="meta">
                <span>Por: </span>
                <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")) ?>">
                    <?php echo get_the_author_meta("display_name")?>
                </a>
            </p>

            <div class="categories">
                <p class="meta">
                    <span>Categoría: </span>
                </p>
                    <?php 
                        the_category();
                    ?>
            </div>
            
            <p class="meta">
                <span>Fecha: </span>
                <?php 
                    the_time(get_option("date_format"));
                ?>
            </p>
        </div>
    <?php
    the_content();
    endwhile;