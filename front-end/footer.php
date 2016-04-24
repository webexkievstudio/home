    <?php
/**
 * footer.php
 * @package WordPress
 * @subpackage Webex
 */
?>
<footer>
        <div class="container">
            <a class="upArr" id="upArr">
                <i class="fa fa-chevron-up"></i></a>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12  col-xs-12">
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
    <?php wp_footer(); ?>
</body>
</html>