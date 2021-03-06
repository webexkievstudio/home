<?php
/**
 * footer.php
 * @package WordPress
 * @subpackage Webex
 */
?>
    <!-- FOOTER-->
    <footer>
        <div class="container-fluid">
            <a class="upArr" id="upArr">
                <i class="fa fa-angle-up"></i></a>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-xs-12">
                    <h2>WEBEX</h2>
                    <?php $args = array(
'theme_location' => 'bottom',
'container'=> false,
'menu_id' => '',
'menu_class' => 'footer-navigation hidden-xs'
);
wp_nav_menu($args); ?>
                        <hr class="full-width">
                        <span>@2016 Webex</span>
                        <a class="pull-right behance" href="https://www.behance.net/andrii_shtyka"><i class="fa fa-behance" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER-->

    <?php wp_footer(); ?>
        </body>

        </html>
