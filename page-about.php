<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>


<div class="contact-address">
	<?php
	$address = get_field('physical');
	if ($address) {
		echo esc_html($address);
	}
	?>
</div>

<div class="contact-email">
	<?php
	$email = get_field('email');
	if ($email) {
		echo '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>';
	}
	?>
</div>
</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
