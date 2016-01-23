<header class="banner">
    <div class="container">
        <a class="brand" href="<?= esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
            <?php if( get_theme_mod( 'site_logo' ) ) { ?>
                <img src="<?php echo get_theme_mod( 'site_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <?php } else {
                bloginfo( 'name' );
            } ?>
        </a>
        <nav class="nav-primary">
            <?php
            if( has_nav_menu( 'primary_navigation' ) ) :
                wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'nav' ] );
            endif;
            ?>
        </nav>
        <div class="header-search-wrapper"><?php get_search_form(); ?></div>
    </div>
</header>
