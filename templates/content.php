<article <?php post_class(); ?>>
	<div class="entry-author">
		<?php get_template_part( 'templates/entry-author' ); ?>
	</div>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-feature-image"><?php the_post_thumbnail( 'full' ); ?></div>
		<?php
} ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php get_template_part( 'templates/entry-meta' ); ?>
</article>
