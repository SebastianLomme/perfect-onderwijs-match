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

<div class="hero-section hero-section__small">
    <div class="overlay"></div>
    <div class="hero-section__content container">
        <?php the_title( '<h1 class="page-title text-light">', '</h1>' ); ?>
    </div> <!-- hero-section__content -->
</div> <!-- hero-section -->

<div class="wrapper" id="single-wrapper">

    <div class="container" id="content" tabindex="-1">

        <div class="row archive_section">

            <main class="site-main" id="main">

                <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single_jobs' );
				}
				?>

            </main><!-- #main -->


        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();