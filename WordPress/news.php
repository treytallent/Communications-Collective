<?php
/*
Template Name: News
*/
?>
<?php require_once('small-header.php'); ?>

<div class="container-fluid section-padding">
     <div class="container">
        <div class="row">
             <section class="maintext">             
             <?php 
$args = array(
  'category_name' =>  'Recent News',
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

                  <h3 class= "news-title pink"><?php the_title(); ?></h3> 
                  <p class="date subheader3-text"><?php echo get_the_author(); ?></p>
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

<!--     <section class="container-fluid section-padding">
      <div class="container">
        <h2 class="section-title offset-md-1 pink">recent news</h2>
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
            class="col-md-6 offset-md-1 col-sm-6 offset-sm-1 v-center section1-padding"
          >
            <p class="date subheader2-text">May 15, 2023</p>
            <h3 class="news-title pink">
              Study Reveals Impact of Social Media on Mental Health
            </h3>
            <p class="date subheader3-text">Samantha Parker</p>
            <p class="section1-intro body-text">
              A recent study published in the Journal of Communication
              highlights the complex relationship between social media usage and
              mental health. Researchers found that while platforms like
              Facebook and Instagram can facilitate social connection and
              support.....
            </p>
            <a class="btn body-text" href="#">Learn More</a>
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
            class="col-md-6 offset-md-1 col-sm-6 offset-sm-1 v-center section1-padding"
          >
            <p class="date subheader2-text">October 3, 2023</p>
            <h3 class="news-title orange1">
              Tech Giants Face Scrutiny Over Data Privacy Practices
            </h3>
            <p class="date subheader3-text">Daniel Evans</p>
            <p class="section1-intro body-text">
              In the wake of growing concerns over data privacy, major tech
              companies like Google, Facebook, and Amazon are facing increased
              scrutiny from regulatory authorities and consumer advocates.
              Recent revelations of data breaches and questionable data handling
              practices have raised questions.....
            </p>
            <a class="btn body-text" href="#">Learn More</a>
          </div>
        </div>


        <div class="row">
          <div
            class="col-md-4 offset-md-1 col-sm-5 center arrow-container-right-orange2 img"
          >
            <img
              class="arrow-effect-image image-border-orange2"
              src="Images/placeholder_image.webp"
              alt=""
            />
          </div>

          <div
            class="col-md-6 offset-md-1 col-sm-6 offset-sm-1 v-center section1-padding"
          >
            <p class="date subheader2-text">March 28, 2024</p>
            <h3 class="news-title orange2">
              Rise of Remote Work: Challenges and Opportunities for
              Communication Professionals
            </h3>
            <p class="section1-intro body-text">
              The global shift towards remote work in response to the COVID-19
              pandemic has presented both challenges and opportunities for
              communication professionals. With teams dispersed and traditional
              office dynamics disrupted, effective communication strategies have
              become more crucial than ever.....
            </p>
            <a class="btn body-text" href="#">Learn More</a>
          </div>
        </div>

      </div>

    </section>

    <section class="container-fluid section-padding">
      <div class="container">
        <h2 class="section-title orange3">more news</h2>
        <div class="row">
          <div class="col-md-6 col-sm-12 article-padding">
            <p class="article-date subheader3-text">7 Sep 23</p>
            <h4 class="article-title yellow">
              Social Media Savvy: Communications Majors Lead
            </h4>

            <div class="row">
              <div
                class="col-md-4 col-sm-4 col-4 center arrow-container-right-yellow img"
              >
                <img
                  class="arrow-effect-image image-border-yellow"
                  src="Images/placeholder_image.webp"
                  alt=""
                />
              </div>
              <div class="col-md-8 col-sm-8 col-8 v-center">
                <p class="article-p body-text">
                  In today's digital realm, communication leaders, particularly
                  those majoring in communications, are the driving force behind
                  online discourse. With a keen understanding of audience
                  behavior and the power of social platforms, they not...
                </p>
                <a class="readmore body-text" href="#">CONTINUE READING </a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 article-padding">
            <p class="article-date subheader3-text">19 Aug 23</p>
            <h4 class="article-title yellow">
              Driving Change: Communications Majors' Impact
            </h4>

            <div class="row section2-row">
              <div
                class="col-md-4 col-sm-4 col-4 center arrow-container-right-yellow img"
              >
                <img
                  class="arrow-effect-image image-border-yellow"
                  src="Images/placeholder_image.webp"
                  alt=""
                />
              </div>
              <div class="col-md-8 col-sm-8 col-8 v-center">
                <p class="article-p body-text">
                  At the forefront of societal transformation stand
                  communication majors, wielding the power of advocacy and
                  storytelling to ignite change. Through compelling narratives
                  and strategic messaging, they champion causes, from
                  environmental sustainability...
                </p>
                <a class="readmore body-text" href="#">CONTINUE READING </a>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 col-sm-12 article-padding">
            <p class="article-date subheader3-text">7 Sep 23</p>
            <h4 class="article-title yellow">
              Social Media Savvy: Communications Majors Lead
            </h4>

            <div class="row">
              <div
                class="col-md-4 col-sm-4 col-4 center arrow-container-right-yellow img"
              >
                <img
                  class="arrow-effect-image image-border-yellow"
                  src="Images/placeholder_image.webp"
                  alt=""
                />
              </div>
              <div class="col-md-8 col-sm-8 col-8 v-center">
                <p class="article-p body-text">
                  In today's digital realm, communication leaders, particularly
                  those majoring in communications, are the driving force behind
                  online discourse. With a keen understanding of audience
                  behavior and the power of social platforms, they not...
                </p>
                <a class="readmore body-text" href="#">CONTINUE READING </a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 article-padding">
            <p class="article-date subheader3-text">19 Aug 23</p>
            <h4 class="article-title yellow">
              Driving Change: Communications Majors' Impact
            </h4>

            <div class="row section2-row">
              <div
                class="col-md-4 col-sm-4 col-4 center arrow-container-right-yellow img"
              >
                <img
                  class="arrow-effect-image image-border-yellow"
                  src="Images/placeholder_image.webp"
                  alt=""
                />
              </div>
              <div class="col-md-8 col-sm-8 col-8 v-center">
                <p class="article-p body-text">
                  At the forefront of societal transformation stand
                  communication majors, wielding the power of advocacy and
                  storytelling to ignite change. Through compelling narratives
                  and strategic messaging, they champion causes, from
                  environmental sustainability...
                </p>
                <a class="readmore body-text" href="#">CONTINUE READING </a>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 col-sm-12 article-padding">
            <p class="article-date subheader3-text">7 Sep 23</p>
            <h4 class="article-title yellow">
              Social Media Savvy: Communications Majors Lead
            </h4>

            <div class="row">
              <div
                class="col-md-4 col-sm-4 col-4 center arrow-container-right-yellow img"
              >
                <img
                  class="arrow-effect-image image-border-yellow"
                  src="Images/placeholder_image.webp"
                  alt=""
                />
              </div>
              <div class="col-md-8 col-sm-8 col-8 v-center">
                <p class="article-p body-text">
                  In today's digital realm, communication leaders, particularly
                  those majoring in communications, are the driving force behind
                  online discourse. With a keen understanding of audience
                  behavior and the power of social platforms, they not...
                </p>
                <a class="readmore body-text" href="#">CONTINUE READING </a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 article-padding">
            <p class="article-date subheader3-text">19 Aug 23</p>
            <h4 class="article-title yellow">
              Driving Change: Communications Majors' Impact
            </h4>

            <div class="row section2-row">
              <div
                class="col-md-4 col-sm-4 col-4 center arrow-container-right-yellow img"
              >
                <img
                  class="arrow-effect-image image-border-yellow"
                  src="Images/placeholder_image.webp"
                  alt=""
                />
              </div>
              <div class="col-md-8 col-sm-8 col-8 v-center">
                <p class="article-p body-text">
                  At the forefront of societal transformation stand
                  communication majors, wielding the power of advocacy and
                  storytelling to ignite change. Through compelling narratives
                  and strategic messaging, they champion causes, from
                  environmental sustainability...
                </p>
                <a class="readmore body-text" href="#">CONTINUE READING </a>
              </div>
            </div>
          </div>
        </div>


        <div class="text-center">
          <a class="btn body-text" href="#">More</a>
        </div>
      </div>

    </section> -->
<?php get_footer(); ?>