<?php
/**
 * Template Name: Apply
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Status_glo
 * @since 1.0.0
 */

get_header(); ?>
<?php if (have_rows('header')): ?>
    <?php while (have_rows('header')): the_row(); ?>
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 150, 238, 0.<?php the_sub_field('tinting'); ?>),
                rgba(0, 68, 216, 0.<?php the_sub_field('tinting'); ?>)
                ), url('<?php the_sub_field('background_image'); ?>') <?php the_sub_field('v_position'); ?> <?php the_sub_field('h_position'); ?>;
                height: 40vh;">
            <div class="content-middle text-white text-center">
                <h1 class="text-6xl md:text-7xl mb-3"><?php the_sub_field('main_title'); ?></h1>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="bg-white pb-10">
        <div class="mx-4 md:mx-10 lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl mb-10">
                    <div class="p-5 md:px-10 md:pb-5 text-white">
                        <h2 class="text-3xl text-left"><?php the_field('title_1'); ?></h2>
                        <p class="text-left"><?php the_field('paragraph_1'); ?></p>
                    </div>
                    <div class="p-5 md:px-10 md:pb-2 text-white">
                        <h2 class="text-3xl text-left"><?php the_field('title_2'); ?></h2>

                        <!-- Start Repeater -->
                        <ul class="text-left">
                            <?php if (have_rows('values')):
                                // Loop through rows.
                                while (have_rows('values')) : the_row(); ?>
                                    <li><?php the_sub_field("value_single"); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <!-- End Repeater -->

                    </div>
                    <div class="p-5 md:px-10 md:pb-10 text-left">
                        <?php if (have_rows('apply_button')): ?>
                            <?php while (have_rows('apply_button')): the_row(); ?>
                                <a href="<?php the_sub_field('button_link'); ?>"
                                   class="bg-orange rounded-full font-bold shadow-xl text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover mt-10">
                                    <?php the_sub_field('button_text'); ?>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
          rgba(0, 150, 238, 0.25),
          rgba(0, 68, 216, 0.25)
        );">
        <div class="mx-4 md:mx-10 lg:max-w-3xl lg:mx-auto py-10">
            <h3 class="text-2xl md:text-3xl mb-3 text-left"><?php the_field('title_3'); ?></h3>
            <!-- Start Repeater -->
            <ul class="list-disc pb-10">
                <?php if (have_rows('requirements_1')):
                    // Loop through rows.
                    while (have_rows('requirements_1')) : the_row(); ?>
                        <li><?php the_sub_field("requirement_single"); ?></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <!-- End Repeater -->

            <h3 class="text-2xl md:text-3xl mb-3 text-left"><?php the_field('title_4'); ?></h3>
            <!-- Start Repeater -->
            <ul class="list-disc">
                <?php if (have_rows('requirements_2')):
                    // Loop through rows.
                    while (have_rows('requirements_2')) : the_row(); ?>
                        <li><?php the_sub_field("requirements_single"); ?></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <!-- End Repeater -->

        </div>
    </div>

    <div class="bg-white pb-10">
        <div class="mx-4 md:mx-10 lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl mb-10">
                    <div class="p-5 md:px-10 md:pb-2 text-white">
                        <h2 class="text-3xl text-left pb-3"><?php the_field('title_5'); ?></h2>
                        <!-- Start Repeater -->
                        <ul class="text-left list-disc">
                            <?php if (have_rows('benefits')):
                                // Loop through rows.
                                while (have_rows('benefits')) : the_row(); ?>
                                    <li><?php the_sub_field("benefits_single"); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <!-- End Repeater -->
                    </div>
                    <div class="p-5 md:px-10 md:pb-10 text-left">
                        <?php if (have_rows('apply_button')): ?>
                            <?php while (have_rows('apply_button')): the_row(); ?>
                                <a href="<?php the_sub_field('button_link'); ?>"
                                   class="bg-orange rounded-full font-bold shadow-xl text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover mt-10">
                                    <?php the_sub_field('button_text'); ?>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();