<?php
/*
Template Name: News
*/
?>
<?php require_once('small-news-header.php'); ?>

<div class="container-fluid section-padding">
     <div class="container">
     <h2 class="section-title offset-md-1 pink">recent news</h2>
        <div class="row">
             <section>             
             <?php 
$args = array(
  'category_name' =>  'Recent News',
 'posts_per_page'   =>  3
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="thepost">
<div class="N-E-flex section1-row">
<div class="col-md-4 offset-md-1 col-sm-5 center arrow-container-right-pink img news-events-image-size">
<!-- <img class="arrow-effect-image image-border-pink"  -->
<?php
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail('thumbnail', array('class' => 'arrow-effect-image image-border-pink'));
                } ?>
                  </div>
                  <div class="col-md-5 offset-md-1 col-sm-6 offset-sm-1 v-center section1-padding" >
                  <p class="date subheader2-text"><?php the_field("news_date"); ?></p>

                  <h3 class= "news-title pink"><?php the_title(); ?></h3> 
                  <p class="date subheader3-text"><?php the_field("new_author"); ?></p>
                  <p class="section1-intro body-text"><?php the_excerpt(); ?></p>

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
</section>

      </div>
     </div>
  </div>


  <div class="container-fluid section-padding">
     <div class="container">
     <h2 class="section-title orange3">more news</h2>
        <div class="row">
        <?php
        // Query the latest posts from the 'content' category
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'posts_per_page' => 6,
            'category_name' => 'More News', // The slug of the category
            'paged' => $paged
        );
        $query = new WP_Query($args);

        // The Loop
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>

          <div class="col-md-6 col-sm-12 article-padding">
          <p class="article-date subheader3-text"><?php the_field("news_date"); ?></p>
            <h4 class="article-title orange3"><?php the_title(); ?></h4>
            <div class="d-flex">
              <div class="col-md-4 col-sm-4 col-4 center arrow-container-right-orange3 img">
                  <?php
                  if ( has_post_thumbnail() ) { 
                      the_post_thumbnail('thumbnail', array('class' => 'arrow-effect-image image-border-orange3'));
                  } ?>
                </div>
              <div class="col-md-8 col-sm-8 col-8 v-center">
                <p class="date subheader3-text"><?php the_field("new_author"); ?></p>
                <p class="article-p body-text"><?php the_excerpt(); ?></p>
                <a class="readmore body-text" href="<?php the_permalink(); ?>">CONTINUE READING</a>
                <!-- <a class="readmore" href="<?php the_permalink(); ?>"> CONTINUE READING</a> -->
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


<?php get_footer(); ?>