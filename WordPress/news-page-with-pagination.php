<?php
/*
Template Name: News with pag
*/
?>

<?php get_header(); ?>
<div class="container-fluid header header-gradient" style="background-size: cover; background-image: url(<?php the_field("content-bg"); ?>;">
        <div class="container">
            <a href="<?php the_field("feature-links"); ?>" class="headerbtn body-text"><?php echo get_post_meta(get_the_ID(), 'button_text', true) ?: 'Default Button Text'; ?></a></a>
            <h1 class="contentheading"><?php the_field("content_heading"); ?></h1>
            <h4 class="authorname"><?php the_field("content-header-author"); ?></h4>
            <p class="header-intro"><?php the_field("content-header-article"); ?></p>
            <a href="<?php the_field("continues-reading-featured-article"); ?>" class="headerbtn-1 body-text">Continue Reading</a>
    
        </div><!-- container -->
    </div><!-- containe-fluid -->

<div class="container-fluid maincontainer">
    <div class="container">
        <h2 class="text-center visitcontent">visit our content</h2>
        <button class="dropdown content-dropdown">
                        <a
                           class="nav-link dropdown-toggle text-white"
                           href="#"
                           id="navbarDropdownMenuLink"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                        >
                           News
                        </a>
                        <div
                           class="dropdown-menu text-right"
                        >
                        <a class="dropdown-item" href="<?php the_field("content_with_pagination"); ?>">All Post</a>
                           <a class="dropdown-item" href="<?php the_field("featured_with_pagination"); ?>">Featured</a>
                           <a class="dropdown-item" href="<?php the_field("recommendation_with_pagination"); ?>">Recommended</a>
                           <a class="dropdown-item" href="<?php the_field("news_with_pagination"); ?>">News</a>
                           <a class="dropdown-item" href="<?php the_field("study_with_pagination"); ?>">Study</a>
                        </div>
                     </button>
        <div class="row">
        <?php
// Query the latest posts from the 'content' category
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 9,
    'category_name' => 'news', // The slug of the category
    'paged' => $paged
);
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Get the categories of the current post
        $categories = get_the_category();
        // Assume the first category in the list
        $category_slug = '';
        $category_link = '';
        if (!empty($categories)) {
            $category_slug = $categories[0]->slug;
            $category_link = get_category_link($categories[0]->term_id);
        }
 // Default author name
 $author_name = get_the_author();

 // Get the custom author name from the custom field
 $custom_author_name = get_post_meta(get_the_ID(), 'content-header-author', true);

 // Use the custom author name if it exists, otherwise use the default author name
 if (!empty($custom_author_name)) {
     $author_name = $custom_author_name;
 }
 if (has_category('Recommendation')){
    $background_color = '#ffe1ea'; // Red for post ID 1
} elseif (has_category('news')) {
    $background_color = '#fff1e1'; // Green for post ID 2
} elseif (has_category('study')) {
    $background_color = '#e1f8ff'; // Blue for posts in 'special-category'
}elseif (has_category('content')) {
  $background_color = '#ffe1ea'; // Blue for posts in 'special-category'
}elseif (has_category('featured')) {
  $background_color = '#fff1e1'; // Blue for posts in 'special-category'
}
?>
<div class="col-md-4">
    <div class="card mb-4 card-pink" style="background-color: <?php echo esc_attr($background_color); ?>;">
                <?php if (has_post_thumbnail()) : ?>
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="card-body">
                <p class="content-author"><?php echo esc_html($author_name); ?></p>
                    <h5 class="article-title"><?php the_title(); ?></h5>
                    <p class="body-text short-para"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="continuereading">Continue Reading</a>
                </div>
            </div>
        </div>
<?php
    endwhile;
else :
?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php
endif;
// Restore original Post Data
wp_reset_postdata();
?>

        </div>
    </div><!-- container  -->
</div>  <!-- container fluid -->

<div class="row">
    <div class="col-12">
        <!-- Pagination links -->
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$data = new WP_Query(array(
      'posts_per_page' => 9,
    'paged' => $paged,
'orderby' => 'date',
    'order' => 'DESC'
));

if ($data->have_posts()) :
    while ($data->have_posts()) : $data->the_post();
        // Your code to display the post
        ?>
<!--         <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div> -->
        <?php
    endwhile;

    wpbeginner_numeric_posts_nav($data);

else :
    echo '<h3>' . __('404 Error: Not Found', '') . '</h3>';
endif;

wp_reset_postdata(); ?>
    </div>
</div>

<section class="container-fluid make-post postbg">
<div class="container">
    <h3 class="text-center post-your-content"><?php the_field("post_content"); ?></h3>
    <p class="text-center section-pull-quote"><?php the_field("post_content-quote"); ?></p>
    <p class="text-center post-content "><?php the_field("post_email"); ?></p>
    <p class="text-center post-content email"><?php the_field("email"); ?></p>
</div>
</section>

<?php get_footer(); ?>