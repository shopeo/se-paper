<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
	<article id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
		<p><span><?php the_author(); ?></span><span><?php the_date(); ?></span></p>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>
<?php get_footer(); ?>
