<?php
/**
 * Created by PhpStorm.
 * User: gregbueno
 * Date: 11/9/14
 * Time: 10:44 AM
 */

namespace ObservantRecords\WordPress\Themes\PenziasAndWilson;

use ObservantRecords\WordPress\Themes\ObservantRecords2015\TemplateTags;

?>
        </div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dark_balcony-half.jpg" class="bg" />

    </div>

    <div id="footer">
        <div class="container">
            <footer class="row">
                <nav id="footer-column-1" class="col-md-6">
                    <ul id="nav-social">
                        <li><a href="http://twitter.com/PenziasWilson"><img src="<?php echo TemplateTags::get_cdn_uri(); ?>/web/images/icons/twitter.png" alt="[Twitter]" title="[Twitter]" /></a></li>
                        <li><a href="http://www.facebook.com/PenziasAndWilson"><img src="<?php echo TemplateTags::get_cdn_uri(); ?>/web/images/icons/facebook.png" alt="[Facebook]" title="[Facebook]" /></a></li>
                        <li><a href="http://soundcloud.com/observantrecords"><img src="<?php echo TemplateTags::get_cdn_uri(); ?>/web/images/icons/soundcloud.png" alt="[SoundCloud]" title="[SoundCloud]" /></a></li>
                        <li><a href="http://youtube.com/user/observantrecords"><img src="<?php echo TemplateTags::get_cdn_uri(); ?>/web/images/icons/youtube.png" alt="[YouTube]" title="[YouTube]" /></a></li>
                    </ul>

                    <p>
                        &copy <?php echo date('Y'); ?> Observant Records
                    </p>

                    <p>
                        <a href="<?php echo esc_url( __( 'http://wordpress.org/', WP_TEXT_DOMAIN ) ); ?>"><?php printf( __( 'Proudly powered by %s', WP_TEXT_DOMAIN ), 'WordPress' ); ?></a>
                    </p>
                </nav>

                <section id="footer-column-3" class="col-md-6">
                    <h3>See also ...</h3>

                    <?php $info_menu_args = array( 'theme_location' => 'footer-info', 'items_wrap' => '<ul id="%1$s" class="%2$s links">%3$s</ul>' ); ?>
                    <?php if ( function_exists( 'bootstrap_page_menu' ) ) { $info_menu_args[ 'fallback_cb' ] = 'bootstrap_page_menu'; } ?>
                    <?php wp_nav_menu( $info_menu_args ); ?>
                </section>
            </footer>
        </div>
    </div>

	<?php wp_footer(); ?>

</body>
</html>