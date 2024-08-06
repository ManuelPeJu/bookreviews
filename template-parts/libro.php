<?php 
    while(have_posts()) : the_post();
    the_title("<h1 class='center-text primary-text'>", "</h1>");
    if(has_post_thumbnail()) {
        the_post_thumbnail("full", array("class" => "featured-image"));
    } else {
        echo '<h3 class="center-text">Hubo un problema a la hora de obtener la imágen</h3>';
    };
    
    
?>

<?php

    the_content();
    
endwhile;
?>