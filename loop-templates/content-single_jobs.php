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
$tags_dienstverband = get_the_terms( $post->id,  "dienstverband" );
$image = get_the_post_thumbnail_url( get_the_ID(), 'medium' );

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="entry-content">


        <div class="container table_job_listing">
            <div class="row text-center h3">
                <p><?php echo get_field("locatie"); ?> | <?php echo create_string_tags($tags_dienstverband); ?> </p>
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
                        <?php
                        if (!$image){
                            $link = get_stylesheet_directory_uri() . "/inc/images/contact-ons.webp";
                        } else {
                            $link = $image;
                        }
                        ?>
                        <img class="round-image" src="<?php echo $link; ?>" alt="">

                        <a href="#contact-form-jobs-link" class="btn btn-secondary">
                            Solliciteer nu
                        </a>
                        <?php if( get_field('file') ): ?>
                        <a class="mt-4 btn btn btn-outline-secondary" href="<?php echo the_field('file'); ?>"
                            target=”_blank”>Functie
                            profiel</a>
                        <?php endif; ?>

                    </div>


                </div>
            </div>

            <div class="contact-us-section" id="contact-form-jobs-link">
                <?php echo get_template_part('global-templates/contact-form-job-listing-single'); ?>
            </div>



        </div><!-- .entry-content -->

        <footer class="entry-footer">

            <?php understrap_entry_footer(); ?>

        </footer><!-- .entry-footer -->

</article><!-- #post-## -->