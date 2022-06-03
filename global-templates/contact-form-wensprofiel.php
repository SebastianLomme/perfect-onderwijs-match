<?php
/**
 * Hero setup
 *
 * @package Perfect onderwijs match
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>


<div class="contact-info-form w-100" id="contact-form-jobs">
    <h3 class="text-center">Wensprofiel</h3>
    <p class="text-center h4">Vul hieronder jouw gegevens en jouw wensprofiel in, en wij zoeken de juiste match!</p>
    <?php echo do_shortcode('[gravityform id="4" title="false"]'); ?>

</div>