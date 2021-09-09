<?php
/**
 * Template Name: 404 Error
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

    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6 text-center">
            <div class="mb-20 md:text-left md:mx-10">
                <div class="my-11 mx-auto">
                    <i class="fas fa-broom text-5xl"></i>
                </div>

                <p class="md:mt-10">404 Error</p>
                <h1 class="uppercase text-2xl md:text-5xl md:mb-10">Page Not Found</h1>
                <p class = "mb-5">We cleaned up and this page got swept up! ¯\_(ツ)_/¯</p>
                <a href="/frontpage"
                   class="bg-orange rounded-full font-bold shadow-xl text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover">
                    Back to Homepage
                </a>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="inline-background" style="background: linear-gradient(
              rgba(0, 0, 0, 0),
              rgba(0, 0, 0, 0)
            ), url('http://status-glo.local/wp-content/uploads/2021/09/404-Side.jpg') no-repeat top center scroll;
              height: 80vh;">
            </div>
        </div>
    </div>

<?php get_footer();
