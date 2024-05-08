<?php
/**
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        // Commenting out the_content() to remove the Content Editor
        // the_content();

        ?>

        <section class="home-intro">
            <?php the_post_thumbnail('large'); ?>
            <?php
            if (function_exists('get_field')) {
                if (get_field('top_section')) {
                    the_field('top_section');
                }
            }
            ?>
        </section>

        <section class="home-work"></section>

        <section class="home-work"></section>

        <section class="home-left">
            <?php
            if (function_exists('get_field')) {

                if (get_field('left_section_heading')) {
                    echo "<h2>";
                    the_field('left_section_heading');
                    echo "</h2>";
                }
                if (get_field('left_section_content')) {

                    echo "<p>";
                    the_field('left_section_content');
                    echo "</p>";
                }
            }
            ?>
        </section>

        <section class="home-right">
            <?php
            if (function_exists('get_field')) {

                if (get_field('right_section_heading')) {
                    echo "<h2>";
                    the_field('right_section_heading');
                    echo "</h2>";
                }
                if (get_field('right_section_content')) {

                    echo "<p>";
                    the_field('right_section_content');
                    echo "</p>";
                }
            }
            ?>
        </section>

        <section class="home-slider"></section>

        <section class="home-blog">
            <h2><?php esc_html_e('Latest Blog Posts', 'fwd'); ?></h2>
            <?php
            $arguments = array(
                'post_type'         => 'post',
                'posts_per_page'     => 4
            );
            $blog_query = new WP_Query($arguments);
            if ($blog_query->have_posts()) {
                while ($blog_query->have_posts()) {
                    $blog_query->the_post();
            ?>
                    <article>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('latest-blog-post') ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo get_the_date(); ?></p>
                        </a>
                    </article>
            <?php
                }
                wp_reset_postdata();
            }
            ?>
        </section>

    <?php
    endwhile; // End of the loop.
    ?>

</main><!-- #primary -->

<?php
get_sidebar();
get_footer();