<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Global_News
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post();

		?>

		<div class="singles">
			<div class="single__right">
				<div class="single__name">
					<div class="single__title"><?php echo get_the_title() ?></div>
					<div class="single__author">

						<div class="single__avt"><?php echo get_the_author() ?></div>
						<div class="single__date"><?php echo get_the_time('D/M') ?></div>
					</div>
				</div>

				<div class="single__img"><?php echo get_the_post_thumbnail() ?></div>
			</div>

			<div class="single__main">
				<div class="single__content"><?php echo get_the_content() ?></div>
			</div>
			<div class="single__left">
				<?php get_sidebar() ?>
			</div>
		</div>


		<?php


		// get_template_part( 'template-parts/content', get_post_type() );
	
		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'global-news') . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'global-news') . '</span> <span class="nav-title">%title</span>',
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()):
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
