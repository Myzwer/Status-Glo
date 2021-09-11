<?php
/**
 * Template Name: Services
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
              rgba(0, 150, 238, 0.25),
              rgba(0, 68, 216, 0.25)
            ); height: 60vh;">
            <div class="content-middle text-black text-center">
                <h1 class="text-3xl md:text-7xl md:mb-3"><?php the_sub_field('title_line_1'); ?></h1>
                <h1 class="text-3xl md:text-7xl mb-3"><?php the_sub_field('title_line_2'); ?></h1>
                <h2 class="text-lg px-5 md:text-xl my-5 mx-auto leading-5 md:w-2/5 md:max-w-2xl body-font"><?php the_sub_field('subtitle'); ?></h2>
                <a href="<?php the_sub_field('button_link'); ?>"
                   class="bg-orange rounded-full font-bold shadow-xl text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover mt-10">
                    <?php the_sub_field('button_text'); ?>
                </a>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="bg-white pb-16">
        <div class="mx-4 md:mx-10 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
            <div class="col-span-12 text-center my-5">
                <h2 class="text-5xl"><?php the_field('packages_title'); ?></h2>
            </div>
            <div class="grid grid-cols-12 gap-4 mt-6">

                <?php if (have_rows('package_1')): ?>
                    <?php while (have_rows('package_1')): the_row(); ?>

                        <div class="col-span-12 md:col-span-6 lg:col-span-3 card-gradient-1 rounded-xl shadow-2xl text-white">
                            <div class="rounded-t-xl py-7">
                            </div>
                            <div class="text-center p-5">
                                <h2 class="text-3xl text-left"><?php the_sub_field('package_title'); ?></h2>
                                <p class="text-left leading-5"><?php the_sub_field('package_description'); ?></p>
                                <div class="my-5">
                                    <a href="<?php the_sub_field('button_link'); ?>"
                                       class="rounded-full font-bold block border-2 border-white text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-light">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                </div>

                                <div class="py-2 text-left">
                                    <?php
                                    if (have_rows('highlighted_features')):
                                        while (have_rows('highlighted_features')) : the_row(); ?>
                                            <p>
                                                <i class="fas fa-check-circle text-blue-dark"></i> <?php the_sub_field('feature'); ?>
                                            </p>
                                        <?php endwhile;
                                    endif; ?>
                                </div>

                                <hr class=" m-auto">

                                <div class="py-2 text-left">
                                    <?php
                                    if (have_rows('other_features')):
                                        while (have_rows('other_features')) : the_row(); ?>
                                            <p>+ <?php the_sub_field('feature'); ?> </p>
                                        <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('package_2')): ?>
                    <?php while (have_rows('package_2')): the_row(); ?>

                        <div class="col-span-12 md:col-span-6 lg:col-span-3 card-gradient-1 rounded-xl shadow-2xl text-white lg:-my-3">
                            <div class="bg-orange rounded-t-xl py-3">
                                <h3 class="text-xl text-center">Most Popular!</h3>
                            </div>
                            <div class="text-center p-5">
                                <h2 class="text-3xl text-left"><?php the_sub_field('package_title'); ?></h2>
                                <p class="text-left leading-5"><?php the_sub_field('package_description'); ?></p>
                                <div class="my-5">
                                    <a href="<?php the_sub_field('button_link'); ?>"
                                       class="rounded-full font-bold block border-2 border-white text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-light">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                </div>

                                <div class="py-2 text-left">
                                    <?php
                                    if (have_rows('highlighted_features')):
                                        while (have_rows('highlighted_features')) : the_row(); ?>
                                            <p>
                                                <i class="fas fa-check-circle text-blue-dark"></i> <?php the_sub_field('feature'); ?>
                                            </p>
                                        <?php endwhile;
                                    endif; ?>
                                </div>

                                <hr class=" m-auto">

                                <div class="py-2 text-left">
                                    <?php
                                    if (have_rows('other_features')):
                                        while (have_rows('other_features')) : the_row(); ?>
                                            <p>+ <?php the_sub_field('feature'); ?> </p>
                                        <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('package_3')): ?>
                    <?php while (have_rows('package_3')): the_row(); ?>

                        <div class="col-span-12 md:col-span-6 lg:col-span-3 card-gradient-1 rounded-xl shadow-2xl text-white">
                            <div class="rounded-t-xl py-7">
                            </div>
                            <div class="text-center p-5">
                                <h2 class="text-3xl text-left"><?php the_sub_field('package_title'); ?></h2>
                                <p class="text-left leading-5"><?php the_sub_field('package_description'); ?></p>
                                <div class="my-5">
                                    <a href="<?php the_sub_field('button_link'); ?>"
                                       class="rounded-full font-bold block border-2 border-white text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-light">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                </div>

                                <div class="py-2 text-left">
                                    <?php
                                    if (have_rows('highlighted_features')):
                                        while (have_rows('highlighted_features')) : the_row(); ?>
                                            <p>
                                                <i class="fas fa-check-circle text-blue-dark"></i> <?php the_sub_field('feature'); ?>
                                            </p>
                                        <?php endwhile;
                                    endif; ?>
                                </div>

                                <hr class=" m-auto">

                                <div class="py-2 text-left">
                                    <?php
                                    if (have_rows('other_features')):
                                        while (have_rows('other_features')) : the_row(); ?>
                                            <p>+ <?php the_sub_field('feature'); ?> </p>
                                        <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('package_4')): ?>
                    <?php while (have_rows('package_4')): the_row(); ?>

                        <div class="col-span-12 md:col-span-6 lg:col-span-3 card-gradient-1 rounded-xl shadow-2xl text-white">
                            <div class="rounded-t-xl py-7">
                            </div>
                            <div class="text-center p-5">
                                <h2 class="text-3xl text-left"><?php the_sub_field('package_title'); ?></h2>
                                <p class="text-left leading-5"><?php the_sub_field('package_description'); ?></p>
                                <div class="my-5">
                                    <a href="<?php the_sub_field('button_link'); ?>"
                                       class="rounded-full font-bold block border-2 border-white text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-light">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                </div>

                                <div class="py-2 text-left">
                                    <?php
                                    if (have_rows('highlighted_features')):
                                        while (have_rows('highlighted_features')) : the_row(); ?>
                                            <p>
                                                <i class="fas fa-check-circle text-blue-dark"></i> <?php the_sub_field('feature'); ?>
                                            </p>
                                        <?php endwhile;
                                    endif; ?>
                                </div>

                                <hr class=" m-auto">

                                <div class="py-2 text-left">
                                    <?php
                                    if (have_rows('other_features')):
                                        while (have_rows('other_features')) : the_row(); ?>
                                            <p>+ <?php the_sub_field('feature'); ?> </p>
                                        <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php if (have_rows('background_image')): ?>
    <?php while (have_rows('background_image')): the_row(); ?>
        <div class="inline-background" style="background: linear-gradient(
                rgba(0, 0, 0, 0.<?php the_sub_field('tinting'); ?>),
                rgba(0, 0, 0, 0.<?php the_sub_field('tinting'); ?>)
                ), url('<?php the_sub_field('background_image'); ?>') no-repeat <?php the_sub_field('v_position'); ?> <?php the_sub_field('h_position'); ?> fixed;
                ">
    <?php endwhile; ?>
<?php endif; ?>
    <div class="pb-10">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:text-center lg:mx-auto pt-10">
            <div class="col-span-12 md:text-center my-5 text-white py-10">
                <h2 class="text-5xl text-center text-white pb-5"><?php the_field('area_title'); ?></h2>
                <h3 class="body-font font-bold text-2xl"><?php the_field('area_subtitle'); ?></h3>
                <p><?php the_field('area_body_text'); ?></p>
            </div>
        </div>
    </div>
    </div>

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
          rgba(0, 150, 238, 0.25),
          rgba(0, 68, 216, 0.25)
        );">
        <div class="mx-4 md:mx-10 lg:max-w-3xl lg:mx-auto py-10">
            <h1 class="text-5xl md:text-6xl md:text-7xl mb-3 text-center"><?php the_field('about_title'); ?></h1>
            <h3 class="body-font font-bold text-xl md:text-2xl pb-4"><?php the_field('about_subtitle'); ?></h3>
            <p class="leading-5 pb-4"><?php the_field('about_paragraph'); ?></p>
            <p class="leading-5 text-right"><?php the_field('signature_line_1'); ?></p>
            <p class="leading-5 pb-4 text-right"><?php the_field('signature_line_2'); ?></p>

        </div>
    </div>


<?php
get_footer();