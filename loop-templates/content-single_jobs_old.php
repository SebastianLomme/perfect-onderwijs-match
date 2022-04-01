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

        <?php
		the_content();
		
		understrap_link_pages();

		?>


        <div class="containe-fluid table_job_listing">
            <div class="row">
                <div class="col-md-4">
                    <div class="row p-2">
                        <div class="col-md title_table">Startdatum</div>
                        <div class="col-md"><?php echo get_field("startdatum"); ?></div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md title_table">Einddatum</div>
                        <div class="col-md"><?php echo get_field("startdatum"); ?></div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md title_table">Opdrachtgever</div>
                        <div class="col-md"><?php echo get_field("opdrachtgever"); ?></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-4 title_table">Wat verwachten we van je</div>
                <div class="col-md-8"><?php echo get_field("wat_verwachten_we_van_je"); ?></div>
            </div>
            <div class="row p-2">
                <div class="col-md-4 title_table">Wat bieden we je</div>
                <div class="col-md-8"><?php echo get_field("wat_bieden_we_je"); ?></div>
            </div>
            <div class="row p-2">
                <div class="col-md-4 title_table">Functieverband</div>
                <div class="col-md-8"><?php echo get_field("functieverband"); ?></div>
            </div>
            <div class="row p-2">
                <div class="col-md-4 title_table">Salarisindicatie</div>
                <div class="col-md-8"><?php echo get_field("salarisindicatie"); ?></div>
            </div>
            <div class="row p-2">
                <div class="col-md-4 title_table">Arbeidsvoorwaarden</div>
                <div class="col-md-8"><?php echo get_field("arbeidsvoorwaarden"); ?></div>
            </div>
            <div class="row p-2">
                <div class="col-md-4 title_table">Aanvullende informatie</div>
                <div class="col-md-8"><?php echo get_field("aanvullende_informatie"); ?></div>
            </div>
        </div class="container">


    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <?php understrap_entry_footer(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->