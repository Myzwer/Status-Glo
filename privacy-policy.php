<?php
/**
 * Template Name: Privacy Policy
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
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


    <div class="m-4 md:m-10 lg:max-w-4xl lg:mx-auto privacy-policy">
        <div class="grid grid-cols-12 gap-4">
	        <div class="col-span-12 p-5">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			else: ?>
                <p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
	        </div>
        </div>
    </div>


<?php get_footer();
