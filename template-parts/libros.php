<?php 
    while(have_posts()) : the_post();
        the_title("<h1 class='center-text primary-text'>", "</h1>");
        if(has_post_thumbnail()) {
            the_post_thumbnail("full", array("class" => "featured-image"));
        }


?>

        <?php
        the_content();
    endwhile;