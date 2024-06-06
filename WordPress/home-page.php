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
                    <a href="https://www.instagram.com/comm.collective/"><img class="index-header-social" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Socials/instagram_white.svg" alt="Instagram icon link to Instagram account" /></a>
                    <a href="https://www.facebook.com/commcollective"><img class="index-header-social" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Socials/facebook_white.svg" alt="Facebook icon link to Facebook account" /></a>
                    <a href="https://www.linkedin.com/groups/10440200/"><img class="index-header-social" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Socials/linkedin_white.svg" alt="LinkedIn icon link to LinkedIn account" /></a>
                </div>
            </div>
            <?php
$header_button_text = get_field('header_button_text');
$header_button_link = get_field('header_button_link');
?>
            <a href="<?php echo esc_url($header_button_link); ?>" class="btn row my-5"><?php echo esc_html($header_button_text); ?></a>
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
                    <?php
$about_button_text = get_field('about_button_text');
$about_button_link = get_field('about_button_link');
?>
                    <a href="<?php echo esc_url($about_button_link); ?>" class="btn row mx-0 my-5"><?php echo esc_html($about_button_text); ?></a>
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
                    <?php
$opportunities_button_text = get_field('opportunities_button_text');
$opportunities_button_link = get_field('opportunities_button_link');
?>
                    <a href="<?php echo esc_url($opportunities_button_link); ?>" class="btn row mx-0 my-5"><?php echo esc_html($opportunities_button_text); ?></a>
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
                    <?php
$news_button_text = get_field('news_button_text');
$news_button_link = get_field('news_button_link');
?>
                    <a href="<?php echo esc_url($news_button_link); ?>" class="btn row mx-0 my-5"><?php echo esc_html($news_button_text); ?></a>
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
            <?php
$events_button_text = get_field('events_button_text');
$events_button_link = get_field('events_button_link');
?>
                    <a href="<?php echo esc_url($events_button_link); ?>" class="btn my-5"><?php echo esc_html($events_button_text); ?></a>
            </div>
            <div class="row">
                <div class="col-sm-4 event-img-padding event-img-top">
                    <div class="border-orange3 event-img mx-auto">
                        <img src="<?php the_field('events_image_1'); ?>" class="event-img-fill">
                    </div>
                </div>
                <div class="col-sm-4 event-img-padding">
                    <div class="border-orange3 event-img mx-auto">
                        <img src="<?php the_field('events_image_2'); ?>" class="event-img-fill">
                    </div>
                </div>
                <div class="col-sm-4 event-img-padding">
                    <div class="border-orange3 event-img mx-auto">
                        <img src="<?php the_field('events_image_3'); ?>" class="event-img-fill">
                    </div>
                </div>

                <img class="event-img-frame" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/indexbg/events.svg" />
                <img class="event-img-frame-mobile mx-auto" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/indexbg/events_mobile.svg" />
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
                    <?php
$content_button_text = get_field('content_button_text');
$content_button_link = get_field('content_button_link');
?>
                    <a href="<?php echo esc_url($content_button_link); ?>" class="btn row mx-0 my-5"><?php echo esc_html($content_button_text); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>