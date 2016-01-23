<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
	'lib/assets.php',    // Scripts and stylesheets
	'lib/extras.php',    // Custom functions
	'lib/setup.php',     // Theme setup
	'lib/titles.php',    // Page titles
	'lib/wrapper.php',   // Theme wrapper class
	'lib/customizer.php', // Theme customizer
];

foreach ( $sage_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'devanagari' ), $file ), E_USER_ERROR );
	}

	require_once $filepath;
}
unset( $file, $filepath );

// POPULAR POST WIDGET
class show_popular extends WP_Widget {

	function show_popular() {
		$widget_ops = array( 'classname' => 'show_popular', 'description' => __( 'Show your popular posts.' ) );
		$this->WP_Widget( 'show_popular', __( 'Popular Posts' ), $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );

		// $options = get_option('custom_recent');
		$title      = $instance['title'];
		$postscount = $instance['posts'];

		$myposts = get_posts( array( 'orderby' => 'comment_count', 'numberposts' => $postscount ) );

		echo $before_widget . $before_title . $title . $after_title;

		// SHOW the posts
		?><ul><?php
foreach ( $myposts as $k => $post ) {
	setup_postdata( $post );

	?>
	<li>
		<button class="button button--circle"><span class="list-index"><?php echo ++$k; ?></span></button>
			<a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
			<a href="<?php echo get_author_posts_url( get_the_ID() ); ?>" class="author-link"><?php echo get_the_author(); ?></a>

			</li>
			<?php
}
		?></ul><?php
		echo $after_widget;
	}

	function update( $newInstance, $oldInstance ) {
		$instance          = $oldInstance;
		$instance['title'] = strip_tags( $newInstance['title'] );
		$instance['posts'] = $newInstance['posts'];

		return $instance;
	}

	function form( $instance ) {
		echo '<p style="text-align:right;"><label  for="' . $this->get_field_id( 'title' ) . '">' . __( 'Title:' ) . '  <input style="width: 200px;" id="' . $this->get_field_id( 'title' ) . '"  name="' . $this->get_field_name( 'title' ) . '" type="text"  value="' . $instance['title'] . '" /></label></p>';

		echo '<p style="text-align:right;"><label  for="' . $this->get_field_id( 'posts' ) . '">' . __( 'Number of Posts:', 'widgets' ) . ' <input style="width: 50px;"  id="' . $this->get_field_id( 'posts' ) . '"  name="' . $this->get_field_name( 'posts' ) . '" type="text"  value="' . $instance['posts'] . '" /></label></p>';

		echo '<input type="hidden" id="custom_recent" name="custom_recent" value="1" />';
	}
}

add_action( 'widgets_init', create_function( '', 'return register_widget("show_popular");' ) );
