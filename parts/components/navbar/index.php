<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php the_custom_logo(); ?><?php _e('Navbar w/ text', '_themename') ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="<?php _e('Toggle navigation', '_themename') ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <?php wp_nav_menu([
                'theme_location'  => 'header-menu',
                'container'       => '',
                'menu_class'      => 'navbar-nav me-auto',
            ]); ?>
            <span class="navbar-text">
                <?php _e('Navbar text with an inline element', '_themename') ?>
            </span>
        </div>
    </div>
</nav>