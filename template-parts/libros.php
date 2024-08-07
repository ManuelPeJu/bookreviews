<?php 
    $no_image = get_template_directory_uri() . '/img/no_image_available.jpg';
?>

<?php 
    while(have_posts()) : the_post();
    the_title("<h1 class='center-text primary-text'>", "</h1>");
    if(has_post_thumbnail()) {
        the_post_thumbnail("full", array("class" => "featured-image"));
    } else {
        ?>
            <img src="<?php echo esc_url($no_image) ?>" alt="no hay imagen disponible" class="no-image">
        <?php
    };
    
    
?>

    

<?php
    the_content();

    // the_field('libro_descripcion');
    
endwhile;
?>