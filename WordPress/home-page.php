<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); ?>
<main>
    <section class="container-fluid header-bg mt-0">
        <div class="container">
            <div class="row">
                <h1><?php the_field('title_for_home_page'); ?></h1>
                <p class="index-header-subtitle subheader2-text">
                <?php the_field('title_tagline'); ?>
                </p>
                <div class="index-header-social-group">
                    <a href="#"><img class="index-header-social" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Socials/instagram_white.svg" alt="Instagram icon link to Instagram account" /></a>
                    <a href="#"><img class="index-header-social" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Socials/facebook_white.svg" alt="Facebook icon link to Facebook account" /></a>
                    <a href="#"><img class="index-header-social" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Socials/linkedin_white.svg" alt="LinkedIn icon link to LinkedIn account" /></a>
                </div>
            </div>
            <a class="btn row my-5">Learn More</a>
        </div>
    </section>

    <section class="about-bg container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-sm-6">
                    <h2 class="text-pink"><?php the_field('about_title'); ?></h2>
                    <p class="section-pull-quote">
                    <?php the_field('about_tagline'); ?>
                    </p>
                    <p class="body-text"><?php the_field('about_body'); ?>
                    </p>
                    <a class="btn row mx-0 my-5">Learn More</a>
                </div>
                <div class="col-lg-5 col-lg-pull-1 col-sm-6 vertical-center">
                    <div class="arrow-container-left-pink">
                        <img src="<?php the_field('about_image'); ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Opportunities -->
    <section class="opportunities-bg container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-sm-6 vertical-center order-2 order-sm-1">
                    <div class="arrow-container-right-orange1">
                        <img src="<?php the_field('opportunities_image'); ?>"/>
                    </div>
                </div>
                <div class="col-lg-5 col-lg-pull-1 col-sm-6 order-1 order-sm-2">
                    <h2 class="text-orange1 justify-right">
                    <?php the_field('opportunities_title'); ?>
                    </h2>
                    <p class="section-pull-quote justify-right">
                    <?php the_field('opportunities_tagline'); ?>
                    </p>
                    <p class="body-text">
                    <?php the_field('opportunities_body'); ?>
                    </p>
                    <a class="btn row mx-0 my-5">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- News -->
    <section class="news-bg container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-sm-6">
                    <h2 class="text-orange2"><?php the_field('news_title'); ?></h2>
                    <p class="section-pull-quote"><?php the_field('news_tagline'); ?></p>
                    <p class="body-text">
                    <?php the_field('news_body'); ?>
                    </p>
                    <a class="btn row mx-0 my-5">Learn More</a>
                </div>
                <div class="col-lg-5 col-lg-pull-1 col-sm-6 vertical-center">
                    <div class="arrow-container-left-orange2">
                        <img src="<?php the_field('news_image'); ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events -->
    <section class="events-bg container-fluid">
        <div class="container">
            <h2 class="text-orange2 text-center"><?php the_field('events_title'); ?></h2>
            <p class="section-pull-quote text-center">
            <?php the_field('events_tagline'); ?>
            </p>
            <div class="row justify-content-center">
                <p class="body-text text-center col-sm-6 col-8">
<?php the_field('events_body'); ?>
                </p>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn my-5">Learn More</a>
            </div>
            <div class="row event-img-row">
                <div class="col-sm-4 vertical-center event-img-padding">
                    <div class="border-orange3 event-img">
                        <img src="<?php the_field('events_image_1'); ?>"/>
                    </div>
                </div>
                <div class="col-sm-4 vertical-center event-img-padding">
                    <div class="border-orange3 event-img">
                        <img src="<?php the_field('events_image_2'); ?>"/>
                    </div>
                </div>
                <div class="col-sm-4 vertical-center event-img-padding">
                    <div class="border-orange3 event-img">
                        <img src="<?php the_field('events_image_3'); ?>"/>
                    </div>
                </div>

                <img class="event-img-frame" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/indexbg/events.svg" />
                <img class="event-img-frame-mobile" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/indexbg/events_mobile.svg" />
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="content-bg container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-sm-6 vertical-center order-2 order-sm-1">
                    <div class="arrow-container-right-yellow">
                        <img src="<?php the_field('content_image'); ?>"/>
                    </div>
                </div>
                <div class="col-lg-5 col-lg-pull-1 col-sm-6 order-1 order-sm-2">
                    <h2 class="text-yellow justify-right"><?php the_field('content_title'); ?></h2>
                    <p class="section-pull-quote justify-right">
                    <?php the_field('content_tagline'); ?>
                    </p>
                    <p class="body-text">
                    <?php the_field('content_body'); ?>
                    </p>
                    <a class="btn row mx-0 my-5">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>