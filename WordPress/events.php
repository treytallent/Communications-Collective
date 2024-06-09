<?php
/*
Template Name: Events
*/
?>
<?php require_once('small-events-header.php'); ?>

<div class="container-fluid section-padding">
     <div class="container">
     <h2 class="section-title offset-md-1 pink">current events</h2>
        <div class="row">
             <?php 
$args = array(
  'category_name' =>  'Current Events',
  'posts_per_page'  =>  3
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="N-E-flex section1-row">
<div class="col-md-4 offset-md-1 col-sm-5 center arrow-container-right-pink img news-events-image-size">
<!-- <img class="arrow-effect-image image-border-pink"  -->
<?php
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail('thumbnail', array('class' => 'arrow-effect-image image-border-pink'));
                } ?>
                  </div>
                  <div class="col-md-5 offset-md-1 col-sm-6 offset-sm-1 v-center section1-padding" >
                  <p class="date subheader2-text"><?php the_field("event-date"); ?></p>

                  <h3 class= "title pink"><?php the_title(); ?></h3> 
                  <p class="location subheader3-text"><?php the_field("event-location"); ?></p>
                  <p class="section1-intro body-text"><?php echo get_the_excerpt(); ?></p>

                  <a class="btn body-text" href="<?php the_permalink(); ?>">Learn More</a>
    <!-- <a class="readmore" href="<?php the_permalink(); ?>"> CONTINUE READING</a> -->
</div>
</div>    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
      </div>
     </div>
  </div>


  <div class="container-fluid section-padding">
     <div class="container">
     <h2 class="section-title text-orange2">past events</h2>
        <div class="row">
        <?php
        // Query the latest posts from the 'content' category
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'posts_per_page' => 6,
            'category_name' => 'Past Events', // The slug of the category
            'paged' => $paged
        );
        $query = new WP_Query($args);

        // The Loop
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
        
        <div class="col-md-4 col-sm-4 text-center post-padding">
          <div>
          <?php
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail('thumbnail', array('class' => 'img-fluid pastevents-image image-border-orange2 post-image'));
                } ?>
              </div>
            <h3 class= "post-title text-orange2"><?php the_title(); ?></h3> 
            <p class="post-location subheader2-text"><?php the_field("event-location"); ?></p>
            <p class="post-date body-text"><?php the_field("event-date"); ?></p>
            <a class="btn body-text" href="<?php the_permalink(); ?>">Learn More</a>
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
<?php get_footer(); ?>