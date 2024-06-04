<?php
/*
Template Name: Opportunities
*/
?>
<?php require_once('small-header.php'); ?>

<main class="about-main container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <!-- Available Opportunities -->

            <section class="row mt-5 mb-5">
                <div class="col-md-6 order-1">
                    <h2 class="H2-text mb-3"><?php the_field("section_1_title"); ?></h2>
                    <p class="mb-3">
                        <?php the_field("section_1_paragraph"); ?>

                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.facebook.com/" class="btn px-3 mt-0 btn-sm mr-3">Facebook</a>
                        <a href="https://www.instagram.com/comm.collective" class="btn px-3 mt-0 btn-sm mr-3">Instagram</a>
                    </div>
                </div>

                <div class="col-md-6 col-xs-4 sm-img d-flex order-media order-2 arrow-container-left-pink align-self-center">
                    <img src="<?php the_field("section_1_image"); ?>" class="ar-1 object-fit-cover" alt="Image" />
                </div>
            </section>

            <!-- What We Do -->
            <section class="mb-5 mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center spacing-md">
                        <h2 class="my-0"><?php the_field("section_2_title"); ?></h2>
                        <h3 class="mb-3"><?php the_field("section_2_subheading"); ?></h3>
                        <p >
                            <?php the_field("section_2_paragraph"); ?>
                        </p>
                    </div>
                </div>
                <div class="row offset-md-1">
                    <!-- Opportunities Card 1 -->
                    <div class="card card-pink p-0 col-10 col-lg-5 mb-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="p-3 pr-0">
                                <h3 class="subheader1-text m-0">Elli Swanson</h3>
                                <p class="sm-heading m-0">
                                    BCW Global Copywriter
                                </p>
                                <p class="m-0">Strategic Communication</p>
                            </div>
                            <a href="https://elliswanson.wixsite.com/portfolio" class="p-3 mt-auto ml-auto accent-link">See More</a>
                        </div>
                        <div class="p-0">
                            <img src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/opportunities_3.webp" alt="#" class="ar-1 object-fit-cover mb-2 pos-top w-100 p-0 br-sm" />
                            <p class="order-0 mb-3 mt-auto p-3">
                                <span class="H3-text quote-pink">"</span>Working
                                on behalf of MESH Consultancy, I landed the
                                opportunity to intern for BCW - Global as a
                                copywriter. The client, The Rottnest Channel Swim
                                Association (RSCA), sought a copywriter for their
                                annual yearbook. In this role I researched and
                                interviewed four swimmers and created four pieces
                                of content for their 2021 Yearbook, as well as for
                                their website and social media.
                            </p>
                        </div>
                    </div>

                    <!-- Opportunities Card 2 -->
                    <div class="card card-orange p-0 col-10 col-lg-5 mb-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="p-3 pr-0">
                                <h3 class="subheader1-text m-0">
                                    Junita Nathania
                                </h3>
                                <p class="sm-heading m-0">
                                    Perth Blood Institute
                                </p>
                                <p class="m-0">
                                    Strategic Communication and Global Media &
                                    Communication
                                </p>
                            </div>
                            <a href="https://www.linkedin.com/in/junita-nathania/" class="p-3 mt-auto ml-auto accent-link">See More</a>
                        </div>
                        <div class="p-0">
                            <img src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/opportunities_4.webp" alt="#" class="ar-1 object-fit-cover mb-2 pos-top w-100 p-0 br-sm" />
                            <p class="order-0 mb-3 mt-auto p-3">
                                <span class="H3-text quote-orange">"</span>
                                Collaborating with MESH Consultancy. and Perth
                                Blood Institute, I've developed two online survey
                                designs for Thrombosis Australia, targeting the
                                community and healthcare professionals. The
                                surveys aimed to understand what is effective and
                                if there are limitations that need to be addressed
                                with the intended result of improving the
                                experience, well-being and understanding of the
                                site's visitors.
                            </p>
                        </div>
                    </div>

                    <!-- Opportunities Card 3 -->
                    <div class="card card-yellow p-0 col-10 col-lg-5 mb-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="p-3 pr-0">
                                <h3 class="subheader1-text m-0">
                                    Britney Coulson
                                </h3>
                                <p class="sm-heading m-0">The West Australian</p>
                                <p class="m-0">
                                    Journalism & Global Politics and Party
                                </p>
                            </div>
                            <a href="https://www.linkedin.com/in/britney-coulson-79b4161a0/" class="p-3 mt-auto ml-auto accent-link">See More</a>
                        </div>
                        <div class="p-0">
                            <img src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/opportunities_5.webp" alt="#" class="ar-1 object-fit-cover mb-2 pos-top w-100 p-0 br-sm" />
                            <p class="order-0 mb-3 mt-auto p-3">
                                <span class="H3-text quote-yellow">"</span>
                                Britney worked as a writer for The West Australian
                                as an Intern and scored a full-page spread in The
                                West's ANZAC Day Edition 2021. The article focuses
                                on the origins of ANZAC Day in Australia from
                                ANZAC biscuits to the importance and history of
                                commemoration on April 25th.
                            </p>
                        </div>
                    </div>

                    <!-- Opportunities Card 4 -->
                    <div class="card card-pink p-0 col-10 col-lg-5 mb-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="p-3 pr-0">
                                <h3 class="subheader1-text m-0">
                                    Jaspreet Sidhu
                                </h3>
                                <p class="sm-heading m-0">Radio Fremantle</p>
                                <p class="m-0">Journalism</p>
                            </div>
                            <a href="https://www.linkedin.com/in/jaspreet-sidhu-b78718193/" class="p-3 mt-auto accent-link">See More</a>
                        </div>
                        <div class="p-0">
                            <img src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/opportunities_6.webp" alt="#" class="ar-1 object-fit-cover mb-2 pos-right w-100 p-0 br-sm" />
                            <p class="order-0 mb-3 mt-auto p-3">
                                <span class="H3-text quote-pink">"</span>
                                Murdoch Radio's long standing relationship with
                                Radio Fremantle allowed Jaspreet to develop and
                                produce radio segments for Radio Fremantle's
                                drive-time show. In addition to contributing to
                                the 2 hour long radio segments, she was also the
                                social media manager for the weekly show.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Career Paths -->
            <section class="mt-5 mb-5">
                <div class="row flex-column ml-0 mb-3">
                    <h2><?php the_field("section_3_title"); ?></h2>
                    <h3><?php the_field("section_3_paragraph"); ?></h3>
                </div>
                <!-- Carousel -->
                <div class="row flex-nowrap overflow-auto snap-scroll ml-0">
                    <!-- Career Card 1 -->
                    <div class="card card-pink col-8 col-md-5 border-0 p-0">
                        <h3 class="subheader1-text order-1 p-3 py-0 mb-0">
                            Journalism
                        </h3>
                        <p class="order-2 px-3 pb-3 mb-0">
                            Through rigorous training and newsroom simulation
                            students hone critical thinking, communication,
                            research, media law and digital skills that open a
                            world of opportunity both in the media industry and
                            beyond.
                        </p>
                        <img class="order-0 about-project-img br-sm career-img" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Careers/journalism.webp" alt="Career" />
                    </div>
                    <!-- Career Card 2 -->
                    <div class="card card-orange col-8 col-md-5 border-0 p-0">
                        <h3 class="subheader1-text mb-2 order-1 p-3 py-0 mb-0">
                            Strategic Communication
                        </h3>
                        <p class="order-2 px-3 pb-3 mb-0">
                            The Bachelor of Communication in Strategic
                            Communication prepares students for a career
                            developing, managing, and implementing communication
                            strategies and campaigns across all sectors and
                            industries. It is accredited by Public Relations
                            Institute of Australia (PRIA).
                        </p>
                        <img class="order-0 about-project-img  br-sm career-img" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Careers/stratcom.webp" alt="Career" />
                    </div>
                    <!-- Career Card 3 -->
                    <div class="card card-yellow col-8 col-md-5 border-0 p-0">
                        <h3 class="subheader1-text mb-2 order-1 p-3 py-0 mb-0">
                            Web Communication
                        </h3>
                        <p class="order-2 px-3 pb-3 mb-0">
                            The Bachelor of Communication in Web Communication
                            combines an exciting mix of web design, digital
                            marketing, and public relations.
                        </p>
                        <img class="order-0 about-project-img  br-sm career-img" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Careers/webcom.webp" alt="Career" />
                    </div>
                    <!-- Career Card 4 -->
                    <div class="card card-pink col-8 col-md-5 border-0 p-0">
                        <h3 class="subheader1-text  order-1 p-3 py-0 mb-0">
                            Master of Communication
                        </h3>
                        <p class="order-2 px-3 pb-3 mb-0">
                            Gain comprehensive knowledge, practical skills, and
                            industry exposure in the field of communication. With
                            its commitment to excellence, industry engagement,
                            and supportive learning environment, Murdoch
                            University provides the ideal platform to embark on a
                            rewarding and successful career in the dynamic world
                            of communication.
                        </p>
                        <img class="order-0 about-project-img  br-sm career-img pos-left" src="http://170.187.231.66/~mesh20/sub/wp-content/themes/Communications-Collective/Images/Careers/mcom.webp" alt="Career" />
                    </div>
                    <!-- End of carousel -->
                </div>
            </section>

            <!-- Join The Collective -->
            <section class="row mb-5 mt-5">
                <div class="col-md-6 order-1">
                    <h2 class="H2-text mb-2"><?php the_field("section_4_title"); ?></h2>
                    <p class="mb-2">
                        <?php the_field("section_4_paragraph"); ?>
                    </p>
                </div>
                <div class="col-md-6 d-flex order-media order-2 sm-img arrow-container-left-orange2">
                    <img src="<?php the_field("section_4_image"); ?>" class="ar-1 object-fit-cover pos-mid" alt="Image" />
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>