<?php require_once('page_header.php'); 
?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext">

<article class="excerpts"> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
    <div <?php post_class(); ?>>

        <div class="postcontent">
            <?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
            <?php the_content(); ?>
        </div><!--postcomtet-->        
        
        <!-- // Add the share buttons here -->
            <div class="share-buttons">
                <p class="share-this-links text-align-left"></p>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-button facebook">
                    Share on Facebook
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="share-button twitter">
                    Share on Twitter
                </a>
            </div>

           <!--  Like and Dislike button  -->
<?global $post;
$likes = get_post_meta($post->ID, 'post_likes', true);
$dislikes = get_post_meta($post->ID, 'post_dislikes', true);
?>

<div class="like-dislike-buttons">
    <button class="like-button" data-id="<?php echo $post->ID; ?>">Like (<?php echo $likes; ?>)</button>
    <button class="dislike-button" data-id="<?php echo $post->ID; ?>">Dislike (<?php echo $dislikes; ?>)</button>
</div>

<div class="like-dislike-container">
    <button class="like-button" data-id="<?php echo $post->ID; ?>">Like (<?php echo $likes; ?>)</button>
    <button class="dislike-button" data-id="<?php echo $post->ID; ?>">Dislike (<?php echo $dislikes; ?>)</button>
</div>





        <!-- Navigation Links -->
        <div class="page-navigation">
        <div class="nav-previous">
                <?php previous_post_link('%link', '<i class="fas fa-arrow-left"></i> %title', TRUE); ?>
            </div>
            <div class="nav-next">
                <?php next_post_link('%link', '%title <i class="fas fa-arrow-right"></i>', TRUE); ?>
            </div>
        
    <?php endwhile; ?>
    <?php else: ?>
    <div class="post">
        <p>Sorry, no posts found.</p>
    </div><!--post-->
    <?php endif; ?>
</article>
</section>

     </div>
    </div>
  </div>
<?php get_footer(); ?>