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
<div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
  rgba(0, 150, 238, 0.45),
  rgba(0, 68, 216, 0.45)
), url('http://status-glo.local/wp-content/uploads/2021/09/Contact-Header.jpg') center center;
 height: 40vh;">
    <div class="content-middle text-white text-center">
        <h1 class="text-6xl md:text-7xl mb-3">Contact</h1>
    </div>
</div>

<div class="bg-white pb-10">
    <div class="mx-4 md:mx-10 lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl mb-10">
                <div class="text-center p-10 text-white">
                    <h2 class="text-3xl text-left">How To Get Booked?</h2>
                    <p class="text-left">You can contact us or use the form to get in touch. If you’re interested in
                        booking head over to our booking page to get a quote!</p>
                    <a href=""
                       class="bg-orange rounded-full font-bold shadow-xl text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-orange-hover mt-10">
                        Book Now
                    </a>
                </div>
            </div>

            <div class="col-span-12 md:col-span-8 card-gradient-1 rounded-xl shadow-2xl">
                <div class="text-left p-10 text-white form">
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
                    <div class="col-span-12">
                        <div class="card-gradient-1 rounded-xl shadow-2xl">
                            <div class="text-left p-10 text-white">
                                <h2 class="text-3xl text-left">Get In Touch</h2>
                                <p class="text-left"><i class="fas fa-phone text-xl"></i> 123-456-7890</p>
                                <p class="text-left"><i class="far fa-envelope text-xl"></i> admin@statusglo.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        <div class="card-gradient-1 rounded-xl shadow-2xl">
                            <div class="text-left p-10 text-white">
                                <h2 class="text-3xl text-left">Careers</h2>
                                <p class="text-left font-bold leading-5">Contact us about becoming an employee by using form or email us at:</p>
                                <p class="text-left"><i class="far fa-envelope"></i> admin@statusglo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
