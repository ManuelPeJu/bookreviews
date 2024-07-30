<footer class="footer container">
    <hr>

    <div class="footer-content">
        <?php

        $args = array(
            "theme_location" => "menu-principal", // locate the menu u want to render
            "container" => "nav", // set the container as a nav tag, default container are a div
            "container_class" => "main-menu", // set the classname for a css modification
        );

        wp_nav_menu($args); // this function render a menu taking a associative array as menu location

        ?>

        <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo("name") . " " . date("Y"); ?></p>
    </div>
</footer>

<?php
wp_footer();
?>
</body>

</html>