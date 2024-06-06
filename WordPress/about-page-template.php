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
                <div class="offset-lg-1 col-lg-4 col-md-6 col-xs-4 sm-img d-flex order-media order-2 arrow-container-left-pink align-self-center">
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
                        <div class="card-pink d-flex flex-column">
                            <h3 class="H3-text m-0 order-1 px-3">
                                <?php the_field("section_2_card_1_title"); ?>
                            </h3>
                            <h4 class="subheader2-text order-2 px-3 py-0 my-0">
                                <?php the_field("section_2_card_1_major"); ?>
                            </h4>
                            <p class="order-3 p-3 py-0 my-0">
                                <?php the_field("section_2_card_1_paragraph"); ?>
                            </p>
                            <img src="<?php the_field("section_2_card_1_image"); ?>" alt="" class="br-sm ar-1 object-fit-cover pos-left order-0 sm-img mb-4" />
                        </div>
                    </div>
                    <!-- About Card -->
                    <div class="col-md-6 mb-3">
                        <div class="card-orange d-flex flex-column h-100">
                            <h3 class="H3-text m-0 order-1 px-3">
                                <?php the_field("section_2_card_2_title"); ?>
                            </h3>
                            <h4 class="subheader2-text order-2 px-3 py-0 my-0">
                                <?php the_field("section_2_card_2_major"); ?>
                            </h4>
                            <p class="order-3 p-3 py-0 my-0">
                                <?php the_field("section_2_card_2_paragraph"); ?>
                            </p>
                            <img src="<?php the_field("section_2_card_2_image"); ?>" alt="" class="br-sm ar-1 object-fit-cover pos-top order-0 sm-img mb-4" />
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
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_1_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_1_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_1_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-pink" src="<?php the_field("section_3_card_1_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-pink">"</span><?php the_field("section_3_card_1_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 2 -->
                    <div class="card card-orange col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_2_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_2_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_2_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-orange" src="<?php the_field("section_3_card_2_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-orange">"</span><?php the_field("section_3_card_2_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 3 -->
                    <div class="card card-yellow col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_3_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_3_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_3_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-yellow" src="<?php the_field("section_3_card_3_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-yellow">"</span><?php the_field("section_3_card_3_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 4 -->
                    <div class="card card-pink col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_4_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_4_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_4_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-pink" src="<?php the_field("section_3_card_4_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-pink">"</span><?php the_field("section_3_card_4_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 5 -->
                    <div class="card card-orange col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_5_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_5_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_5_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-orange" src="<?php the_field("section_3_card_5_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-orange">"</span><?php the_field("section_3_card_5_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 6 -->
                    <div class="card card-yellow col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_6_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_6_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_6_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-yellow" src="<?php the_field("section_3_card_6_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-yellow">"</span><?php the_field("section_3_card_6_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 7 -->
                    <div class="card card-pink col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_7_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_7_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_7_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-pink" src="<?php the_field("section_3_card_7_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-pink">"</span><?php the_field("section_3_card_7_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 8 -->
                    <div class="card card-orange col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_8_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_8_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_8_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-orange" src="<?php the_field("section_3_card_8_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-orange">"</span><?php the_field("section_3_card_8_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 9 -->
                    <div class="card card-yellow col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0">
                                    <h3 class="sm-heading m-0"><?php the_field("section_3_card_9_name"); ?></h3>
                                </h3>
                                <p class="m-0"><?php the_field("section_3_card_9_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_9_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-yellow" src="<?php the_field("section_3_card_9_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-yellow">"</span><?php the_field("section_3_card_9_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 10 -->
                    <div class="card card-pink col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_10_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_10_title"); ?></p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-pink" src="<?php the_field("section_3_card_10_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-pink">"</span><?php the_field("section_3_card_10_paragraph"); ?>
                        </p>
                    </div>
                    <!-- Testimonial Card 11 -->
                    <div class="card card-orange col-8 col-md-5 p-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="order-1">
                                <h3 class="sm-heading m-0"><?php the_field("section_3_card_11_name"); ?></h3>
                                <p class="m-0"><?php the_field("section_3_card_11_title"); ?></p>
                                <p class="m-0">
                                    <?php the_field("section_3_card_11_employer"); ?>
                                </p>
                            </div>
                            <img class="order-0 mr-2 align-self-center testimonial-img testimonial-img-orange" src="<?php the_field("section_3_card_11_image"); ?>" alt="" />
                        </div>
                        <p class="order-0 mb-3 mt-auto">
                            <span class="H3-text quote-orange">"</span><?php the_field("section_3_card_11_paragraph"); ?>
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
                    <a href="<?php the_field("section_4_button_link"); ?>" class="btn btn-sm mt-0 px-3"><?php the_field("section_4_button_text"); ?></a>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-6 col-xs-4 sm-img d-flex order-media order-2 arrow-container-left-orange2">
                    <img src="<?php the_field("section_4_image"); ?>" class="ar-1 object-fit-cover pos-left" alt="Image" />
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>