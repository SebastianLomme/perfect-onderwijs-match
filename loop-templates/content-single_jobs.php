<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="entry-content">


        <div class="container table_job_listing">
            <div class="row text-center h3">
                <p>Maastricht | 40 uur per week</p>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="title_jobs_list">Voor Wie</p>
                        </div>

                        <div class="col-md-8"><?php echo get_field("opdrachtgever"); ?>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="title_jobs_list">Wat ga je doen</p>
                        </div>
                        <div class="col-md-8"><?php echo get_field("arbeidsvoorwaarden"); ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="title_jobs_list">wat word er verwacht</p>
                        </div>
                        <div class="col-md-8"><?php echo get_field("wat_verwachten_we_van_je"); ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="title_jobs_list">Aanvullende informatie</p>
                        </div>
                        <div class="col-md-8"><?php echo get_field("aanvullende_informatie"); ?>
                        </div>
                    </div>
                    <hr>
                </div> <!-- end col-9 -->

                <div class="col-lg-3 text-center">
                    <div class="img-btn-holder">
                        <img class="round-image"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/contact-ons.webp" alt="">
                        <div class="btn btn-secondary">
                            Solliciteer nu
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-us-section"><?php echo get_template_part('global-templates/contact-form'); ?></div>





        </div><!-- .entry-content -->

        <footer class="entry-footer">

            <?php understrap_entry_footer(); ?>

        </footer><!-- .entry-footer -->

</article><!-- #post-## -->