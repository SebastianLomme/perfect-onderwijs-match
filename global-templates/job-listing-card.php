<?php 
/**
 * job listing card
 *
 * @package Perfect onderwijs match
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="jobs-list-section-card col-lg-4 col-md-6">
    <div class="card-holder">
        <div class="card-holder__content">
            <h4 class="card-holder__title"><?php the_title(); ?></h4>
            <div class="card-holder__list">
                <!-- <p class="text-center"><?php echo get_field("locatie"); ?> - Primair Onderwijs</p> -->

                <p><?php echo wp_trim_words(get_field("over_de_functie"), 10); ?></p>
                <ul>
                    <li>
                        <?php echo get_field("locatie"); ?>
                    </li>
                    <li>
                        Primair Onderwijs
                    </li>
                    <li>
                        Deeltijds, vaste baan
                    </li>

                </ul>
            </div>
            <div class="card-holder_btn-container">
                <a href="#" class="jobs-list-link btn btn-outline-light">Solliciteer</a>
                <a href="<?php echo get_permalink(); ?>" class="jobs-list-link btn btn-secondary">Vacature</a>
            </div>
        </div>
    </div>
</div>