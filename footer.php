        </main>
        <footer>
            <div class="footer-column-1">
                <div class="half-block">
                    <h4>PSCORE</h4>
                    <p><?php _e("PSCORE recognized the dire situation that North Korean refugees are placed in once they escape. PSCORE strives to ensure that north Korean refugees and defectors are given the well-being and lives that they rightfully deserve."); ?></p>
                </div>
                <div class="half-block">
                    <h4><?php _e("Join us"); ?></h4>
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/PscoreKorea" alt="Our Facebook"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/pscore911" alt="Our Twitter"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/pscorekorea" alt="Our Twitter"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="http://pscore.bigcartel.com" alt="Buy our products"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-column-3">
                <div class="footer-up-left-aside">
                    <h4><?php _e("Community"); ?></h4>
                    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                </div>
                <div class="footer-up-right-aside">
                    <h4><?php _e("Recent entries"); ?></h4>
                    <div class="footer-recent-entries">
                        <?php
                            $args = array( 'numberposts' => '3' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                echo '<div class="footer-recent-entry"><a href="'.get_permalink($recent["ID"]).'">'
                                    . $recent["post_title"].'</a>
                                    <p>'.$recent["post_excerpt"].'</p>
                                    <span>'. __("Posted by ").get_userdata($recent["post_author"])->get("display_name").'</span>
                                    </div>';
                            }
                        ?>
                    </div>
                </div>
                <div class="footer-bottom">
                    <h4><?php _e("Contact"); ?></h4>
                    <div class="footer-contact">
                        <ul class="footer-bottom-left">
                            <li><i class="fa fa-home"></i><?php _e("452 Yangcheon-ro, Gangseo-gu, Seoul, Republic of Korea"); ?></li>
                            <li><i class="fa fa-envelope"></i>pscore@pscore.org</li>
                            <li><i class="fa fa-phone"></i>+82-2-6497-5035(5770)</li>
                        </ul>
                        <iframe class="footer-map" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=452+Yangcheon-ro%2C+Gangseo-gu%2C+Seoul&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://use.fontawesome.com/63056bd236.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>


