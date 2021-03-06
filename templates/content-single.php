<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<?php if ( get_post_type() === 'post' ) { ?>
			<div class="entry-author">
				<?php get_template_part( 'templates/entry-author' ); ?>
			</div>
		<?php } ?>
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post-feature-image"><?php the_post_thumbnail( 'full' ); ?></div>
			<?php
		} ?>
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>
			<?php wp_link_pages( [
				                     'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'devanagari' ),
				                     'after'  => '</p></nav>',
			                     ] ); ?>
		</footer>
		<div class="tag-container">
			<?php the_tags( '', '' ); ?>
		</div>
		<?php comments_template( '/templates/comments.php' ); ?>
	</article>
<?php endwhile; ?>
