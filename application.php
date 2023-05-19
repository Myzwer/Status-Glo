<?php
/**
 * Template Name: Application
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

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
          rgba(0, 150, 238, 0.25),
          rgba(0, 68, 216, 0.25)
        );">
        <div class="mx-4 md:mx-10 lg:max-w-6xl lg:mx-auto py-10">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="text-left p-5 md:p-10 text-black application">
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                    <p class = "text-sm text-gray-dark">This site is protected by reCAPTCHA and the Google
                        <a class = "underline" href="https://policies.google.com/privacy">Privacy Policy</a> and
                        <a class = "underline" href="https://policies.google.com/terms">Terms of Service</a> apply.
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
