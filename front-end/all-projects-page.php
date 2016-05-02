<?php
/*
Template Name: All projects
*/
?>

    <?php get_header(); ?>
        </header>

        <section class="services-page">
            <div class="row services-page-main">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <h1><?php the_title(); ?></h1>
                    <hr>
                    <p>Мы не просто создаем сайты. Мы решаем бизнес-задачи клиента.
                        <br class="hidden-xs"> Приглашаем Вас посмотреть примеры готовых проектов</p>
                </div>
            </div>

            <div class="services-page-examples">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-2 col-lg-offset-3 img-group">
                        <a href="project-page.html">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/wm.jpg" alt="wm" class="img-responsive">
                            <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/wm-hover.jpg" alt="wm-hover">
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 img-group">
                        <a href="project-page2.html">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/forex.jpg" alt="forex" class="img-responsive">
                            <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/forex-hover.jpg" alt="forex-hover">
                        </a>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-2 col-lg-offset-0 img-group">
                        <a href="project-page3.html">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/ameria.jpg" alt="ameria" class="img-responsive">
                            <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/ameria-hover.jpg" alt="ameria-hover">
                        </a>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-2 col-lg-offset-3 img-group hidden-xs">
                        <a href="project-page4.html">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/front.jpg" alt="front" class="img-responsive">
                            <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/front-hover.jpg" alt="front-hover">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        </div>

        <?php get_footer(); ?>
