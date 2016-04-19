<?php
/**
 * header.php
 * @package WordPress
 * @subpackage Webex
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php wp_title( '|', true, 'right' ); ?>
        </title>
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        <nav id="uncol-menu" class="toggle-menu hidden-sm hidden-md hidden-lg ">
            <img src="<?php bloginfo('template_url'); ?>/img/close-menu.png" class="pull-right close-menu" id="close-menu" alt="close-menu">
            <p class="bold">Меню</p>
            <br>

<?php $args = array(
'theme_location' => 'toggle-menu',
'container'=> false,
'menu_id' => '',
'menu_class' => ''
);
wp_nav_menu($args); ?>
        </nav>
        <div class="container">
            <header class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 top">
                    <nav class="static-menu">
                        <div class="logo-in-nav bold"><a href="#">Webex</a></div>
                        <div id="open-menu" class="bars visible-xs"><i class="fa fa-bars"></i></div>
<?php $args = array(
'theme_location' => 'top',
'container'=> false,
'menu_id' => 'menu',
'menu_class' => 'menu bold'
);
wp_nav_menu($args);?>
 </nav>
                </div>
