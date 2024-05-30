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
            <h4 class="authorname"><?php the_field("content-header-author"); ?></h4>
            <p class="header-intro"><?php the_field("content-header-article"); ?></p>
            <a href="<?php the_field("continues-reading-featured-article"); ?>" class="headerbtn-1 body-text">Continue Reading</a>
    
        </div><!-- container -->
    </div><!-- containe-fluid -->

<div class="container-fluid maincontainer">
    <div class="container">
        <h2 class="text-center visitcontent">visit our content</h2>
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
        ?>
            <div class="col-md-4">
                <div class="card mb-4 card-pink">
<?php if (has_post_thumbnail()) : ?>
                        <img class="card-img-top" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>" class="content-btn btn-fluid">News</a>
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
    <h3 class="text-center postcontent">post your content</h3>
    <p class="text-center section-pull-quote">"Now! It's your turn to post a blog!"</p>
    <p class="text-center post-content ">Find what’s you interested and post it to us through the email provided below:<br><strong>
        murdoch.commcollective@gmail.com</strong><br>
       </p>
    
</div>
</section>

<?php get_footer(); ?>