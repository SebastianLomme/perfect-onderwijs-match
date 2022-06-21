<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
        <?php the_archive_title( '<h1 class="page-title text-light">', '</h1>' ); ?>
    </div> <!-- hero-section__content -->
</div> <!-- hero-section -->





<div class="wrapper" id="archive-wrapper">



    <div class="container-fluid" id="content" tabindex="-1">

        <div class="row">
            <!-- Do the left sidebar check -->
            <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

            <main class="site-main" id="main">

                <?php
				if ( have_posts() ) {
					?>
                <header class="page-header">
                    <?php

						// the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
                </header><!-- .page-header -->

                <div class="container">
                    <div class="row text-justify mt-5">
                        <p class="col-lg">
                            Ben je op zoek naar een vaste baan in het onderwijs? Dan ga ik voor jou op zoek naar de
                            beste
                            match! Wil je als zzp’er / interim professional (leerkracht of docent) aan de slag? Dan zorg
                            ik
                            voor de best passende opdracht! Wil jij jezelf volop gaan ontwikkelen door verschillende
                            organisaties te gaan ondersteunen voor korte of lange duur? Vraag naar de mogelijkheden!
                        </p>
                        <p class="col-lg">
                            Perfect Onderwijs Match heeft veel vacatures en opdrachten in het onderwijs. Staat jouw
                            ideale
                            baan of opdracht er niet tussen? Dan staat deze er wellicht vandaag niet op, maar dat kan
                            morgen
                            zomaar anders zijn!
                        </p>
                    </div class="row">
                </div>

                <div class="jobs-list-section container-fluid">
                    <div class="row">
                        <?php
					// Start the loop.


					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', "add_job_listing_type" );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

                    </div>

            </main><!-- #main -->

            <?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();