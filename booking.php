<?php
/**
 * Template Name: Booking
 *
 * The Frontpage of the Status Glo Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Status Glo
 * @since 1.0.0
 */

get_header(); ?>
<div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
  rgba(0, 150, 238, 0.45),
  rgba(0, 68, 216, 0.45)
), url('http://status-glo.local/wp-content/uploads/2021/09/Booking-Header.jpg') center center;
 height: 40vh;">
    <div class="content-middle text-white text-center">
        <h1 class="text-6xl md:text-7xl mb-3">Booking</h1>
    </div>
</div>

<div class="bg-white pb-10">
    <div class="mx-4 md:mx-10 lg:max-w-4xl lg:text-center lg:mx-auto pt-10">
        <div class="grid grid-cols-12">
            <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl mb-10">
                <div class="text-center p-10 text-white">
                    <h2 class="text-3xl text-left">Want to get booked?</h2>
                    <p class="text-left">We offer recurring clean, deep or detail clean, custom clean, packages, One-time and customized clean. Our professional cleaning technicians are experienced and trustworthy and will take care of any job with excellence. We want our clients to be happy and satisfied! Contact us for more information.</p>
                </div>
            </div>

            <div class="col-span-12 card-gradient-1 rounded-xl shadow-2xl">
                <div class="text-left p-10 text-white form">
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