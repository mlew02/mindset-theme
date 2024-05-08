<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-contact">

	</div><!-- .footer-contact -->
	<div class="footer-menus">
		<nav id="footer-navigation" class="footer-navigation">
			<?php wp_nav_menu(array('theme_location' => 'footer-left')); ?>
		</nav>
		<nav id="footer-navigation" class="footer-navigation">
			<?php wp_nav_menu(array('theme_location' => 'footer-right')); ?>
		</nav>

	</div><!-- .footer-menus -->
	<?php
	if (!is_page('contact') && function_exists('get_field')) {
		echo '<h3>Physical Address</h3>';
		$physical_address = get_field('physical',6);
		if ($physical_address) {
			the_field('physical',6);
		}

		echo '<h3>Email Address</h3>';
		$email_address = get_field('email',6);
		if ($email_address) {
			the_field('email',6);
		}
	}
	?>
	<div class="site-info">
		<?php esc_html_e(''); ?><a
			href="<?php echo esc_url(__('http://localhost/mindset/privacy-policy-2/', 'fwd')); ?>"><?php esc_html_e('Privacy Policay', 'fwd'); ?></a>
		<br>
		<?php esc_html_e('Created by ', 'fwd'); ?><a
			href="<?php echo esc_url(__('https://wp.bcitwebdeveloper.ca/', 'fwd')); ?>"><?php esc_html_e('Matthew Lew', 'fwd'); ?></a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>