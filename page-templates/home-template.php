<?php
/**
 * Template Name: Home template Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="hero-section">
    <div class="overlay"></div>
    <div class="hero-section__content container">
        <h1>Vind de Perfecte <span class="text-secondary">match!</span></h1>
        <a href=# class="btn btn-secondary button">Button</a>
    </div> <!-- hero-section__content -->
</div> <!-- hero-section -->

<div class="wrapper" id="home-page-wrapper">

    <!-- <div class="<?php echo esc_attr( $container ); ?>" id="content"> -->
    <div class="content-area" id="primary">

        <main class="site-main" id="main" role="main">
            <div class="info-section container">
                <div class="row justify-content-between">
                    <div class="info-section__body  col-md-6 order-md-1">
                        <h3 class="title">Wie ben ik?</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class=" col-md-6 order-md-0 d-flex align-items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/wie-ben-ik.jpg" alt="">
                    </div>
                </div>

                <div class="row justify-content-between">

                    <div class="col-md-6">
                        <h3 class="title">Wie is POM?</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/wie-is-pom.jpg" alt="">
                    </div>

                </div>


                <div class="row justify-content-between">

                    <div class="col-md-6 order-md-1">
                        <h3 class="title">Waarom POM?</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum
                            has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                    <div class="col-md-6 order-md-0 d-flex align-items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/waarom-pom.jpg" alt="">
                    </div>

                </div>

            </div>

            <div class="jobs-list-section container">
                <div class="row">
                    <div class="jobs-list-section-card col-lg-4 col-md-6">
                        <div class="card-holder">
                            <div class="card-holder__content">
                                <h3 class="card-holder__title">Groepsleerkracht SBO</h3>
                                <ul class="card-holder__list">
                                    <li class="location">Noord-Holland</li>
                                    <li class="studie">HBO</li>
                                    <li class="opleiding">Speciaal onderwijs</li>
                                    <li class="ervaring">0-1 jaar ervaring</li>
                                    <li class="platings-datum">Geplaats op 07-03-2022</li>
                                </ul>
                                <div class="card-holder_btn-container"><a href="#"
                                        class="jobs-list-link btn btn-secondary">Vacature</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="jobs-list-section-card col-lg-4 col-md-6">
                        <div class="card-holder">
                            <div class="card-holder__content">
                                <h3 class="card-holder__title">Leerkracht schooljaar 2022-2023</h3>
                                <ul class="card-holder__list">
                                    <li class="location">Noord-Holland</li>
                                    <li class="studie">HBO</li>
                                    <li class="opleiding">Speciaal onderwijs</li>
                                    <li class="ervaring">0-1 jaar ervaring</li>
                                    <li class="platings-datum">Geplaats op 07-03-2022</li>
                                </ul>
                                <div class="card-holder_btn-container"><a href="#"
                                        class="jobs-list-link btn btn-secondary">Vacature</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="jobs-list-section-card col-lg-4 col-md-6">
                        <div class="card-holder">
                            <div class="card-holder__content">
                                <h3 class="card-holder__title">Groepsleerkracht</h3>
                                <ul class="card-holder__list">
                                    <li class="location">Noord-Holland</li>
                                    <li class="studie">HBO</li>
                                    <li class="opleiding">Speciaal onderwijs</li>
                                    <li class="ervaring">0-1 jaar ervaring</li>
                                    <li class="platings-datum">Geplaats op 07-03-2022</li>
                                </ul>
                                <div class="card-holder_btn-container"><a href="#"
                                        class="jobs-list-link btn btn-secondary">Vacature</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="jobs-list-section-card col-md-6 last-card">
                        <div class="card-holder">
                            <div class="card-holder__content">
                                <h3 class="card-holder__title">Leerkracht schooljaar 2022-2023</h3>
                                <ul class="card-holder__list">
                                    <li class="location">Noord-Holland</li>
                                    <li class="studie">HBO</li>
                                    <li class="opleiding">Speciaal onderwijs</li>
                                    <li class="ervaring">0-1 jaar ervaring</li>
                                    <li class="platings-datum">Geplaats op 07-03-2022</li>
                                </ul>
                                <div class="card-holder_btn-container"><a href="#"
                                        class="jobs-list-link btn btn-secondary">Vacature</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-secondary">Alle vacatures</a>
                </div>
            </div>
            <div class="about-us-section container-fluid">
                <div class="title text-center">
                    <h3>Wat doen we?</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 about-us-section-card">
                        <div class="card-holder">
                            <div class="card-holder__content">
                                <h3>Werving</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-us-section-card">
                        <div class="card-holder">
                            <div class="card-holder__content">
                                <h3>Selectie</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-us-section-card">
                        <div class="card-holder">
                            <div class="card-holder__content">
                                <h3>Bemiddeling</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <?php
					while ( have_posts() ) {
						the_post();
						// get_template_part( 'loop-templates/content', 'page' );

						echo '<div class="entry-content">';

						the_content();
						understrap_link_pages();
				
						echo '</div><!-- .entry-content -->';

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

        </main>


    </div><!-- #primary -->



    <!-- </div>#content -->

</div><!-- #home-page-wrapper -->

<?php
get_footer();