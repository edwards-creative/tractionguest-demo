<?php get_header(); ?>

<section id="endorsements">
    <!-- START BENEFITS SECTION -->
    <div class="wrapper">
        <article class="endorsememnts__article">
            <hr>
            <ul class="endorsements__list padding-top">
                <li class="endorsements__list--item">
                    <img src="
                        <?php bloginfo('stylesheet_directory'); ?>/assets/img/business-co-logo.png" width="215">
                </li>
                <li class="endorsements__list--item">
                    <img src="
                        <?php bloginfo('stylesheet_directory'); ?>/assets/img/fancy-co-logo.png" width="184">
                </li>
                <li class="endorsements__list--item">
                    <img src="
                        <?php bloginfo('stylesheet_directory'); ?>/assets/img/hubble-buzz-logo.png" width="186">
                </li>
            </ul>
            <hr>
        </article>
    </div><!-- SECTION wrapper -->
</section><!-- END ENDORSEMENTS SECTION -->

<!-- START BENEFITS SECTION -->
    <section id="benefits">
        <!-- START BENEFITS SECTION -->
        <div class="wrapper">
        <article class="benefits__article">
            <header class="article__header--light">
                <h2 id="benefits-section">The Most Advanced Data Storage Device</h2>
            </header>
            <ul class="benefits__list">
            <div id="card" class="benefits__list--card portable-card">
                <li class="benefits__list--item">
                    <h4>Completely Portable</h4>
                    <i class="fas fa-wallet"></i>
                    <p>With the same form factor as a credit card you can store HUBBL in your wallet.</p>
                    <span>▼</span>
                </li>
            </div>
            <div class="benefits__list--card">
                <li class="benefits__list--item lightning-card">
                    <h4>Lightning Fast Transfers</h4>
                    <i class="fas fa-bolt"></i>
                    <p>Transfer data instantly with our patented light-speed technology.</p>
                    <span>▼</span>
                </li>
            </div>
            <div class="benefits__list--card">
                <li class="benefits__list--item solar-card">
                    <h4>Solar Charged</h4>
                    <i class="fas fa-sun"></i>
                    <p>Harness the power of the sun to charge within minutes.</p>
                    <span>▼</span>
                </li>
            </div>
            </ul>
        </article>
        </div><!-- SECTION wrapper -->
    </section><!-- END BENEFITS SECTION -->

<section id="features">
    <!-- START BENEFITS SECTION -->
    <div class="wrapper">
    <article class="features__article">
        <span class="features__article--image portable">
        </span>
        <!-- PORTABLE FEATURE -->
        <div id="portable-feature" class="features__article--header">
            <h3 class="article__header--light">Data In Your Pocket</h3>
            <p>Since HUBBL's the same size as a normal credit card, you'll  be able to take your data with you wherever you go.</p>
            <div class="features__list--item">
                <p><i class="fas fa-check"></i>Extremely Portable</p>
                <p><i class="fas fa-check"></i>Fits in your Pocket</p>
            </div>
        </div>

        <!-- LIGHTNING FAST FEATURE -->
        <div id="lightning-feature" class="features__article--header">
            <h3 class="article__header--light">Transfer At Light Speed</h3>
            <p>HUBBL makes it easy to transfer data over the cloud, beyond that, transfers happen almost instantaneously. No more waiting.</p>
            <div class="features__list--item">
                <p><i class="fas fa-check"></i>Extremely Portable</p>
                <p><i class="fas fa-check"></i>Fits in your Pocket</p>
            </div>
        </div>
        <span class="features__article--image light-speed">
        </span>
        <!-- SOLAR POWERED -->
        <span id="solar-feature" class="features__article--image solar-power">
        </span>
        <div class="features__article--header">
            <h3 class="article__header--light">Transfer At Light Speed</h3>
            <p>Since HUBBL's the same size as a normal credit card, you'll  be able to take your data with you wherever you go.</p>
            <div class="features__list--item">
                <p><i class="fas fa-check"></i>Extremely Portable</p>
                <p><i class="fas fa-check"></i>Fits in your Pocket</p>
            </div>
        </div>

    </article>
    </div><!-- SECTION wrapper -->
</section>

<?php // TODO: ADD PRICING SECTION ?>


<section id="contact-form">
    <header class="article__header--light">
        <h2>Get In Touch To Learn More</h2>
    </header>
    <form name="contact-form" method="post" class="contact-form" action="thank_you.php">
        <input name="name" type="text" placeholder="Name *" required>
        <input name="email" type="text" value="" placeholder="Email *" required>
        <textarea name="message" rows="8" cols="50" placeholder="Message"></textarea>
            <input type="submit" class="button button--primary"></input>
    </form>
</section>



















<?php get_footer(); ?>
