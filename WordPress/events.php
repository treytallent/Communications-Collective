<?php
/*
Template Name: Events
*/
?>
<?php require_once('small-header.php'); ?>

<div class="container-fluid section-padding">
     <div class="container">
        <div class="row">
             <section class="maintext">             
             <?php 
$args = array(
  'category_name' =>  'Current Events',
  // 'posts_per_page'    =>   1
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="thepost">
<h2 class="section-title offset-md-1 pink">recent news</h2>

<div class="row section1-row">
<div class="col-md-4 offset-md-1 col-sm-5 center arrow-container-right-pink img">
<!-- <img class="arrow-effect-image image-border-pink"  -->
<?php
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail('thumbnail', array('class' => 'arrow-effect-image image-border-pink'));
                } ?>
                  </div>
                  <div class="col-md-6 offset-md-1 col-sm-6 offset-sm-1 v-center section1-padding" >
                  <p class="date subheader2-text"><?php echo date ('F j,Y'); ?></p>

                  <h3 class= "title pink"><?php the_title(); ?></h3> 
                  <p class="location subheader3-text"><?php echo get_post_meta(get_the_ID(), 'location', true); ?></p>
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

  
<!-- <section class="container-fluid section-padding">
      <div class="container">
        <h2 class="section-title offset-md-1 pink">current events</h2>
        <div class="row section1-row">
          <div
            class="col-md-4 offset-md-1 col-sm-5 center arrow-container-right-pink img"
          >
            <img
              class="arrow-effect-image image-border-pink"
              src="Images/placeholder_image.webp"
              alt=""
            />
          </div>

          <div
            class="col-md-6 offset-md-1 col-sm-6 offset-sm-1 v-center section1-content section1-padding"
          >
            <p class="date subheader2-text">5th August, 2024</p>
            <h3 class="title pink">Welcome Event</h3>
            <p class="location subheader3-text">MU Bush Court 10am - 12pm</p>
            <p class="section1-intro body-text">
              Come and join us for our first meeting of the semester! Here you
              will be able to learn about our purpose, what we do and how to
              become a member. If youʼre interested in communications and
              finding a universal hub to engage with other students this is the
              place for you.
            </p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>
        </div>


        <div class="row section1-row">
          <div
            class="col-md-4 offset-md-1 col-sm-5 center arrow-container-right-orange1 img"
          >
            <img
              class="arrow-effect-image image-border-orange1"
              src="Images/placeholder_image.webp"
              alt=""
            />
          </div>

          <div
            class="col-md-6 offset-md-1 col-sm-6 offset-sm-1 v-center section1-content section1-padding"
          >
            <p class="date subheader2-text">22nd August, 2024</p>
            <h3 class="title orange1">PowerPoint Night!</h3>
            <p class="location subheader3-text">
              MU Geoffrey Bolton Library, 5pm - 7pm
            </p>
            <p class="section1-intro body-text">
              Pick a topic youʼre passionate about, prepare a PowerPoint
              presentation and tell us all about it! Whether your preference in
              cheeses, your favorite films or important political debates, there
              is no topic that is off the table.
            </p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>
        </div>

        <div class="row">
          <div
            class="col-md-4 offset-md-1 col-sm-5 center arrow-container-right-orange2 img"
          >
            <img src="Images/placeholder_image.webp" alt="" />
          </div>

          <div
            class="col-md-6 offset-md-1 col-sm-6 offset-sm-1 v-center section1-content section1-padding"
          >
            <p class="date subheader2-text">9th September, 2024</p>
            <h3 class="title orange2">Q&A with Luke Derbyshire from Spoke.</h3>
            <p class="location subheader3-text">Online, 5pm - 7pm</p>
            <p class="section1-intro body-text">
              Spoke. is a leading consultancy agency in Perth, specializing in
              strategic communication, branding, and digital marketing. They
              offer tailored solutions to businesses seeking to enhance their
              brand presence, engage audiences, and achieve tangible results.
              With a team of seasoned professionals, Spoke. combines creativity
              and data-driven insights to deliver innovative strategies that
              drive success in todayʼs dynamic market.
            </p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>
        </div>

      </div>

    </section>

    <section class="container-fluid section-padding">
      <div class="container">
        <h2 class="section-title orange3">past events</h2>
        <div class="row">
          <div class="col-md-4 col-sm-4 text-center post-padding">
            <img
              class="img-fluid pastevents-image image-border-yellow post-image"
              src="Images/placeholder_image.webp"
              alt=""
            />
            <h3 class="post-title yellow">Creative Collab</h3>
            <p class="post-location subheader2-text">MU Building 465</p>
            <p class="post-date body-text">1-7 Feb 24</p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>

          <div class="col-md-4 col-sm-4 text-center post-padding">
            <img
              class="img-fluid pastevents-image image-border-yellow post-image"
              src="Images/placeholder_image.webp"
              alt=""
            />
            <h3 class="post-title yellow">CommuniTalk</h3>
            <p class="post-location subheader2-text">Online</p>
            <p class="post-date body-text">3-6 Dec 23</p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>

          <div class="col-md-4 col-sm-4 text-center post-padding">
            <img
              class="img-fluid pastevents-image image-border-yellow post-image"
              src="Images/placeholder_image.webp"
              alt=""
            />
            <h3 class="post-title yellow">Pitch Perfect</h3>
            <p class="post-location subheader2-text">
              MU Geoffrey Bolton Library
            </p>
            <p class="post-date body-text">16-17 Oct 23</p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-4 text-center post-padding">
            <img
              class="img-fluid pastevents-image image-border-yellow post-image"
              src="Images/placeholder_image.webp"
              alt=""
            />
            <h3 class="post-title yellow">Media Marathon</h3>
            <p class="post-location subheader2-text">MU Nexus Theatre</p>
            <p class="post-date body-text">23-24 Aug 23</p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>

          <div class="col-md-4 col-sm-4 text-center post-padding">
            <img
              class="img-fluid pastevents-image image-border-yellow post-image"
              src="Images/placeholder_image.webp"
              alt=""
            />
            <h3 class="post-title yellow">Workshop Week</h3>
            <p class="post-location subheader2-text">MU Building 465</p>
            <p class="post-date body-text">6-12 Jul 23</p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>

          <div class="col-md-4 col-sm-4 text-center post-padding">
            <img
              class="img-fluid pastevents-image image-border-yellow post-image"
              src="Images/placeholder_image.webp"
              alt=""
            />
            <h3 class="post-title yellow">CommuniCon 23</h3>
            <p class="post-location subheader2-text">
              MU Geoffrey Bolton Library
            </p>
            <p class="post-date body-text">10 Apr 23</p>
            <a class="btn body-text btn-sm" href="#">Learn More</a>
          </div>
        </div>


        <div class="text-center">
          <a class="btn body-text btn-sm" href="#">More</a>
        </div>
      </div> -->

</section>
<?php get_footer(); ?>