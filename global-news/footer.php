<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Global_News
 */

?>

	<footer class="footer">
		<div class="footer__top">
			<div class="footer__contact">
				<div class="footer__top--title">We share common trends, strategies ideas, opinions, short & long stories from the team behind company.</div>
				<div class="footer__input">
					<input type="email" placeholder="Your Email">
				</div>
				<div class="footer__top--sub-title">Get a response tomorrow if you submit by 9pm today. If we received after 9pm will get a reponse the following day.</div>
			</div>

			<div class="footer__image">
				<div class="footer__square-one"></div>
				<div class="footer__square-two"></div>
				<div class="footer__thumbnail">
				<?php $img_url_slider = get_theme_mod('set-footer','#') ?>
					<div class="footer__img"><img src="<?php  echo wp_get_attachment_url($img_url_slider) ?>" alt=""></div>
					<div class="footer__img-title">The best aticles every week</div>
					<div class="footer__img-sub-title">Our insurance plans offers are priced the same everywhere else.</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
