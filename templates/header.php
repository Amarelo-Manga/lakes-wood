<header>
    <nav id="language">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 ml-md-auto"> <?php dynamic_sidebar('language-top'); ?></div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div id="logo" class="">
                <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/logo_lakes_wood.png'; ?>">
                </a>
            </div>
            <div id="menu" class="">
                <nav class="nav-primary">
                    <?php
                        if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                    endif;
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>