<?php
/*
Template Name: Services page
*/
?>

 <?php get_header(); ?>
 
  <section class="services-page">
            <div class="row services-page-main">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <h1>Наши услуги</h1>
                    <hr>
                    <p>Мы разрабатываем сайты для компаний любого масштаба.
                        <br class="hidden-xs"> Просто выберите нужный Вам формат</p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul role="tablist" class="tabs hidden-xs" id="tabs">
                                <li role="presentation" class="active"> <a aria-controls="landing" href="#landing" data-toggle="tab">Лендинг пейдж</a>
                                </li>
                                <li role="presentation"> <a aria-controls="corporative" role="tab" href="#corporative" data-toggle="tab">Корпоративный сайт</a>
                                </li>
                                <li role="presentation"> <a aria-controls="catalogue" role="tab" href="#catalogue" data-toggle="tab">Сайт-каталог</a>
                                </li>
                                <li role="presentation"> <a aria-controls="store" role="tab" href="#store" data-toggle="tab">Интернет-магазин</a>
                                </li>
                            </ul>
                            <div class="visible-xs">
                                <ul role="tablist" class="tabs">
                                    <li role="presentation" class="dropdown">
                                        <a id="dLabel" class="dropdown-toggle custom-dropdown-toggle" href="#" data-toggle="dropdown" aria-controls="TabDrop">Лендинг пейдж<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu custom-dropdown-menu" role="menu" aria-labelledby="dLabel" id="TabDrop">
                                            <li><a aria-controls="landing" role="tab" data-toggle="tab" href="#landing">Лендинг пейдж</a></li>
                                            <li><a aria-controls="corporative" role="tab" data-toggle="tab" href="#corporative">Корпоративный сайт</a></li>
                                            <li><a aria-controls="catalogue" role="tab" data-toggle="tab" href="#catalogue">Сайт-каталог</a></li>
                                            <li><a aria-controls="store" role="tab" data-toggle="tab" href="#store">Интернет-магазин</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane row active services-page-description" id="landing" role="tabpanel">
                    <h2>Лендинг пейдж</h2>
                    <div class="col-xs-4 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-3 col-lg-offset-4 col-lg-2">
                        <p>
                            <span class="terms-price pre-top bold">сроки</span>
                            <br class="visible-xs">
                            <span class="terms-price after-top"> от 14 дней</span>
                            <br>
                            <span class="terms-price pre-bottom bold">цена</span>
                            <br class="visible-xs">
                            <span class="terms-price after-bottom less-1K">от 300$</span>
                        </p>
                    </div>
                    <div class="col-sm-4 vertical-line col-md-4 col-lg-3 col-xs-8">
                        <p>Одностраничный сайт</p>
                        <p>Панель управления</p>
                        <p>Индивидуальный дизайн</p>
                        <p>Домен и хостинг в подарок</p>
                    </div>
                </div>
                <div class="tab-pane row services-page-description" id="corporative" role="tabpanel">
                    <h2>корпоративный сайт</h2>
                    <div class="col-xs-4 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-3 col-lg-offset-4 col-lg-2">
                        <p>
                            <span class="terms-price pre-top bold">сроки</span>
                            <br class="visible-xs">
                            <span class="terms-price after-top"> от 30 дней</span>
                            <br>
                            <span class="terms-price pre-bottom bold">цена</span>
                            <br class="visible-xs">
                            <span class="terms-price after-bottom">от 1000$</span>
                        </p>
                    </div>
                    <div class="col-sm-4 vertical-line col-md-4 col-lg-3 col-xs-8">
                        <p>Одностраничный сайт</p>
                        <p>Панель управления</p>
                        <p>Индивидуальный дизайн</p>
                        <p>Домен и хостинг в подарок</p>
                    </div>
                </div>
                <div class="tab-pane row services-page-description" id="catalogue" role="tabpanel">
                    <h2>Сайт-каталог</h2>
                    <div class="col-xs-4 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-3 col-lg-offset-4 col-lg-2">
                        <p>
                            <span class="terms-price pre-top bold">сроки</span>
                            <br class="visible-xs">
                            <span class="terms-price after-top"> от 30 дней</span>
                            <br>
                            <span class="terms-price pre-bottom bold">цена</span>
                            <br class="visible-xs">
                            <span class="terms-price after-bottom">от 1200$</span>
                        </p>
                    </div>
                    <div class="col-sm-4 vertical-line col-md-4 col-lg-3 col-xs-8">
                        <p>Одностраничный сайт</p>
                        <p>Панель управления</p>
                        <p>Индивидуальный дизайн</p>
                        <p>Домен и хостинг в подарок</p>
                    </div>
                </div>
                <div class="tab-pane row services-page-description" id="store" role="tabpanel">
                    <h2>Интернет-магазин</h2>
                    <div class="col-xs-4 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-3 col-lg-offset-4 col-lg-2">
                        <p>
                            <span class="terms-price pre-top bold">сроки</span>
                            <br class="visible-xs">
                            <span class="terms-price after-top"> от 30 дней</span>
                            <br>
                            <span class="terms-price pre-bottom bold">цена</span>
                            <br class="visible-xs">
                            <span class="terms-price after-bottom">от 1500$</span>
                        </p>
                    </div>
                    <div class="col-sm-4 vertical-line col-md-4 col-lg-3 col-xs-8">
                        <p>Одностраничный сайт</p>
                        <p>Панель управления</p>
                        <p>Индивидуальный дизайн</p>
                        <p>Домен и хостинг в подарок</p>
                    </div>
                </div>
            </div>

            <div class="services-page-examples">
                <h2>Примеры</h2>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-2 col-lg-offset-3 img-group">
                        <a href="project-page.php">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/wm.jpg" alt="wm" class="img-responsive">
                            <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/wm-hover.jpg" alt="wm-hover">
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 img-group">
                        <a href="project-page2.php">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/forex.jpg" alt="forex" class="img-responsive">
                            <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/forex-hover.jpg" alt="forex-hover">
                        </a>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-2 col-lg-offset-0 img-group">
                        <a href="project-page3.php">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/ameria.jpg" alt="ameria" class="img-responsive">
                            <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/ameria-hover.jpg" alt="ameria-hover">
                        </a>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-2 col-lg-offset-3 img-group hidden-xs">
                        <a href="project-page4.php">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/front.jpg" alt="front" class="img-responsive">
                            <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/front-hover.jpg" alt="front-hover">
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <a href="all-projects-page.php" class="button button-black more-examples btn-more-info">Больше проектов</a>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
