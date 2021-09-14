<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Wordpack Theme
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
                height: 60vh;">
            <div class="content-middle text-black text-center">
                <h1 class="text-6xl md:text-7xl mb-3"><?php the_sub_field('main_title'); ?></h1>
                <hr class="text-blue-dark w-2/4 m-auto">
                <h2 class="text-xl md:text-2xl px-5 my-5 mx-auto leading-5 md:w-2/5 md:max-w-2lg"><?php the_sub_field('subtitle'); ?></h2>
                <a href="<?php the_sub_field('button_link'); ?>"
                   class="bg-orange rounded-full font-bold shadow-xl text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover mt-10">
                    <?php the_sub_field('button_text'); ?>
                </a>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


    <div class="bg-white pb-10">
        <div class="mx-4 md:mx-10 lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
            <div class="col-span-12 text-center my-5">
                <h2 class="text-5xl"><?php the_field('services_title'); ?></h2>
            </div>

            <?php if (have_rows('button_card')): ?>
                <?php while (have_rows('button_card')): the_row(); ?>
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl">
                            <div class="text-center text-white p-4">
                                <h2 class="text-3xl"><?php the_sub_field('title'); ?></h2>
                                <p class="text-left"><?php the_sub_field('body_text'); ?></p>
                                <div class="my-5">
                                    <a href="<?php the_sub_field('button_link'); ?>"
                                       class="bg-orange rounded-full font-bold shadow-xl text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover mt-10">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


            <div class="grid grid-cols-12 gap-4 mt-6">
                <div class="col-span-12 text-center mt-10">
                    <h2 class="text-2xl body-font uppercase font-bold"><?php the_field('services_subtitle'); ?></h2>
                </div>

                <?php if (have_rows('button_card_2')): ?>
                    <?php while (have_rows('button_card_2')): the_row(); ?>
                        <div class="col-span-12 md:col-span-6 card-gradient-1 rounded-xl shadow-2xl">
                            <div class="text-center text-white p-4">
                                <h2 class="text-3xl"><?php the_sub_field('title'); ?></h2>
                                <p class="text-left"><?php the_sub_field('body_text'); ?></p>
                                <div class="my-5">
                                    <a href="<?php the_sub_field('button_link'); ?>"
                                       class="bg-orange rounded-full font-bold shadow-xl text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('button_card_3')): ?>
                    <?php while (have_rows('button_card_3')): the_row(); ?>
                        <div class="col-span-12 md:col-span-6 card-gradient-1 rounded-xl shadow-2xl">
                            <div class="text-center text-white p-4">
                                <h2 class="text-3xl"><?php the_sub_field('title'); ?></h2>
                                <p class="text-left"><?php the_sub_field('body_text'); ?></p>
                                <div class="my-5">
                                    <a href="<?php the_sub_field('button_link'); ?>"
                                       class="bg-orange rounded-full font-bold shadow-xl text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


<div class="inline-background" style="background: linear-gradient(
        rgba(0, 0, 0, 0.45),
        rgba(0, 0, 0, 0.45)
        ), url('<?php the_field('reviews_background_image'); ?>') no-repeat center center fixed;
        ">
    <div class="pb-10">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:text-center lg:mx-auto pt-10">
            <div class="col-span-12 text-center my-5">
                <h2 class="text-5xl text-white"><?php the_field('reviews_title'); ?></h2>
            </div>
            <div class="grid grid-cols-12 mb-10 gap-4 lg:mx-4">

                <?php if (have_rows('review_1')): ?>
                    <?php while (have_rows('review_1')): the_row(); ?>
                        <div class="col-span-12 lg:col-span-4 bg-white rounded-xl shadow-2xl">
                            <div class="text-center p-4">
                                <h2 class="text-8xl text-left pt-2 pl-5 opacity-50 body-font">“</h2>
                                <p class="text-left -mt-14 leading-5"><?php the_sub_field('review'); ?></p>
                                <p class="font-bold text-left pt-3">-<?php the_sub_field('reviewer_name'); ?></p>

                                <div class="mt-5">
                                    <?php the_sub_field('stars'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('review_2')): ?>
                    <?php while (have_rows('review_2')): the_row(); ?>
                        <div class="col-span-12 lg:col-span-4 bg-white rounded-xl shadow-2xl">
                            <div class="text-center p-4">
                                <h2 class="text-8xl text-left pt-2 pl-5 opacity-50 body-font">“</h2>
                                <p class="text-left -mt-14 leading-5"><?php the_sub_field('review'); ?></p>
                                <p class="font-bold text-left pt-3">-<?php the_sub_field('reviewer_name'); ?></p>

                                <div class="mt-5">
                                    <?php the_sub_field('stars'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('review_3')): ?>
                    <?php while (have_rows('review_3')): the_row(); ?>
                        <div class="col-span-12 lg:col-span-4 bg-white rounded-xl shadow-2xl">
                            <div class="text-center p-4">
                                <h2 class="text-8xl text-left pt-2 pl-5 opacity-50 body-font">“</h2>
                                <p class="text-left -mt-14 leading-5"><?php the_sub_field('review'); ?></p>
                                <p class="font-bold text-left pt-3">-<?php the_sub_field('reviewer_name'); ?></p>

                                <div class="mt-5">
                                    <?php the_sub_field('stars'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="bg-white pb-20">
        <div class="mx-4 md:mx-10 lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
            <div class="col-span-12 text-center my-5">
                <h2 class="text-5xl mb-2"><?php the_field('about_title'); ?></h2>

                <div class="grid grid-cols-12 md:items-end">
                    <div class="col-span-9 md:col-span-5">
                        <img class=" rounded-xl shadow-2xl"
                             src="<?php the_field('headshot_photo'); ?>" alt="Owner Headshot">
                    </div>
                    <?php if (have_rows('button_card_4')): ?>
                        <?php while (have_rows('button_card_4')): the_row(); ?>
                            <div class="col-start-3 col-span-9 md:col-span-7 card-gradient-1 rounded-xl shadow-2xl -mt-20 md:-mb-10 md:-ml-20">
                                <div class="text-center text-white p-4 md:py-12">
                                    <h2 class="text-2xl text-left"><?php the_sub_field('title'); ?></h2>
                                    <p class="text-left font-bold -mt-2 mb-2"><?php the_sub_field('owner_title'); ?></p>
                                    <p class="text-left leading-4 tracking-wider"><?php the_sub_field('body_text'); ?></p>
                                    <div class="my-5">
                                        <a href="<?php the_sub_field('button_link'); ?>"
                                           class="bg-orange rounded-full font-bold shadow-xl text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover">
                                            <?php the_sub_field('button_text'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();