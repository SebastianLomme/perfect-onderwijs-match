<?php
/**
 * Template Name: Contact template Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Perfect onderwijs match
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="home-page-wrapper">

    <div class="hero-section">
        <div class="overlay"></div>
        <div class="hero-section__content container">
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </div> <!-- hero-section__content -->
    </div> <!-- hero-section -->

    <div class="content-area" id="primary">

        <main class="site-main" id="main" role="main">
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