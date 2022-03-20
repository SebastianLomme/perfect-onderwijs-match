<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

    <div class="hero-section">
        <div class="overlay"></div>
        <div class="hero-section__content container">
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </div> <!-- hero-section__content -->
    </div> <!-- hero-section -->

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <div class="row archive_section">

            <!-- Do the left sidebar check -->
            <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

            <main class="site-main" id="main">

                <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single_jobs' );
					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

            </main><!-- #main -->

            <!-- Do the right sidebar check -->
            <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();