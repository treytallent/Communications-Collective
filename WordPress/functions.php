<?php
function load_my_scripts()
{
  wp_enqueue_style('bootstrap_css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
  wp_enqueue_script('boot1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js', array('jquery'));
  wp_enqueue_script('boot2', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js', array('jquery'));
  wp_enqueue_script('boot3', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'));

  wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('test', get_template_directory_uri() . '/image-arrow.css');
  wp_enqueue_style('test1', get_template_directory_uri() . '/indexstyle.css');
  wp_enqueue_style('test2', get_template_directory_uri() . '/about.css');
  wp_enqueue_style('test3', get_template_directory_uri() . '/style_news&events.css');
	wp_enqueue_style('test4', get_template_directory_uri() . '/content.css');
}
add_action('wp_enqueue_scripts', 'load_my_scripts');

function register_navwalker()
{
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(array(
  'primary' => __('CCMU Primary Menu', 'ccmu-top-menu'),
));
?>
<?php
add_theme_support('post-thumbnails'); 
?>
<?php
function display_content_category_posts() {
    // Query posts from the 'content' category
    $args = array(
        'category_name' => 'content', // The category slug
        'posts_per_page' => -1 // Number of posts to display, -1 to display all
    );
    $query = new WP_Query($args);
    
    // Check if the query returns any posts
    if ($query->have_posts()) {
        echo '<div class="container"><div class="row">';
        
        // Counter for Bootstrap columns
        $col_count = 0;

        // Start the Loop
        while ($query->have_posts()) {
            $query->the_post();
            
            // Open a new column
            if ($col_count % 3 == 0 && $col_count != 0) {
                echo '</div><div class="row">';
            }

            // Display the post in a Bootstrap column
            echo '<div class="col-md-4">';
            echo '<div class="card mb-4">';
            if (has_post_thumbnail()) {
                echo '<a href="' . get_permalink() . '">';
                the_post_thumbnail('medium', array('class' => 'card-img-top'));
                echo '</a>';
            }
            echo '<div class="card-body">';
            echo '<h5 class="card-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h5>';
            echo '<p class="card-text">' . get_the_excerpt() . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $col_count++;
        }
        
        // Close the row and container divs
        echo '</div></div>';
        
        // Restore original Post Data
        wp_reset_postdata();
    } else {
        // No posts found
        echo '<p>No posts found in the "content" category.</p>';
    }
}
?>
<?php
function wpbeginner_numeric_posts_nav($query = null) {
    if (!$query) {
        global $wp_query;
        $query = $wp_query;
    }

    if ($query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($query->max_num_pages);

    $links = [];

    if ($paged >= 1) {
        $links[] = $paged;
    }

    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul style="display: flex;">' . "\n";

    // Always show previous link
    if (get_previous_posts_link()) {
        printf('<li>%s</li>' . "\n", get_previous_posts_link());
    } else {
        printf('<li class="disabled"><a href="#">%s</a></li>' . "\n", __('Previous'));
    }

    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links)) {
            echo '<li>…</li>';
        }
    }

    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li>…</li>' . "\n";
        }

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    // Always show next link
    if (get_next_posts_link()) {
        printf('<li>%s</li>' . "\n", get_next_posts_link());
    } else {
        printf('<li class="disabled"><a href="#">%s</a></li>' . "\n", __('Next'));
    }

    echo '</ul></div>' . "\n";
}
?>