<div class="wrapper">
    <section id="footer__section">
        <footer class="site__footer">
            <hr>
        <nav class="footer__section--navbar">
            <div class="footer__section--brand">
                <a class="footer__navbar--brand" href="<?php echo esc_url( home_url( '/' )); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hubbl-logo-muted-min.png" width="104">
                </a>
                <small>© Edwards Creative <?php echo date("Y"); ?></small>
            </div>
            <div class="footer__social">
                    <h4>Let's connect</h4>
                <ul class="footer__social--list">
                    <li class="social__list ldin"><a href="https://www.linkedin.com/in/jonathan-edwards-96921648" target="_blank"></a> </li>
                    <li class="social__list git"><a href="https://github.com/edwards-creative/tractionguest-demo" target="_blank"></a> </li>
                    <li class="social__list tw"><a href="#" target="_blank"></a> </li>
                </ul>
            </div>
        </nav>
        </footer>
</div>

</section>
<?php wp_footer(); ?>
    </body>
</html>
