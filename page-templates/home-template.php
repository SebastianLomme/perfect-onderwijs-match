<?php
/**
 * Template Name: Home template Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


get_header();
$container = get_theme_mod( 'understrap_container_type' );



?>


<div class="hero-section">
    <div class="overlay"></div>
    <div class="hero-section__content container">
        <h1 class="display-1 text-light">Vind de Perfecte <span class="text-secondary">match!</span></h1>
        <a href="<?php echo get_site_url() . '/contact'; ?>" class="btn btn-secondary call-btn"><img class="mx-2"
                src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/telefoon.svg)" alt="" width="15px"
                height="15px">Bel me terug</a>
        <a href="<?php echo get_site_url() . '/vacatures'; ?>" class="btn btn-secondary call-btn">Alle vacatures</a>

    </div> <!-- hero-section__content -->
</div> <!-- hero-section -->


<div class="wrapper" id="home-page-wrapper">

    <!-- <div class="<?php echo esc_attr( $container ); ?>" id="content"> -->
    <div class="content-area" id="primary">

        <main class="site-main" id="main" role="main">
            <div class="info-section container">
                <div class="row justify-content-between">
                    <div class="info-section__body  col-md-6 order-md-1">
                        <div class="p-3">
                            <h3 class="title"><?php echo get_field("section_one_title"); ?></h3>
                            <?php echo get_field("section_one_content"); ?>
                        </div>

                        <div class="p-3">
                            <h3 class="title"><?php echo get_field("section_two_title"); ?></h3>
                            <?php echo get_field("section_two_content"); ?>
                        </div>


                    </div> <!-- /info-section__body -->
                    <div class=" col-md-6 order-md-0 d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/wie-ben-ik.jpg" alt="">
                    </div>
                </div> <!-- /row -->



            </div> <!-- info-section container -->

            <div class="jobs-list-section container">
                <div class="row">
                    <?php get_template_part('loop-templates/content-add_job_listing_type_front_page'); ?>

                </div>
                <div class="row justify-content-center">
                    <a href="<?php echo get_post_type_archive_link("add_job_listing_type"); ?>"
                        class="btn btn-secondary">Alle
                        vacatures</a>
                </div>
            </div>



            <?php get_template_part('global-templates/home-page-content') ?>

            <div class="contact-us-section container">
                <div class="contact-info-card">
                    <!-- <div class="contact-info-card-content"> -->
                    <h3>Neem contact op:</h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/contact-ons.webp" alt="">
                    <div>
                        <p>Jennifer van der Stelt- Jacobs<br>
                            Eigenaresse Perfect Onderwijs Match (POM)</p>
                    </div>
                    <div>
                        <p><a href="tel:06-50749210">06-50749210</a><br>
                            <a href="mailto:jennifer@perfectonderwijsmatch.nl">Jennifer@perfectonderwijsmatch.nl</a>
                        </p>
                    </div>
                    <div class="social-holder">
                        <a href="https://www.facebook.com/Perfect-Onderwijs-Match-111197571422737/">
                            <img class="social-icons"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/facebook.svg" alt="">
                        </a>
                        <a href="https://instagram.com/perfect.onderwijs.match">
                            <img class="social-icons"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/instagram.svg" alt="">
                        </a>
                        <a
                            href="https://nl.linkedin.com/company/perfect-onderwijs-match?trk=public_profile_topcard-current-company">
                            <img class="social-icons"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/linked-in.svg" alt="">
                        </a>
                        <!-- </div> -->
                    </div>

                </div>
                <?php echo get_template_part('global-templates/contact-form'); ?>

            </div>


            <?php
					while ( have_posts() ) {
						the_post();
						// get_template_part( 'loop-templates/content', 'page' );

						echo '<div class="entry-content">';

						the_content();
						understrap_link_pages();
				
						echo '</div><!-- .entry-content -->';

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

        </main>



    </div><!-- #primary -->



    <!-- </div>#content -->

</div><!-- #home-page-wrapper -->

<?php
get_footer();