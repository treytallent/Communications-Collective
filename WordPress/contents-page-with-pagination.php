<?php
/*
Template Name: Contents with pag
*/
?>

<?php get_header(); ?>
<div class="container-fluid header header-gradient" style="background-size: cover; background-image: url(<?php the_field("content-bg"); ?>;">
        <div class="container">
            <a href="<?php the_field("feature-links"); ?>" class="headerbtn body-text">Featured</a>
            <h1 class="contentheading"><?php the_field("content_heading"); ?></h1>
            <h4 class="authorname"><?php the_field("content-header-author"); ?>
            <a href="<?php the_field("button_link"); ?>" class="headerbtn-2 body-text"><?php echo get_post_meta(get_the_ID(), 'button_text', true) ?: 'Default Button Text'; ?></a></h4>
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
                           href="http://170.187.231.66/~mesh20/sub/content1/"
                           id="navbarDropdownMenuLink"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                        >
                           All Posts
                        </a>
                        <div
                           class="dropdown-menu text-right"
                        >
                           <a class="dropdown-item" href="http://170.187.231.66/~mesh20/sub/featured/">Featured</a>
                           <a class="dropdown-item" href="http://170.187.231.66/~mesh20/sub/recommendation-with-pagination/">Recommended</a>
                           <a class="dropdown-item" href="http://170.187.231.66/~mesh20/sub/news-with-pagination/">News</a>
                           <a class="dropdown-item" href="http://170.187.231.66/~mesh20/sub/study-with-pagination/">Study</a>
                        </div>
                     </button>
        <div class="row">
        <?php
// Query the latest posts from the 'content' category
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 9,
    'category_name' => 'content', // The slug of the category
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
?>
        <div class="col-md-4">
            <div class="card mb-4 card-pink">
                <?php if (has_post_thumbnail()) : ?>
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <?php if ($category_slug && $category_link) : ?>
               <a href="<?php echo $category_link; ?>" class="content-btn btn-fluid <?php echo $category_slug ? 'category-link' : ''; ?>">
                    <?php echo get_post_meta(get_the_ID(), 'button_text', true) ?: 'Default Button Text'; ?></a>
                    <?php endif; ?>
                <div class="card-body">
                    <p class="content-author"><?php echo get_the_author(); ?></p>
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
    <h3 class="text-center post-your-content">post your content</h3>
    <p class="text-center section-pull-quote">"Now! It's your turn to post a blog!"</p>
    <p class="text-center post-content ">Find what’s you interested and post it to us through the email provided below:<br><strong>
        murdoch.commcollective@gmail.com</strong><br>
       </p>
    
</div>
</section>

<?php get_footer(); ?>