<?php
/**
 * Template Name: Contact
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
            <div class="grid grid-cols-12 gap-4">
                <?php if (have_rows('button_card')): ?>
                    <?php while (have_rows('button_card')): the_row(); ?>
                        <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl mb-10">
                            <div class="text-center p-5 md:p-10 text-white">
                                <h2 class="text-3xl text-left"><?php the_sub_field('title'); ?></h2>
                                <p class="text-left mb-5"><?php the_sub_field('body_text'); ?></p>
                                <a href="<?php the_sub_field('button_link'); ?>"
                                   class="bg-orange rounded-full font-bold shadow-xl text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover mt-10">
                                    <?php the_sub_field('button_text'); ?>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="col-span-12 md:col-span-8 card-gradient-1 rounded-xl shadow-2xl">
                    <div class="text-left p-5 md:p-10 text-white form">
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <div class="grid grid-cols-12 gap-4">
                        <?php if (have_rows('button_card_2')): ?>
                            <?php while (have_rows('button_card_2')): the_row(); ?>
                                <div class="col-span-12">
                                    <div class="card-gradient-1 rounded-xl shadow-2xl">
                                        <div class="text-left p-10 text-white">
                                            <h2 class="text-3xl text-left"><?php the_sub_field('title'); ?></h2>
                                            <p class="text-left"><a
                                                        href="tel:<?php the_sub_field('phone_number'); ?>"><i
                                                            class="fas fa-phone text-xl"></i>
                                                    <?php the_sub_field('phone_number'); ?></a></p>
                                            <p class="text-left"><a href="mailto:<?php the_sub_field('email'); ?>"><i
                                                            class="far fa-envelope"></i> <?php the_sub_field('email'); ?>
                                                </a></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('button_card_3')): ?>
                            <?php while (have_rows('button_card_3')): the_row(); ?>
                                <div class="col-span-12">
                                    <div class="card-gradient-1 rounded-xl shadow-2xl">
                                        <div class="text-left p-10 text-white">
                                            <h2 class="text-3xl text-left"><?php the_sub_field('title'); ?></h2>
                                            <p class="text-left font-bold leading-5 pb-3"><?php the_sub_field('subtitle'); ?></p>
                                            <p class="text-left"><a href="mailto:<?php the_sub_field('email'); ?>"><i
                                                            class="far fa-envelope"></i> <?php the_sub_field('email'); ?>
                                                </a></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();