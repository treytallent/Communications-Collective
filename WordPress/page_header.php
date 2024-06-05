<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito+Sans:ital,opsz,wght@1,6..12,800&family=Nunito:ital,wght@0,700;1,700&display=swap" rel="stylesheet" />
    <title> <?php
            if (function_exists('is_tag') && is_tag()) {
                single_tag_title("Tag Archive for &quot;");
                echo '&quot; - ';
            } elseif (is_archive()) {
                wp_title('');
                echo ' Archive - ';
            } elseif (is_search()) {
                echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - ';
            } elseif (!(is_404()) && (is_single()) || (is_page())) {
                wp_title('');
                echo ' - ';
            } elseif (is_404()) {
                echo 'Not Found - ';
            }
            if (is_home()) {
                bloginfo('name');
                echo ' - ';
                bloginfo('description');
            } else {
                bloginfo('name');
            }
            if ($paged > 1) {
                echo ' - page ' . $paged;
            }
            ?>
    </title>
</head>

<body>
    <header>
        <!-- Bootstrap Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="navbar-brand-container">
                <a class="navbar-brand navbar-brand-title" href="http://170.187.231.66/~mesh20/sub/home/"><img src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/ccmu_logo.svg" alt="Communication Collective at Murdoch University Logo" /></a>
                <p class="navbar-brand-title">
                the communication collective at murdoch university
                </p>
            </div>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php

            wp_nav_menu(array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ));

            ?>

        </nav>
        <section class="container-fluid small-content-header-bg small-content-header-bg-gradient mt-0" style="background-size: cover; background-image: url(<?php the_field("content-bg"); ?>;">
            <div class="container">
                <div class="row">
                    <div class="col-12 align-content-end pb-4 text-white">
             <a href="<?php the_field("feature-links"); ?>" class="btn-header body-text"><?php echo get_post_meta(get_the_ID(), 'button_text', true) ?: 'Default Button Text'; ?></a>
            <h1 class="postheading"><?php the_field("content_heading"); ?></h1>
            <h4 class="postauthorname"><?php the_field("content-header-author"); ?><?php the_field("author_name"); ?><?php the_field("event-location"); ?>      <?php the_field("event-date"); ?>      <?php the_field("events_time"); ?></h4>
            <p class="body-text post-header-body"><?php the_field("news-events-headerbody"); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php wp_head(); ?>
    </header>