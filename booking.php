<?php
/**
 * Template Name: Booking
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
                <div class="text-center p-5 md:p-10 text-white">
                    <?php if (have_rows('button_card')): ?>
                    <?php while (have_rows('button_card')): the_row(); ?>
                    <h2 class="text-3xl text-left"><?php the_sub_field('title'); ?></h2>
                            <p class="text-left"><?php the_sub_field('body_text'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl">
                <div class="text-left p-5 md:p-10 text-white form">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();