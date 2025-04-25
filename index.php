<?php get_header(); ?>
<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>
		<article>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt(); ?></p>
			<p><a href="<?php the_permalink(); ?>">Read more</a></p>
		</article>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
