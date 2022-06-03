<?php
/**
 * Hero setup
 *
 * @package Perfect onderwijs match
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>


<div class="contact-info-form">
    <h3>Vul onderstaand formulier in en we bellen je z.s.m. terug!</h3>
    <?php echo do_shortcode('[gravityform id="6" title="false"]'); ?>

    <!-- <form>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Naam*">
            <label for="floatingInput">Naam*</label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel*" class="form-control" id="floatingInput" placeholder="Telefoonnummer**">
            <label for="floatingInput">Telefoonnummer*</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="E-mail*">
            <label for="floatingInput">E-mail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="textarea" class="form-control" id="floatingInput" placeholder="Toelichting*">
            <label for="floatingInput">Toelichting</label>
        </div>

        <button type="submit" class="btn btn-secondary mb-3">Bel me terug</button>
    </form> -->
</div>