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
    <div class="introductory__header--image">
        <section id="intro__section" class=" wrapper">
            <header class="site__header">

                <nav id="header__nav--fixed" class="intro__section--navbar">
                    <a class="intro__navbar--brand" href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hubbl-logo.png" width="124">
                    </a>

                    <ul class="intro__navbar--list">
                        <li class="navbar__list--items about-link"><span>About</span> </li>
                        <li class="navbar__list--items benefits-link"><span>Why HUBBL?</span> </li>
                        <li class="navbar__list--items contact-us"><span>Contact</span> </li>

                    </ul>
                </nav>

            </header>

            <main class="intro__section--main">
                <header class="intro__main--header">
                    <?php
                    if(have_posts()):

                    while(have_posts() ): the_post(); ?>

                        <h1 id="about"><?php the_title(); ?> </h1>
                        <p><?php the_content(); ?> </p>

                      <?php endwhile;
                    endif; ?>

                    <a class="button button--secondary benefits-button" role="button">Benefits</a>
                    <a class="purchase-button button button--primary" role="button">Purchase HUBBL</a>
                </header>
                <aside class="intro__article--aside">
                    <?php the_post_thumbnail(); ?>
                </aside>
            </main>
    </div>


    </section>
