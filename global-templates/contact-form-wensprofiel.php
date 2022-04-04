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

    <form>
        <p><strong>Jouw gegeven:</strong></p>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="bedrijf">
            <label for="floatingInput">Bedrijf*</label>
        </div>
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
            <input type="text" class="form-control" id="floatingInput" placeholder="Functie">
            <label for="floatingInput">Functie</label>
        </div>
        <p><strong>Wensprofiel voor Interim Professionals:</strong></p>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Over de functie">
            <label for="floatingInput">Over de functie </label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Over de persoon">
            <label for="floatingInput">Over de persoon
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Opmerkingen">
            <label for="floatingInput">Opmerkingen</label>
        </div>



        <div class="mb-3">
            <label for="formFileSm" class="form-label">Uitgebreide functieomschrijving (optioneel)</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file">
        </div>

        <button type="submit" class="btn btn-secondary mb-3">Verzenden</button>
    </form>
</div>