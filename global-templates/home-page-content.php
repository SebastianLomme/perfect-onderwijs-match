<div class="main-section image-light container-fluid"
    style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/inc/images/waarom-pom.webp)">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-2 ">
                <div class="card bg-white text-primary m-2 border border-primary">
                    <div class="card-body">

                        <h3 class="card-title text-primary">Werving & Selectie</h3>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                        <div class="row">
                            <div class="col-sm card_body_col">
                                <h5 class="card-subtitle mb-2 text-primary" style="--bs-text-opacity: .5;">Opdrachtgever
                                </h5>
                                <p class="card-text"><?php echo get_field("section_opdrachtgever", 6);?>
                                    <a href="<?php echo get_site_url() . '/opdrachtgevers'; ?>"
                                        class="card-link d-block text-primary">Lees meer...</a>
                                </p>

                            </div>
                            <div class="col-sm card_body_col">
                                <h5 class="card-subtitle mb-2 text-primary" style="--bs-text-opacity: .5;">Kandidaat
                                </h5>
                                <p class="card-text"><?php echo get_field("section_kandidaat", 6); ?>
                                    <a href="<?php echo get_site_url() . '/onderwijsprofessional'; ?>"
                                        class="card-link d-block text-primary">Lees meer...</a>
                                </p>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 mb-2">
                <div class="card bg-white text-primary m-2 border border-primary">
                    <div class="card-body">
                        <h3 class="card-title text-primary">ZZP</h3>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                        <p class="card-text"><?php echo get_field("section_zzp_one", 6);?>
                            <hr class="bg-primary">
                            <?php echo get_field("section_zzp_two", 6);?>
                            <a href="<?php echo get_site_url() . '/onderwijsprofessional'; ?>"
                                class="card-link d-block text-primary">Lees meer...</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 mb-2">
                <div class="card bg-white text-primary m-2 border border-primary">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Scholing & Coaching</h3>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                        <p><?php echo get_field("section_scholing_one", 6);?></p>
                        <hr class="bg-primary">
                        <?php echo get_field("section_scholing_two", 6);?>
                        <a href="<?php echo get_site_url() . '/opdrachtgevers'; ?>"
                            class="card-link d-block text-primary">Lees
                            meer...</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>