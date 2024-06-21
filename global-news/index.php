<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BabyLand
 */

get_header();

?>

<div class="post">

	<div class="post__blog">
		<?php
		if (have_posts()):
			/* Start the Loop */
			while (have_posts()):
				the_post();

				?>

				<a href="<?php echo get_the_permalink() ?>" class="post__item">
					<div class="post__img">
						<?php echo get_the_post_thumbnail() ?>
					</div>

					<div class="post__title"><?php echo get_the_title() ?></div>
					<div class="post__desc"><?php echo get_the_excerpt() ?></div>

					<div class="post__author">
						<div lass="post__name"><?php echo get_the_author() ?></div>
						<div class="post__time"><?php echo get_the_time('D-M') ?></div>
					</div>
				</a>

				<?php

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );
		


			endwhile;

			the_posts_navigation();

		else:

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</div>

	<div class="post__sidebar">

		<?php get_sidebar(); ?>
	</div>
</div><!-- #main -->

<?php
get_footer();
