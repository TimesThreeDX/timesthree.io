<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

			</div>

		</div>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>