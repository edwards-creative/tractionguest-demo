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

    <section id="introductory" class="introductory__background--image block">

        <div class="container">
            <!--START NAV BAR -->
            <nav class="introductory__nav--menu">
                <a class="nav__menu--brand" href="<?php echo esc_url( home_url( '/' )); ?>"> <img src="
                    <?php bloginfo('stylesheet_directory'); ?>/assets/img/hubbl-logo.png" width="124">
                </a>
                <ul class="nav__list">
                    <li class="nav__list--item"><a href="#" role="button"></a>Link 1</li>
                    <li class="nav__list--item"><a href="#" role="button"></a>Link 1</li>
                    <li class="nav__list--item"><a href="#" role="button"></a>Link 1</li>
                </ul>
                <a class="button nav__menu--button" href="#" role="button">Buy Now</a>
            </nav><!--END NAV BAR -->

            <!--START PRODUCT INTRODUCTORY -->
            <article class="introductory__post">
                <header class="introductory__post--article">

                    <?php
                        if(have_posts()):

                        while(have_posts() ): the_post(); ?>

                            <h1><?php the_title(); ?> </h1>
                            <p><?php the_content(); ?> </p>

                        <?php endwhile;
                        endif; ?>

                    <a class="button introductory__button--primary" href="#" role="button">Discover the Benefits</a>
                    <a class="button introductory__button--secondary" href="#" role="button">Contact Us</a>
                </header>

                <aside class="introductory--post-image">
                    <?php the_post_thumbnail(); ?>
                </aside>
            </article><!--START PRODUCT INTRODUCTORY -->
        </div>
    </section>
