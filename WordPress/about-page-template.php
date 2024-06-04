<?php
/*
Template Name: About
*/
?>

<?php require_once('small-header.php'); ?>
<main class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <!-- History of the Communication Collective -->
            <section class="row mt-5 mb-5">
                <div class="col-md-6 order-1">
                    <h2 class="H2-text mb-3">
                        <?php the_field("section_1_title"); ?>
                    </h2>
                    <p class="mb-3">
                        <?php the_field("section_1_paragraph"); ?>
                    </p>
                </div>
                <div class="col-md-6 col-xs-4 sm-img d-flex order-media order-2 arrow-container-left-pink align-self-center">
                    <img src="<?php the_field("section_1_image"); ?>" class="ar-1 object-fit-cover" alt="Image" />
                </div>
            </section>

            <!-- What We Do -->
            <section class="mt-5 mb-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <h2 class="mb-0"><?php the_field("section_2_title"); ?></h2>
                        <p class="H3-text mb-3"><?php the_field("section_2_subheading"); ?></p>
                        <p class="mb-3">
                            <?php the_field("section_2_paragraph"); ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <!-- About Card -->
                    <div class="col-md-6 mb-3">
                        <div class="card card-pink d-flex flex-column">
                            <h3 class="H3-text m-0 order-1 px-3">
                                Valuing Children Initiative
                            </h3>
                            <h4 class="subheader2-text order-2 px-3 py-0 my-0">
                                Strategic Communications
                            </h4>
                            <p class="order-3 p-3 py-0 my-0">
                                The COM307 work-integrated learning unit was
                                tasked with a project for the Valuing Children
                                Initiative. The brief was to change the way West
                                Australians value children using sport. Innovative
                                ideas were developed for different target
                                audiences, including pre-natal and newborns (0-4
                                years old), children (5-14 years old), teenagers
                                (15-19), and young adults (20-24 years old).
                            </p>
                            <img src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/about_3.webp" alt="#" class="br-sm ar-1 object-fit-cover pos-left order-0 sm-img mb-4" />
                        </div>
                    </div>
                    <!-- About Card -->
                    <div class="col-md-6 mb-3">
                        <div class="card-orange d-flex flex-column">
                            <h3 class="H3-text m-0 order-1 px-3">
                                Murdoch Sports
                            </h3>
                            <h4 class="subheader2-text order-2 px-3 py-0 my-0">
                                Strategic Communications
                            </h4>
                            <p class="order-3 p-3 py-0 my-0">
                                As part of the work-integrated learning unit,
                                COM307, students were asked to develop a campaign
                                for the client Murdoch Sports. The brief was to
                                help the Murdoch Sports department to become
                                accredited as a FISU Healthy Campus and establish
                                a higher health and wellness culture on Murdoch
                                Universities campus.
                            </p>
                            <img src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/about_4.webp" alt="#" class="br-sm ar-1 object-fit-cover pos-top order-0 sm-img mb-4" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Student Carousel -->
            <section class="mb-5 mt-5">
                <div class="row flex-column ml-0 mb-3">
                    <h2 class="H2-text mb-0"> <?php the_field("section_3_title"); ?></h2>
                    <p class="H3-text">
                        <?php the_field("section_3_subheading"); ?>
                    </p>
                </div>
                <!-- Testimonial Carousel -->
                <div class="row flex-nowrap overflow-auto snap-scroll ml-0">
                    <!-- Testimonial Card 1 -->
                    <div class="card card-pink col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Georgia Earnshaw</h3>
                                <p class="m-0">Digital Media Adviser</p>
                                <p class="m-0">
                                    Department of the Premier and Cabinet
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-pink" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/g_earnshaw.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-pink">"</span>I had the
                            opportunity to work with real clients right from the
                            start of this strategic communications course, which
                            gave me extensive practical experience and an
                            understanding of the job opportunities this course
                            would lead to. The assignments are incredibly
                            practical, and perfectly reflect the realities of
                            strategic communications in the workforce.
                        </p>
                    </div>
                    <!-- Testimonial Card 2 -->
                    <div class="card card-orange col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Keely Lambert</h3>
                                <p class="m-0">Marketing Officer</p>
                                <p class="m-0">Cockburn ARC</p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-orange" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/k_lambert.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-orange">"</span>Through
                            incredibly supportive lecturers and academics, I was
                            equipped with the skills and confidence to take on
                            opportunities outside of the classroom. Working
                            alongside real clients on real projects provided me
                            the edge necessary to be competitive to land a dream
                            graduate marketing role.
                        </p>
                    </div>
                    <!-- Testimonial Card 3 -->
                    <div class="card card-yellow col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Lynsey Brady</h3>
                                <p class="m-0">
                                    Specialist Communications & Engagement
                                </p>
                                <p class="m-0">Rio Tinto Iron Ore</p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-yellow" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/l_brady.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-yellow">"</span>The
                            strategic communications program provided me with the
                            practical skills and knowledge to confidently kick
                            start a rewarding and fulfilling career.
                        </p>
                    </div>
                    <!-- Testimonial Card 4 -->
                    <div class="card card-pink col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Laura McLean</h3>
                                <p class="m-0">Senior Consultant</p>
                                <p class="m-0">Cannings Purple</p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-pink" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/l_mclean.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-pink">"</span> This course
                            laid the perfect foundations for my career in
                            communications. The opportunity to understand the
                            theory behind topics like crisis management, content
                            creation and strategic planning, paired with the
                            practical experience from the workplace learning
                            program allowed me to transition from uni to the
                            industry with ease.
                        </p>
                    </div>
                    <!-- Testimonial Card 5 -->
                    <div class="card card-orange col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Sameera Afzaal</h3>
                                <p class="m-0">Digital Communications Officer</p>
                                <p class="m-0">Public Transport Authority</p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-orange" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/s_afzaal.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-orange">"</span> The
                            strategic communications course provided relevant
                            foundations for tactical decision-making in the
                            ever-evolving field of marketing. I still apply these
                            strategies to a diverse range of clients many years
                            later
                        </p>
                    </div>
                    <!-- Testimonial Card 6 -->
                    <div class="card card-yellow col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Stephanie Dawson</h3>
                                <p class="m-0">
                                    Media and Communications Officer
                                </p>
                                <p class="m-0">Murdoch University</p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-yellow" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/s_dawson.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-yellow">"</span>From
                            practical assessments to real-world clients to
                            internships, the strategic communications course
                            offers so much experience and builds the essential
                            skills you'll need in any communications job, no
                            matter where you work. Topics like crisis
                            communication, stakeholder consultation, media
                            liaison and interviewing, and the importance of
                            social media have been so incredibly helpful in my
                            role. The course broadened my skillset and experience
                            so I can find job opportunities in many different
                            areas
                        </p>
                    </div>
                    <!-- Testimonial Card 7 -->
                    <div class="card card-pink col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Anthony Deceglie</h3>
                                <p class="m-0">Editor in Chief</p>
                                <p class="m-0">
                                    West Australian Newspaper at Seven West Media
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-pink" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/a_deceglie.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-pink">"</span> We are
                            really proud of the students that have come from
                            Murdoch University and they have quickly risen up the
                            ranks of our newsroom in senior roles. Some of them
                            are journalists looking after entire suburban
                            newspapers and some of them are running our website
                            at night on their own.
                        </p>
                    </div>
                    <!-- Testimonial Card 8 -->
                    <div class="card card-orange col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Eamon Holley</h3>
                                <p class="m-0">Celebrity Producer</p>
                                <p class="m-0">
                                    British GQ, Vogue, Conde Nast Publications
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-orange" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/e_holley.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-orange">"</span> The
                            Strategic Communications course provided the ability
                            to develop skills and the critical insights necessary
                            to navigate and adapt to the ever-evolving media
                            landscape. With incredible facility support and
                            invaluable practical experience, the versatility of
                            the course content has allowed me to work across a
                            range of fields including corporate agency,
                            television, publishing and events on an international
                            scale
                        </p>
                    </div>
                    <!-- Testimonial Card 9 -->
                    <div class="card card-yellow col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">
                                    Indigo Lemay-Conway
                                </h3>
                                <p class="m-0">Journalist and Music Reviewer</p>
                                <p class="m-0">
                                    The West Australian and PerthNow
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-yellow" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/e_conway.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-yellow">"</span>
                            Journalism as a career was one of the best moves I
                            ever made. If you are going to study journalism at
                            Murdoch University, just go in with an open mind,
                            because this degree opens doors that you didn't see
                            coming.
                        </p>
                    </div>
                    <!-- Testimonial Card 10 -->
                    <div class="card card-pink col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">Rachel Ingram</h3>
                                <p class="m-0">Retail Manager</p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-pink" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/r_ingram.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-pink">"</span> The Global
                            Media and Communication course gave me an
                            understanding of audience behaviours, including how
                            the power of communication can and does impact on
                            society. The research skills that I gained from my
                            degree enable me to deeply analyse texts and question
                            their authenticity.
                        </p>
                    </div>
                    <!-- Testimonial Card 11 -->
                    <div class="card card-orange col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">James Threlfall</h3>
                                <p class="m-0">Digital Experience Designer</p>
                                <p class="m-0">Murdoch University</p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-orange" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Testimonials/j_threfall.webp" alt="Portrait" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-orange">"</span> The web
                            communications major and its varied units gave me a
                            dynamic foundation applicable to many business areas.
                            Its broad range of electives from public relations to
                            web strategy taught me the value of understanding
                            different perspectives which I was able to easily
                            apply in the workplace, impressing industry
                            stakeholders and bringing fresh, modern ideas.
                        </p>
                    </div>

                    <!-- End of carousel -->
                </div>
            </section>

            <!-- Learn More -->
            <section class="row mb-5 mt-5">
                <div class="col-md-6 order-1">
                    <h2 class="H2-text mb-2"><?php the_field("section_4_title"); ?></h2>
                    <p class="mb-2">
                        <?php the_field("section_4_paragraph"); ?>
                    </p>
                    <a href="https://www.murdoch.edu.au/course/undergraduate/b1342" class="btn btn-sm mt-0 px-3">Explore your future</a>
                </div>
                <div class="col-md-6 d-flex order-media order-2 sm-img arrow-container-left-orange2">
                    <img src="<?php the_field("section_4_image"); ?>" class="ar-1 object-fit-cover pos-left" alt="Image" />
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>