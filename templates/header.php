<header class="banner">
    <div class="container">
        <a class="brand" href="<?= esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
            <img src="<?php echo get_theme_mod( 'site_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
        <nav class="nav-primary">
            <?php
            if( has_nav_menu( 'primary_navigation' ) ) :
                wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'nav' ] );
            endif;
            ?>
        </nav>
    </div>
</header>
