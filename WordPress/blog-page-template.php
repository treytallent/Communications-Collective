<?php
    /*
    Template Name: Blogs
    */
    ?>
<?php require_once('page_header.php'); ?>
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
        <div class="row">
            <section class="maintext">              
    <article class="excerpts"><!----> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
<div class="post single-page">
        <h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

        <div class="postcontent">
            <?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
            <?php the_content(); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
        
    </div><!--post class-->

   <?php endwhile; ?>
    
    <?php else: ?>
    <div class="post">
        <p>Sorry, no posts found.</p>
    </div><!--post-->
    <?php endif; ?>
    </article><!---->
</section>
           
     </div>
    </div>
  </div>
<?php get_footer(); ?>
