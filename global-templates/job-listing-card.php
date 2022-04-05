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
            <h4 class="card-holder__title"><?php the_title(); ?></h4>
            <div class="card-holder__list">
                <p class="text-center"><?php
                    echo get_field("locatie");
                    echo " - ";
                    create_string_tags($tags_soortonderwijs);
                    ?>
                </p>

                <p><?php echo get_field("intro"); ?></p>
                <?php
                create_string_tags($tags_dienstverband);
                        ?>

            </div>
            <div class="card-holder_btn-container">
                <a href="#" class="jobs-list-link btn btn-outline-light">Solliciteer</a>
                <a href="<?php echo get_permalink(); ?>" class="jobs-list-link btn btn-secondary">Vacature</a>
            </div>
        </div>
    </div>
</div>