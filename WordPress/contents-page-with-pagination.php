<?php
/*
Template Name: Contents with pag
*/
?>

<?php require_once('small-header.php'); 
?>

<div class="container-fluid maincontainer">
    <div class="container">
        <?php
        // Get the category object by slug
        $category = get_category_by_slug('content');
        if ($category) {
            // Display the category name as an h1 heading
            echo '<h1>' . esc_html($category->name) . '</h1>';
        }
        ?>
        
        <div class="row">
        <?php
        // Query the latest posts from the 'content' category
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'posts_per_page' => 3,
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
        <?php wpbeginner_numeric_posts_nav($query); ?>
    </div>
</div>

<?php get_footer(); ?>