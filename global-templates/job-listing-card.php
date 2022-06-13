<?php 
/**
 * job listing card
 *
 * @package Perfect onderwijs match
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$tags_dienstverband = get_the_terms( $post->id,  "dienstverband" );
$tags_soortonderwijs = get_the_terms( $post->id,  "soortonderwijs" );

?>

<div class="jobs-list-section-card col-lg-4 col-md-6">
    <div class="card-holder">
        <div class="card-holder__content">
            <div class="card-holder__title">
                <h4 class="text-center">
                    <?php the_title(); ?>
                </h4>
                <p class="text-center">
                    <?php
                        echo get_field("locatie");
                        if (create_string_tags($tags_soortonderwijs) != ""){
                            echo " - ";
                        };
                        
                        echo create_string_tags($tags_soortonderwijs);
                    ?>
                </p>
            </div>

            <div class="card-holder__body"><?php echo get_field("intro"); ?></div>
            <p class="card-holder__footer">
                <?php
                echo create_string_tags($tags_dienstverband);
                        ?>
            </p>


            <div class="card-holder_btn-container">
                <a href="<?php echo get_permalink(); ?>/#contact-form-jobs-link" id="<?php echo get_the_ID(); ?>"
                    class="jobs-list-link btn btn-outline-light vacatureSollicitatieButton">Solliciteer</a>
                <a href="<?php echo get_permalink(); ?>" class="jobs-list-link btn btn-secondary">Vacature</a>
            </div>
        </div>
    </div>
</div>