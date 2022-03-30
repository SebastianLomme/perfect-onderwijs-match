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

    get_template_part('global-templates/job-listing-card');
}
    ?>