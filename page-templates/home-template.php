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
        <h1 class="display-1">Vind de Perfecte <span class="text-secondary">match!</span></h1>
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
                        <h3 class="title">Daarom kies jij voor Perfect Onderwijs Match!</h3>
                        <p>
                            Voor scholen en leerkrachten ga ik op zoek naar de perfecte match in het basisonderwijs/
                            speciaal onderwijs (SO/VSO) en Praktijkonderwijs.
                        </p>
                        <p>
                            De afgelopen jaren ben ik veel leerkrachten tegengekomen die niet op de juiste plek zitten,
                            denk aan de verkeerde inschatting van de doelgroep of het systeem van de school waar ze niet
                            aan kunnen wennen. Ook merk ik dat scholen het soms lastig vinden om de Perfecte match te
                            vinden.
                        </p>
                        <p>
                            Omdat ik veel op de werkvloer te vinden ben weet ik van beide kanten wat er nodig is voor
                            een perfecte match. 
                        </p>
                    </div> <!-- /info-section__body -->
                    <div class=" col-md-6 order-md-0 d-flex align-items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/wie-ben-ik.jpg" alt="">
                    </div>
                </div> <!-- /row -->

                <div class="row justify-content-between">

                    <div class="col-md-6">
                        <h3 class="title">Het gezicht achter Perfect Onderwijs Match</h3>

                        <p>
                            Sinds 2013 werk ik – Jennifer – in het onderwijs. Daarnaast ben ik getrouwd en moeder van 2
                            kinderen. Ik ben gestart in het regulier onderwijs en na een aantal jaren overgestapt naar
                            het speciaal onderwijs. Daar heb ik mijn hart verloren aan de leerlingen! Het speciaal
                            onderwijs is voor mij een warme plek waar ik graag ben. Mijn enorme portie geduld en liefde
                            voor deze leerlingen is mijn kracht.
                        </p>
                        <p>
                            Sinds een aantal jaar werk ik als Ambulant Begeleider expertise cluster 3 (zeer moeilijk
                            lerend onderwijs), daardoor kom ik op veel verschillende scholen. Op deze scholen ondersteun
                            en coach ik het team.
                        </p>
                        <p>
                            Door de grote problematiek in het onderwijs (het vinden van de juiste leerkrachten voor de
                            juiste plek) maakt dat ik Perfect Onderwijs Match ben gestart. Het geeft een enorme kick om
                            de juiste match te maken en daar streef ik naar een 100% garantie voor kwaliteit!
                        </p>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/wie-is-pom.jpg" alt="">
                    </div>

                </div>


                <div class="row justify-content-between">

                    <div class="col-md-6 order-md-1">
                        <h3 class="title">Waarom POM?</h3>
                        <p>Door mijn ervaring en netwerk kan ik leerkrachten goed matchen aan een organisatie. Wat past
                            bij jou en hoe ziet jouw droombaan eruit? Door over deze vragen na te denken en met mij te
                            bespreken kunnen we samen kijken wat er met jou matcht.</p>
                    </div>
                    <div class="col-md-6 order-md-0 d-flex align-items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/waarom-pom.jpg" alt="">
                    </div>

                </div>

            </div> <!-- info-section container -->

            <div class="jobs-list-section container">
                <div class="row">
                    <?php get_template_part('global-templates/job-listing-card'); ?>

                </div>
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-secondary">Alle vacatures</a>
                </div>
            </div>
            <div class="main-section image-light container-fluid"
                style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/inc/images/waarom-pom.jpg)">
                <div class="container">
                    <div class="title-primary">
                        <h3>Werving & selectie</h3>
                        <h6>Speciaal onderwijs (SO/VSO) / Praktijkonderwijs / Basisonderwijs</h6>
                        <p>Perfect Onderwijs Match maakt de match tussen leerkracht en school. Dit kan op 2
                            manieren:
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 main-section-card">
                            <div class="card-holder">
                                <div class="card-holder__content">
                                    <img class="number-icon"
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/number_1.svg)"
                                        alt="">
                                    <p>
                                        ➸ De school zet een opdracht uit bij Perfect Onderwijs Match en Jennifer gaat
                                        op
                                        zoek
                                        naar de best passende leerkracht;
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 main-section-card">
                            <div class="card-holder">
                                <div class="card-holder__content rel">
                                    <img class="number-icon"
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/number_2.svg)"
                                        alt="">
                                    <p>
                                        ➸ Jennifer heeft een goede leerkracht en gaat op zoek naar de best passende
                                        school.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>Laat je in de werkwijze en persoonlijke benadering vooral verrassen en ga samen de
                            uitdaging
                            aan.
                            Uiteraard krijg jij een mooi dienstverband bij de school zelf. Perfect Onderwijs Match
                            bemiddelt
                            tussen de twee partijen.</p>
                    </div>
                </div>
            </div>
            <div class="main-section container-fluid">
                <div class="container">
                    <div class="title text-center">
                        <h3>ZZP bemiddeling</h3>
                        <h3>Ben je ZZP’er of wil je werken als ZZP’er?</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 main-section-card">
                            <div class="card-holder">
                                <div class="card-holder__content">
                                    <p>
                                        ➸ Jennifer van Perfect Onderwijs Match heeft een passende opdracht voor jou
                                        beschikbaar. Je hoeft alleen maar met haar in gesprek te gaan en de vele
                                        mogelijkheden met elkaar te bespreken.
                                    </p>
                                    <p>
                                        De onderhandeling over het uurtarief? Dat doet Jennifer! Afspraken maken over
                                        het
                                        aantal uren en de duur van de opdracht doet Jennifer ook. Perfect Onderwijs
                                        Match is
                                        gericht op het ontzorgen van jou, zodat jij kan doen waar je goed in bent:
                                        lesgeven
                                        aan een dankbare en mooie doelgroep leerlingen.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 main-section-card">
                            <div class="card-holder">
                                <div class="card-holder__content">
                                    <p>
                                        ➸ Nog geen ervaring als ZZP’er? Of ga je ondernemer worden en heb je daarbij
                                        hulp
                                        nodig? Of een eerste opdracht? Jennifer ondersteund jou vrijblijvend bij de
                                        start
                                        van jouw eigen onderneming, gaat met jou op zoek naar de juiste opdracht en
                                        ontzorgd
                                        jou en de school bij de administratieve zaken.
                                    </p>
                                    <p>
                                        ➸ Jij geeft zelf aan wat je leuk lijkt binnen de opdrachten die beschikbaar
                                        zijn. Je
                                        hebt daarin veel vrijheid.
                                    </p>
                                    <p>
                                        Gedurende de uitvoering van de opdracht mag jij veel (persoonlijke) aandacht,
                                        ondersteuning en coaching verwachten van Jennifer.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="main-section image-light container-fluid"
                style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/inc/images/waarom-pom.jpg)">
                <div class="container">
                    <div class="title text-center">
                        <h3>Coaching, scholing en voorlichting</h3>
                        <h3>Heb je als school behoefte aan: </h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 main-section-card">
                            <div class="card-holder">
                                <div class="card-holder__content">
                                    <p>
                                        ➸ Coaching: heb je een moeilijke hulpvraag (cluster 3/4) en behoefte aan een
                                        ervaren
                                        Ambulant Begeleider die met jou meekijkt, adviseert en aan de slag gaat met de
                                        hulpvraag?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 main-section-card">
                            <div class="card-holder">
                                <div class="card-holder__content">
                                    <p>
                                        ➸ Scholing & voorlichting: heb je een specifieke scholingsvraag, denk aan ASS,
                                        gedragsproblematiek, ADHD, Down Syndroom, PDD-NOS, dyslectie, etc.? Of heb je
                                        behoefte aan hoe je didactische lessen praktischer vorm kunt geven? Perfect
                                        Onderwijs Match heeft deze kennis en expertise in huis en gaat met de hulpvraag
                                        aan
                                        de slag.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="contact-us-section container">
                <div class="contact-info-card">
                    <!-- <div class="contact-info-card-content"> -->
                    <h3>Neem contact op:</h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/contact-ons.webp" alt="">
                    <div>
                        <p>Jennifer van der Stelt- Jacobs<br>
                            Eigenaresse Perfect Onderwijs Match (POM)</p>
                    </div>
                    <div>
                        <p><a href="tel:06-50749210">06-50749210</a><br>
                            <a href="mailto:jennifer@perfectonderwijsmatch.nl">Jennifer@perfectonderwijsmatch.nl</a>
                        </p>
                    </div>
                    <div class="social-holder">
                        <img class="social-icons"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/facebook.svg" alt="">
                        <img class="social-icons"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/instagram.svg" alt="">
                        <img class="social-icons"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/linked-in.svg" alt="">
                        <!-- </div> -->
                    </div>

                </div>
                <div class="contact-info-form">
                    <h3>Vul onderstaand formulier in en we bellen je z.s.m. terug!</h3>
                    <?php echo do_shortcode('[contact-form-7 id="88" title="Contactformulier 1"]'); ?>
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