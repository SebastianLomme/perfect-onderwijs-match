<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$intro = get_field("intro");
$wat_ga_je_doen = get_field("wat_ga_je_doen");
$wat_breng_je_mee = get_field("wat_breng_je_mee");
$aanvullende_informatie = get_field("aanvullende_informatie");

function pom_render_block_job($title, $field) {
    $format =  '<div class="row"><div class="col-md-4"><p class="title_jobs_list">%s</p></div><div class="col-md-8">%s</div></div><hr>';
    printf( $format, $title, $field);
};


?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="entry-content">


        <div class="container table_job_listing">
            <div class="row text-center h3">
                <p><?php echo get_field("locatie"); ?> | 40 uur per week</p>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <?php 
                    if ($intro) {
                        pom_render_block_job("Introductie", $intro);
                        };
                    if ($wat_ga_je_doen) {
                        pom_render_block_job("Wat ga je doen?", $wat_ga_je_doen);
                        };

                    if ($wat_breng_je_mee) {
                        pom_render_block_job("Wat breng je mee?", $wat_breng_je_mee);
                        };
                    if ($aanvullende_informatie) {
                        pom_render_block_job("Aanvullende informatie", $aanvullende_informatie);
                        };
                        ?>

                </div> <!-- end col-9 -->

                <div class="col-lg-3 text-center">
                    <div class="img-btn-holder">
                        <img class="round-image"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/contact-ons.webp" alt="">
                        <a href="#contact-form-jobs" class="btn btn-secondary">
                            Solliciteer nu
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-us-section">
                <?php echo get_template_part('global-templates/contact-form-job-listing'); ?></div>



        </div><!-- .entry-content -->

        <footer class="entry-footer">

            <?php understrap_entry_footer(); ?>

        </footer><!-- .entry-footer -->

</article><!-- #post-## -->