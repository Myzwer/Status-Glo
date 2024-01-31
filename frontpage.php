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
        <video class="header-video opacity-50 md:opacity-70" src="<?php the_sub_field('background_video') ?> " autoplay
               loop playsinline muted></video>
        <div class="viewport-header">
            <div class="content-middle text-black text-center">
                <h1 class="text-6xl md:text-7xl mb-3"><?php the_sub_field('main_title'); ?></h1>
                <hr class="text-black w-2/4 m-auto">
                <h2 class="text-xl md:text-2xl px-5 my-5 mx-auto leading-5 body-font font-bold"><?php the_sub_field('subtitle'); ?></h2>
                <a href="<?php the_sub_field('button_link'); ?>"
                   class="bg-orange rounded-full font-bold shadow-xl text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover mt-10">
                    <?php the_sub_field('button_text'); ?>
                </a>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


    <div class="white-gradient py-10">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:text-center lg:mx-auto pt-10">
            <div class="col-span-12 text-center my-5">
                <h2 class="text-5xl"><?php the_field('services_title'); ?></h2>
            </div>

            <?php if (have_rows('button_card')): ?>
                <?php while (have_rows('button_card')): the_row(); ?>
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl">
                            <div class="text-center text-white p-8">
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


            <div class="grid grid-cols-12 gap-4 mt-6 pb-10">
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

    <div class="card-gradient-1 py-20">
        <div class="lg:max-w-5xl mx-auto grid grid-cols-12 p-5 py-10 gap-4 md:gap-10 ">
            <div class="col-span-12 md:col-span-6 relative">
                <div class="content-middle-medium">
                <h3 class="text-4xl">What our</h3>
                <h2 class="text-5xl pb-5 font-bold">Clients Say</h2>
                <p class="text-xl">Here's what our customers had to say about Status Glo Cleaning.</p>
                </div>
            </div>

            <div class="col-span-12 md:col-span-6">
                <div class="glide relative">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <?php
                            if (have_rows('reviews')):
                                while (have_rows('reviews')) : the_row(); ?>
                                    <li class="glide__slide">
                                        <div class="text-8xl">"</div>
                                        <div class="text-md -mt-10 mb-3">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="prose-lg">
                                            <?php the_sub_field("review"); ?>
                                        </div>
                                        <p class="font-bold text-xl pt-2"><?php the_sub_field("name"); ?></p>
                                    </li>
                                <?php endwhile;
                            endif; ?>
                        </ul>
                    </div>
                    <!-- Start Arrows -->
                    <div class="pt-5">
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                <i class="far fa-angle-left"></i>
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                <i class="far fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- End Arrows -->
                </div>
                <!-- End Glider -->
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