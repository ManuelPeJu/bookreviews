<?php
    get_header();   
?>

<h1>Hola desde el Index.php</h1> <!-- in case the main failed to load for some reason-->
    <main>
        <?php
        while (have_posts()) : the_post(); // start the loop and contact the DB of wp

            the_title(); // set the name of the page/post
            the_content(); // set the content of the page/post

        endwhile; // end the loop
        ?>
    </main>

<?php 
    get_footer();
?>