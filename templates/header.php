<header class="banner">
	<div class="container">
		<?php if ( get_theme_mod( 'site_logo' ) ) { ?>
			<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' );
			?>">
				<img src="<?php echo get_theme_mod( 'site_logo' ); ?>"
				     alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		<?php } else { ?>
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
				<span><?php bloginfo( 'name' ); ?></span>
			</a>
		<?php } ?>
		<nav class="nav-primary">
			<?php
			if ( has_nav_menu( 'primary_navigation' ) ) :
				wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'depth' => 1 ] );
			endif;
			?>
		</nav>
		<div class="header-search-wrapper"><?php get_search_form(); ?></div>
	</div>
</header>
<?php if ( is_home() ) {
	do_action( 'davanagari_homepage_before_header' );
}