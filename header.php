<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hubbl Link. Contactless Future</title>
        <?php wp_head(); ?>

    <!-- DOCUMENT METAS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    </head>

    <body <?php body_class(array('hubble-brand')); ?>>

    <header id="introductory" class="introductory--background-image ">

        <div class="container">
            <nav class="introductory--nav-menu">
                <a class="nav-menu--brand" href="<?php echo esc_url( home_url( '/' )); ?>"> <img src="
                    <?php bloginfo('stylesheet_directory'); ?>/assets/img/hubbl-logo.png" width="124">
                </a>
                <a class="button nav-menu--button" href="#" role="button">Buy Now</a>
            </nav>

            <article class="introductory--post">
                <?php
                    if(have_posts()):

                        while(have_posts() ): the_post(); ?>
                            <h1><?php the_title(); ?> </h1>
                            <p class="introductory--post-paragraph"> <?php the_content(); ?> </p>

                        <?php endwhile;
                    endif; ?>

                    <a class="button introductory--button-primary" href="#" role="button">Discover the Benefits</a>
                    <a class="button introductory--button-secondary" href="#" role="button">Contact Us</a>
            </article>

                <aside class="introductory--post-image">
                    <?php the_post_thumbnail(); ?>
                </aside>


        </div>
    </header>

        <!-- <?php wp_nav_menu(array('theme_location'=>'primary')); ?> -->
        <!-- <?php wp_nav_menu(array('theme_location'=>'secondary')); ?> -->
