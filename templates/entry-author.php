<div class="row">
	<div class="col-xs-12 author-detail">
		<div>
			<?php echo get_avatar( get_the_author_meta( 'email' ), 42 ); ?>
		</div>
		<div>
			<p class="byline author vcard">
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
				   rel="author"
				   class="fn"><?php echo esc_html( get_the_author() ); ?></a>
			</p>
			<time class="updated small-button"
			      datetime="<?php get_post_time( 'c', true ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'your-text-domain' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
		</div>

	</div>

</div>
