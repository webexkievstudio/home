<?php
/**
 * index.php
 * @package WordPress
 * @subpackage Webex
 */
?>

    <?php get_header(); ?>
        <!-- MAIN TITLE-->
        <div class="row main-bg" id="main-bg">
            <div class="col-lg-4  col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="lead-text">
                    <p class="pre-main-title">Студия веб-дизайна</p>
                    <h1 class="main-title bold">WEBEX</h1>
                    <hr class="white-bg">
                    <p>Мы - креативная студия дизайна в Киеве. Мы специализируемся на разработке веб-дизайна и визульной айдентики. Приглашаем Вас посмотреть наше портфолио
                    </p>
                    <a class="button hidden-xs" href="#portfolio">Посмотреть портфолио</a>
                    <a class="arrow-button"><i></i></a>
                </div>
            </div>
        </div>
        <!-- END MAIN TITLE-->

        <!-- SECTION GREY-BG -->
        <section class="row grey-bg">
            <div class="col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                <!--PORTFOLIO-->
                <div class="portfolio" id="portfolio">
                    <div class="container-fluid">
                        <h2>Портфолио</h2>
                        <hr class="black-bg">
                        <p class="portfolio-text">
                            Мы не просто создаем сайты. Мы решаем бизнес-задачи клиента. Приглашаем Вас посмореть примеры готовых продуктов
                        </p>
                    </div>
                    <!-- PORTFOLIO SLIDER FOR LG-DEVICES-->
                    <div class="visible-lg">
                        <div class="portfolio-slider" id="portfolio-slider">
                            <div class="portfolio-slider-item">
                                <a href="project-page.html">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/common/wm.jpg" alt="wm">
                                    <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/wm-hover.jpg" alt="wm-hover">
                                </a>
                            </div>
                            <div class="portfolio-slider-item">
                                <a href="project-page3.html">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/common/ameria.jpg" alt="ameria">
                                    <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/ameria-hover.jpg" alt="ameria-hover">
                                </a>
                            </div>
                            <div class="portfolio-slider-item">
                                <a href="project-page2.html">
                                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/common/forex.jpg" alt="forex">
                                    <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/forex-hover.jpg" alt="forex-hover">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTFOLIO SLIDER FOR LG-DEVICES-->
                    <div class="hidden-lg">
                        <div class="portfolio-static-item">
                            <a href="project-page.html">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/common/wm2.png" alt="wm">
                                <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/wm2-hover.png" alt="wm-hover">
                            </a>
                        </div>
                        <div class="portfolio-static-item">
                            <a href="project-page3.html">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/common/ameria2.png" alt="ameria">
                                <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/ameria2-hover.png" alt="ameria-hover">
                            </a>
                        </div>
                        <div class="portfolio-static-item">
                            <a href="project-page2.html">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/common/forex2.png" alt="forex">
                                <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/common/forex2-hover.png" alt="forex-hover">
                            </a>
                        </div>
                    </div>
                    <div class="text-center pad-xs">
                        <a class="button button-black btn-more-info" href="all-projects-page.php">Больше проектов</a>
                    </div>
                </div>
            </div>
            <!-- END PORTFOLIO-->

            <!--TEAM-->
            <div class="col-lg-offset-4 col-lg-4 col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="team" id="team">
                    <h2>Команда</h2>
                    <hr class="black-bg">
                    <div class="container-fluid">
                        <p>Мы - команда профессионалов, которые любят свою работу и получают удовольствие от совместной работы
                        </p>
                    </div>
                    <br>
                    <div class="row entire-team hidden-xs">
                        <div class="col-lg-4 col-sm-6 team-item">
                            <img class="img-responsive pull-right" src="<?php bloginfo('template_url'); ?>/img/team-img/oleg.jpg" alt="oleg">
                            <div class="about-team-item position-right">
                                <p class="name bold">Олег
                                    <br>Суворов</p>
                                <hr class="white-bg">
                                <p class="position">Project Manager</p>
                                <a class="fb" href="https://www.facebook.com/oleg.suvorov">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 team-item">
                            <img class="img-responsive pull-left" src="<?php bloginfo('template_url'); ?>/img/team-img/andrii.jpg" alt="andrii">
                            <div class="about-team-item position-left">
                                <p class="name bold">Андрей
                                    <br>Штыка</p>
                                <hr class="white-bg">
                                <p class="position">UI/UX Design</p>
                                <a class="fb" href="https://www.facebook.com/andrii.shtyka.5">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 team-item">
                            <img class="img-responsive pull-right" src="<?php bloginfo('template_url'); ?>/img/team-img/vetal.jpg" alt="vetal">
                            <div class="about-team-item position-right">
                                <p class="name bold">Виталий
                                    <br> Бесклубый</p>
                                <hr class="white-bg">
                                <p class="position">Front-end Developer</p>
                                <a class="fb" href="https://www.facebook.com/profile.php?id=100005953996298">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 team-item">
                            <img class="img-responsive pull-left" src="<?php bloginfo('template_url'); ?>/img/team-img/sanya.jpg" alt="sanya">
                            <div class="about-team-item position-left">
                                <p class="name bold">Александр
                                    <br>Шпикуляк</p>
                                <hr class="white-bg">
                                <p class="position">Back-end Developer</p>
                                <a class="fb" href="https://www.facebook.com/profile.php?id=100006135914765&fref=ts">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 team-item">
                            <img class="img-responsive pull-right" src="<?php bloginfo('template_url'); ?>/img/team-img/tanya.jpg" alt="tanya">
                            <div class="about-team-item position-right">
                                <p class="name bold">Татьяна
                                    <br>Карпенко</p>
                                <hr class="white-bg">
                                <p class="position">Front-end Developer</p>
                                <a class="fb" href="https://www.facebook.com/profile.php?id=100005356337879">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-6 team-item">
                            <img class="img-responsive pull-left" src="<?php bloginfo('template_url'); ?>/img/team-img/anna.png" alt="anna">
                            <div class="about-team-item position-left">
                                <p class="name bold">Анна
                                    <br>Даник</p>
                                <hr class="white-bg">
                                <p class="position">QA Engineer</p>
                                <a class="fb" href="https://www.facebook.com/danykau">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- TEAM SLIDER FOR XS-DEVICES-->
                    <div class="col-xs-12 visible-xs team-slider">
                        <div class="team-slide-wrapper" id="team-slider">
                            <div class="team-slider-item">
                                <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/team-img/oleg.jpg" alt="oleg">
                                <p class="name bold">Олег Суворов</p>
                                <p class="position">Project Manager</p>
                                <a class="fb-visible-xs" href="https://www.facebook.com/oleg.suvorov"> <span class="fa-stack fa-lg">
                             <i class="fa fa-circle fa-stack-2x"></i>
                             <i class="fa fa-stack-1x fa-facebook"></i>
                             </span></a>
                            </div>
                            <div class="team-slider-item">
                                <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/team-img/andrii.jpg" alt="andreii">
                                <p class="name bold">Андрей Штыка </p>
                                <p class="position">UI/UX Designer</p>
                                <a class="fb-visible-xs" href="https://www.facebook.com/andrii.shtyka.5"> <span class="fa-stack fa-lg">
                             <i class="fa fa-circle fa-stack-2x"></i>
                             <i class="fa fa-stack-1x fa-facebook"></i>
                             </span></a>
                            </div>
                            <div class="team-slider-item">
                                <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/team-img/vetal.jpg" alt="vetal">
                                <p class="name bold">Виталий Бесклубый</p>
                                <p class="position">Front-end Developer</p>
                                <a class="fb-visible-xs" href="https://www.facebook.com/profile.php?id=100005953996298">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-1x fa-facebook"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="team-slider-item">
                                <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/team-img/sanya.jpg" alt="sanya">
                                <p class="name bold">Александр Шпикуляк</p>
                                <p class="position">Back-end Developer</p>
                                <a class="fb-visible-xs" href="https://www.facebook.com/profile.php?id=100006135914765&fref=ts">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-1x fa-facebook"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="team-slider-item">
                                <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/team-img/tanya.jpg" alt="tanya">
                                <p class="name bold">Татьяна Карпенко</p>
                                <p class="position">Front-end Developer</p>
                                <a class="fb-visible-xs" href="https://www.facebook.com/profile.php?id=100005356337879">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-1x fa-facebook"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="team-slider-item">
                                <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/team-img/anna.png" alt="anna">
                                <p class="name bold">Анна Даник</p>
                                <p class="position">QA Engineer</p>
                                <a class="fb-visible-xs" href="https://www.facebook.com/danykau">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-1x fa-facebook"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END TEAM SLIDER FOR XS-DEVICES-->
                </div>
            </div>
            <!--END TEAM-->

            <!--PRICE SERVICES-->
            <div class="col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="price-services" id="services">
                    <h2>Услуги и цены</h2>
                    <hr class="black-bg">
                    <div class="container-fluid">
                        <p>Мы разрабатываем сайты для компаний любого масштаба. Просто выберите нужный Вам формат</p>
                        <hr class="greyHr visible-xs">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 price-services-item">
                                <h3>Лендинг пейдж</h3>
                                <p class="price-services-item-descr">Лучший способ запустить продажу товаров или услуг в интернете.</p>
                                <p class="price">от 30 дней
                                    <br> от 300$
                                    <br>
                                </p>
                                <a class="button button-black" href="#contacts">Заказать</a>
                            </div>
                            <hr class="greyHr visible-xs">
                            <div class="col-sm-6 col-xs-12 price-services-item">
                                <h3>Корпоративный сайт</h3>
                                <p class="price-services-item-descr">Ваше лицо в интернете. От него зависит имидж и визуальное восприятие компании.
                                </p>
                                <p class="price">от 30 дней
                                    <br> от 1000$
                                    <br>
                                </p>
                                <a class="button button-black" href="#contacts">Заказать</a>
                            </div>
                            <hr class="greyHr">
                            <div class="col-sm-6 col-xs-12 price-services-item">
                                <h3>Сайт-каталог</h3>
                                <p class="price-services-item-descr">Перенесите свой бизнес в онлайн среду. Покажите миру свой продукт.
                                </p>
                                <p class="price">от 30 дней
                                    <br> от 1200$
                                    <br>
                                </p>
                                <a class="button button-black" href="#contacts">Заказать</a>
                            </div>
                            <hr class="greyHr visible-xs">
                            <div class="col-sm-6 col-xs-12 price-services-item">
                                <h3>Интернет-магазин</h3>
                                <p class="price-services-item-descr">Продавайте товары в интернете. Выйдите на новый уровень прибыли.</p>
                                <p class="price">от 30 дней
                                    <br> от 1500$
                                    <br>
                                </p>
                                <a class="button button-black" href="#contacts">Заказать</a>
                            </div>
                            <hr class="greyHr">
                            <div class="container-fluid">
                                <p class="additional-text">за разработку адаптивной и мобильной версии +30% к цене</p>
                            </div>
                            <hr class="greyHr">
                            <div class="text-center pad-xs">
                                <a class="button button-black btn-more-info" href="services-page.php">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END PRICE SERVICES-->
        </section>
        <!-- END SECTION GREY-BG-->

        <!-- SECTION POSITION-DESCRIPT -->
        <section class="container-fluid">
            <div class="row position-descript">
                <div class="col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                    <h2 class="cost-title">Из чего состоит стоимость сайта?</h2>
                    <hr class="black-bg">
                    <p class="text-center">Качественный сайт - это работа профессионалов, которые вкладывают в разработку продукта весь свой профессионализм и драгоценное время</p>
                    <hr class="hr-2 visible-xs">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-xs-12 position-item">
                            <h3>Copywriter</h3>
                            <p>Создает основной контент, наполняет сайт уникальной информацией. Он грамотно формулирует текстовый посыл, ориентированный на ЦА сайта.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 position-item">
                            <h3>UI/UX Design</h3>
                            <p>Разрабатывает визуальную оболочку сайта. Вначале создает прототип сайта, на основе которого рисует мокап для дальнейшей передачи его Front-end разработчику.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 position-item hidden-lg">
                            <h3>Back-end Developer</h3>
                            <p>Пишет содержательную часть сайта - прорабатывает логику взаимодействий его активных элементов.
                            </p>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 position-item">
                            <h3>Project Manager</h3>
                            <p>Контролирует процесс разработки сайта на всех этапах. Взаимодействует между учасниками команды разработчиков. Контактирует с заказчиком от имени студии.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 position-item visible-lg">
                            <h3>Back-end Developer</h3>
                            <p>Пишет содержательную часть сайта - прорабатывает логику взаимодействий его активных элементов.
                            </p>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 position-item">
                            <h3>Front-end Developer</h3>
                            <p>Занимается верткой сайта, нарисованного веб-дизайнером. Проводит послудеющее тестирование продукта на различных платформах - от смартфонов до полноценных десктопов.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12 position-item">
                            <h3>QA Engineer</h3>
                            <p>Специалист по обеспечению качества, деятельность которого направленна на улучшение процесса разработки ПО, предотвращение дефектов и выявление ошибок в работе продукта.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION POSITION-DESCRIPTION -->

        <!-- SECTION CONTACTS-->
        <section class="container-fluid">
            <div class="contacts row">
                <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                    <hr class="full-width gray-color" id="contacts">
                    <h2>Контакты</h2>
                    <hr class="black-bg">
                    <p class="center">Мы готовы создать условия для роста Вашего бизнеса в интернете. Позвоните или напишите нам</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-sm-offset-1">
                            <h3>Закажите обратный звонок</h3>
                            <!--FORM PHONE US-->
                            <form id="phoneUs" method="POST">
                                <div class="form-group">
                                    <input type="tel" id="phoneUsClientPhone" placeholder="+" required="required">
                                </div>
                                <div id="phoneUsControl">
                                    <div class="form-group">
                                        <input type="submit" value="Отправить" class="button button-black sendInfo" id="sendFormPhoneUs">
                                    </div>
                                </div>
                            </form>
                            <!--END FORM PHONE US-->
                            <div class="hidden-xs">
                                <h3 class="mail-title">Почта</h3>
                                <a class="mail-text-hidden-xs" href="mailto:webex.kiev.ua@gmail.com">webex.kiev.ua@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-offset-2 write-us">
                            <hr class="visible-xs hr-2">
                            <h3>Напишите нам</h3>
                            <!--FORM WRITE US-->
                            <form id="writeUs" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="writeUsClientName">Имя:</label>
                                    <input type="text" id="writeUsClientName" placeholder="Enter your name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="writeUsClientPhone">Телефон:</label>
                                    <input type="tel" id="writeUsClientPhone" placeholder="+">
                                </div>
                                <div class="form-group">
                                    <label for="writeUsClientMail">E-mail:</label>
                                    <input type="email" id="writeUsClientMail" placeholder="abd123@gmail.com" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="writeUsClientInquiry">Запрос:</label>
                                    <textarea id="writeUsClientInquiry" rows="1" required="required"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" id="addFileInput" class="addFileInput">
                                </div>
                                <div id="writeUsControl">
                                    <div class="form-group">
                                        <input type="submit" value="Отправить" class="button button-black pull-left sendInfo" id="sendFormWriteUs">
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM PHONE US-->
                            <div class="visible-xs mail-vb-xs-block">
                                <hr class="hr-2">
                                <h3>Почта</h3>
                                <a class="mail-text-visible-xs center-block" href="mailto:webex.kiev.ua@gmail.com">webex.kiev.ua@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACTS-->
        </div>
        <!-- END CONTAINER FLUID-->

        <?php get_footer(); ?>
