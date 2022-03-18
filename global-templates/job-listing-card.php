<?php 
/**
 * job listing card
 *
 * @package Perfect onderwijs match
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$order = array('post_date' => 'DESC', 'title' => 'ASC');

$args = array(
    'post_type'      => 'add_job_listing_type',
    'posts_per_page' => 4,
    'orderby' => '$order',
);
$loop = new WP_Query($args);
while ( $loop->have_posts() ) {
    $loop->the_post();
    ?>

<div class="jobs-list-section-card col-lg-4 col-md-6">
    <div class="card-holder">
        <div class="card-holder__content">
            <h4 class="card-holder__title"><?php the_title(); ?></h4>
            <div class="card-holder__list">
                <p class="text-center"><?php echo get_field("locatie"); ?></p>
                <p><?php echo get_field("over_de_functie"); ?></p>
            </div>
            <div class="card-holder_btn-container">
                <a href="#" class="jobs-list-link btn btn-outline-light">Solliciteer</a>
                <a href="<?php echo get_permalink(); ?>" class="jobs-list-link btn btn-secondary">Vacature</a>
            </div>
        </div>
    </div>
</div>
<?php




}

?>