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
                    <div class="d-flex justify-content-start">
                        <a href="<?php the_field("section_1_button_1_link"); ?>" class="btn px-3 mt-0 btn-sm mr-3"><?php the_field("section_1_button_1_text"); ?></a>
                        <a href="<?php the_field("section_1_button_2_link"); ?>" class="btn px-3 mt-0 btn-sm mr-3"><?php the_field("section_1_button_1_text"); ?></a>
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-4 col-md-6 col-xs-4 sm-img d-flex order-media order-2 arrow-container-left-pink align-self-center">
                    <img src="<?php the_field("section_1_image"); ?>" class="ar-1 object-fit-cover" alt="" />
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
                                <h3 class="subheader1-text m-0"><?php the_field("section_2_card_1_name"); ?></h3>
                                <p class="sm-heading m-0">
                                <?php the_field("section_2_card_1_job"); ?>
                                </p>
                                <p class="m-0"><?php the_field("section_2_card_1_major"); ?></p>
                            </div>
                            <a href="<?php the_field("section_2_card_1_link"); ?>" class="p-3 mt-auto ml-auto accent-link">See More</a>
                        </div>
                        <div class="p-0">
                            <img src="<?php the_field("section_2_card_1_image"); ?>" alt="" class="ar-1 object-fit-cover mb-2 pos-top w-100 p-0 br-sm" />
                            <p class="order-0 mb-3 mt-auto p-3">
                                <span class="H3-text quote-pink">"</span><?php the_field("section_2_card_1_paragraph"); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Opportunities Card 2 -->
                    <div class="card card-orange p-0 col-10 col-lg-5 mb-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="p-3 pr-0">
                                <h3 class="subheader1-text m-0">
                                <?php the_field("section_2_card_2_name"); ?>
                                </h3>
                                <p class="sm-heading m-0">
                                <?php the_field("section_2_card_2_job"); ?>
                                </p>
                                <p class="m-0">
                                <?php the_field("section_2_card_2_major"); ?>
                                </p>
                            </div>
                            <a href="<?php the_field("section_2_card_2_link"); ?>" class="p-3 mt-auto ml-auto accent-link">See More</a>
                        </div>
                        <div class="p-0">
                            <img src="<?php the_field("section_2_card_2_image"); ?>" alt="" class="ar-1 object-fit-cover mb-2 pos-top w-100 p-0 br-sm" />
                            <p class="order-0 mb-3 mt-auto p-3">
                                <span class="H3-text quote-orange">"</span>
                                <?php the_field("section_2_card_2_paragraph"); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Opportunities Card 3 -->
                    <div class="card card-yellow p-0 col-10 col-lg-5 mb-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="p-3 pr-0">
                                <h3 class="subheader1-text m-0">
                                <?php the_field("section_2_card_3_name"); ?>
                                </h3>
                                <p class="sm-heading m-0"><?php the_field("section_2_card_3_job"); ?></p>
                                <p class="m-0">
                                <?php the_field("section_2_card_3_major"); ?>
                                </p>
                            </div>
                            <a href="<?php the_field("section_2_card_3_link"); ?>" class="p-3 mt-auto ml-auto accent-link">See More</a>
                        </div>
                        <div class="p-0">
                            <img src="<?php the_field("section_2_card_3_image"); ?>" alt="" class="ar-1 object-fit-cover mb-2 pos-top w-100 p-0 br-sm" />
                            <p class="order-0 mb-3 mt-auto p-3">
                                <span class="H3-text quote-yellow">"</span>
                                <?php the_field("section_2_card_3_paragraph"); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Opportunities Card 4 -->
                    <div class="card card-pink p-0 col-10 col-lg-5 mb-3">
                        <div class="order-1 d-flex mt-auto">
                            <div class="p-3 pr-0 w-100">
                                <h3 class="subheader1-text m-0">
                                <?php the_field("section_2_card_4_name"); ?>
                                </h3>
                                <p class="sm-heading m-0"><?php the_field("section_2_card_4_job"); ?></p>
                                <p class="m-0"><?php the_field("section_2_card_4_major"); ?></p>
                            </div>
                            <a href="<?php the_field("section_2_card_4_link"); ?>" class="p-3 mt-auto accent-link">See More</a>
                        </div>
                        <div class="p-0">
                            <img src="<?php the_field("section_2_card_4_image"); ?>" alt="" class="ar-1 object-fit-cover mb-2 pos-right w-100 p-0 br-sm" />
                            <p class="order-0 mb-3 mt-auto p-3">
                                <span class="H3-text quote-pink">"</span>
                                <?php the_field("section_2_card_4_paragraph"); ?>
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
                            <?php the_field("section_3_card_1_job"); ?>
                        </h3>
                        <p class="order-2 px-3 pb-3 mb-0">
                        <?php the_field("section_3_card_1_paragraph"); ?>
                        </p>
                        <img class="order-0 about-project-img br-sm career-img" src="<?php the_field("section_3_card_1_image"); ?>" alt="" />
                    </div>
                    <!-- Career Card 2 -->
                    <div class="card card-orange col-8 col-md-5 border-0 p-0">
                        <h3 class="subheader1-text mb-2 order-1 p-3 py-0 mb-0">
                        <?php the_field("section_3_card_2_job"); ?>
                        </h3>
                        <p class="order-2 px-3 pb-3 mb-0">
                        <?php the_field("section_3_card_2_paragraph"); ?>
                        </p>
                        <img class="order-0 about-project-img  br-sm career-img" src="<?php the_field("section_3_card_2_image"); ?>" alt="" />
                    </div>
                    <!-- Career Card 3 -->
                    <div class="card card-yellow col-8 col-md-5 border-0 p-0">
                        <h3 class="subheader1-text mb-2 order-1 p-3 py-0 mb-0">
                        <?php the_field("section_3_card_3_job"); ?>
                        </h3>
                        <p class="order-2 px-3 pb-3 mb-0">
                        <?php the_field("section_3_card_3_paragraph"); ?>
                        </p>
                        <img class="order-0 about-project-img  br-sm career-img" src="<?php the_field("section_3_card_3_image"); ?>" alt="" />
                    </div>
                    <!-- Career Card 4 -->
                    <div class="card card-pink col-8 col-md-5 border-0 p-0">
                        <h3 class="subheader1-text  order-1 p-3 py-0 mb-0">
                            <?php the_field("section_3_card_4_job"); ?>
                        </h3>
                        <p class="order-2 px-3 pb-3 mb-0">
                            <?php the_field("section_3_card_4_paragraph"); ?>                
                        </p>
                        <img class="order-0 about-project-img  br-sm career-img pos-left" src="<?php the_field("section_3_card_4_image"); ?>" alt="" />
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
                <div class="offset-lg-1 col-lg-4 col-md-6 col-xs-4 sm-img d-flex order-media order-2 sm-img arrow-container-left-orange2">
                    <img src="<?php the_field("section_4_image"); ?>" class="ar-1 object-fit-cover pos-mid" alt="Image" />
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>