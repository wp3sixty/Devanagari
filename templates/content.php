<article <?php post_class(); ?>>
	<?php if ( get_post_type() === 'post' ) { ?>
		<div class="entry-author">
			<?php get_template_part( 'templates/entry-author' ); ?>
		</div>
	<?php } ?>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"
		                           title="<?php echo get_the_title(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<?php if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
			<div class="post-feature-image"><?php the_post_thumbnail( 'full' ); ?></div>
		</a>
		<?php
	} ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php get_template_part( 'templates/entry-meta' ); ?>
</article>
