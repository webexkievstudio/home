<?php
/**
 * index.php
 * @package WordPress
 * @subpackage Webex
 */
?>
    <?php get_header(); ?>
        <div class="col-lg-4  col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="lead-text">
                <p class="pre-main-title">Студия веб-дизайна</p>
                <h1 class="main-title bold"><?php the_title(); ?></h1>
                <hr class="white">
                <p>Мы - креативная студия дизайна в Киеве. Мы специализируемся на разработке веб-дизайна и визульной айдентики. Приглашаем Вас посмотреть наше портфолио.
                </p>
                <a class='button hidden-xs' href="#portfolio">Посмотреть портфолио</a>
                <a href="#portfolio" class="arrow-button"><i></i></a>
            </div>
        </div>
        </header>

        <!-- about us -->
        <div class="row about">
            <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="white-realm" id="portfolio">
                    <div class="container">
                        <h2>Портфолио</h2>
                        <hr class="black-bg">
                        <p>
                            Мы не просто создаем сайты. Мы решаем бизнес-задачи клиента. Приглашаем Вас посмореть примеры готовых продуктов.
                        </p>
                    </div>
                    <br class="hidden-xs">
                    <br class="hidden-xs">
                    <div class="swiper-container hidden-xs hidden-sm">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/usual.png" alt="portfolio">
                                <img class="img-responsive hidden-img" src="img/portfolioHover.png" alt="portfolio-hover">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/usual.png" alt="portfolio">
                                <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/portfolioHover.png" alt="portfolio-hover">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/usual.png" alt="portfolio">
                                <img class="img-responsive hidden-img" src="<?php bloginfo('template_url'); ?>/img/portfolioHover.png" alt="portfolio-hover">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="visible-sm visible-xs">
                        <div class="portfolio-static">
                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/project.png" alt="img-project">
                        </div>
                        <div class="portfolio-static">
                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/project.png" alt="img-project">
                        </div>
                        <div class="portfolio-static">
                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/project.png" alt="img-project">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <div class="breeds-xs">
                                <a class="button button-black button-full-width-xs btn-more-pj" href="all-projects-page.html">Больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="team" id="team">
                    <h2>Команда</h2>
                    <hr class="black-bg">
                    <div class="container">
                        <p>Мы - команда профессионалов, которые любят свою работу и получают удовольствие от совместной работы.
                        </p>
                    </div>
                    <br class="visible-xs">
                    <div class="row entire-team hidden-xs" id="entire-team">
                        <div class="col-lg-6 col-sm-6 col-md-6 photo" id="oleg">
                            <img class="img-responsive pull-right" src="<?php bloginfo('template_url'); ?>/img/oleg.jpg" alt="oleg">
                            <div class="about_person position-right">
                                <p class="name bold">Олег
                                    <br>Суворов</p>
                                <hr class="white">
                                <p class="position">Project Manager</p>
                                <a class="fb" href="https://www.facebook.com/oleg.suvorov">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 photo" id="andriy">
                            <img class="img-responsive pull-left" src="<?php bloginfo('template_url'); ?>/img/andrii.jpg" alt="andrii">
                            <div class="about_person position-left">
                                <p class="name bold">Андрей
                                    <br>Штыка</p>
                                <hr class="white">
                                <p class="position">UI/UX Design</p>
                                <a class="fb" href="https://www.facebook.com/andrii.shtyka.5">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 photo" id="vitaliy">
                            <img class="img-responsive pull-right" src="<?php bloginfo('template_url'); ?>/img/vetal.jpg" alt="vetal">
                            <div class="about_person position-right">
                                <p class="name bold">Виталий
                                    <br> Бесклубый</p>
                                <hr class="white">
                                <p class="position">Front-end Developer</p>
                                <a class="fb" href="https://www.facebook.com/profile.php?id=100005953996298">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 photo" id="alex">
                            <img class="img-responsive pull-left" src="<?php bloginfo('template_url'); ?>/img/sanya.jpg" alt="sanya">
                            <div class="about_person position-left">
                                <p class="name bold">Александр
                                    <br>Шпикуляк</p>
                                <hr class="white">
                                <p class="position">Back-end Developer</p>
                                <a class="fb" href="https://www.facebook.com/profile.php?id=100006135914765&fref=ts">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 photo" id="tetiana">
                            <img class="img-responsive pull-right" src="<?php bloginfo('template_url'); ?>/img/tanya.jpg" alt="tanya">
                            <div class="about_person position-right">
                                <p class="name bold">Татьяна
                                    <br>Карпенко</p>
                                <hr class="white">
                                <p class="position">Front-end Developer</p>
                                <a class="fb" href="https://www.facebook.com/profile.php?id=100005356337879">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-stack-1x fa-facebook"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 visible-xs swiper-customize-team">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/oleg.jpg" alt="oleg">
                                    <p class="name bold">Олег Суворов</p>
                                    <p class="position">Project Manager</p>
                                    <a class="fb-visible-xs" href="https://www.facebook.com/oleg.suvorov"> <span class="fa-stack fa-lg">
                             <i class="fa fa-circle fa-stack-2x"></i>
                             <i class="fa fa-stack-1x fa-facebook"></i>
                             </span></a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/andrii.jpg" alt="andreii">
                                    <p class="name bold">Андрей Штыка </p>
                                    <p class="position">UI/UX Designer</p>
                                    <a class="fb-visible-xs" href="https://www.facebook.com/andrii.shtyka.5"> <span class="fa-stack fa-lg">
                             <i class="fa fa-circle fa-stack-2x"></i>
                             <i class="fa fa-stack-1x fa-facebook"></i>
                             </span></a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/vetal.jpg" alt="vetal">
                                    <p class="name bold">Виталий Бесклубый</p>
                                    <p class="position">Front-end Developer</p>
                                    <a class="fb-visible-xs" href="https://www.facebook.com/profile.php?id=100005953996298">
                                        <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-1x fa-facebook"></i>
                                    </span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/sanya.jpg" alt="sanya">
                                    <p class="name bold">Александр Шпикуляк</p>
                                    <p class="position">Back-end Developer</p>
                                    <a class="fb-visible-xs" href="https://www.facebook.com/profile.php?id=100006135914765&fref=ts">
                                        <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-1x fa-facebook"></i>
                                    </span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/img/tanya.jpg" alt="tanya">
                                    <p class="name bold">Татьяна Карпенко</p>
                                    <p class="position">Front-end Developer</p>
                                    <a class="fb-visible-xs" href="https://www.facebook.com/profile.php?id=100005356337879">
                                        <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-stack-1x fa-facebook"></i>
                                    </span>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-8  col-sm-offset-2 col-xs-12">
                <div class="white-realm price-table" id="services">
                    <h2>Услуги и цены</h2>
                    <hr class="black-bg">
                    <div class="container">
                        <p>Мы разрабатываем сайты для компаний любого масштаба. Просто выберите нужный Вам формат.</p>
                        <hr class="greyHr visible-xs">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 breeds">
                                <h3>Лендинг пейдж</h3>
                                <p class="breedsDescr">Лучший способ запустить продажу товаров или услуг в интернете.</p>
                                <p class="price">от 30 дней
                                    <br> от 300$
                                    <br>
                                </p>
                                <a class="button button-black" href="">Заказать</a>
                            </div>
                            <hr class="greyHr visible-xs">
                            <div class="col-sm-6 col-xs-12 breeds">
                                <h3>Корпоративный сайт</h3>
                                <p class="breedsDescr">Ваше лицо в интернете. От него зависит имидж и визуальное восприятие компании.
                                </p>
                                <p class="price">от 30 дней
                                    <br> от 1000$
                                    <br>
                                </p>
                                <a class="button button-black" href="">Заказать</a>
                            </div>
                            <hr class="greyHr">
                            <div class="col-sm-6 col-xs-12 breeds">
                                <h3>Сайт-каталог</h3>
                                <p class="breedsDescr">Перенесите свой бизнес в онлайн среду. Покажите миру свой продукт.
                                </p>
                                <p class="price">от 30 дней
                                    <br> от 1200$
                                    <br>
                                </p>
                                <a class="button button-black" href="">Заказать</a>
                            </div>
                            <hr class="greyHr visible-xs">
                            <div class="col-sm-6 col-xs-12 breeds">
                                <h3>Интернет-магазин</h3>
                                <p class="breedsDescr">Продавайте товары в интернете. Выйдите на новый уровень прибыли.</p>
                                <p class="price">от 30 дней
                                    <br> от 1500$
                                    <br>
                                </p>
                                <a class="button button-black" href="">Заказать</a>
                            </div>
                            <hr class="greyHr">
                            <div class="container">
                                <p class="additional-text">За разработку адаптивной и мобильной версии +30% к цене</p>
                            </div>
                            <hr class="greyHr">
                            <div class="col-sm-6 col-sm-offset-3  col-xs-12 breeds">
                                <a class="button button-black btn-more-info" href="">Больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row descript">
                <br>
                <br>
                <div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12">
                    <h2 class="cost-title">Из чего состоит стоимость сайта?</h2>
                    <hr class="black-bg">
                    <p class="center">Качественный сайт - это работа профессионалов, которые вкладывают в сайт свое драгоценное время</p>
                    <hr class="hr-2 visible-xs">

                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 worker">
                            <h3>Copywriter</h3>
                            <p>Создает основной контент, наполняет сайт уникальной информацией.Он грамотно формулирует текстовый посыл, ориентированный на ЦА сайта.</p>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 worker">
                            <h3>UI/UX Design</h3>
                            <p>Разрабатывает визуальную оболочку сайта.Вначале создает прототип сайта, на основе которого рисует мокап для дальнейшей передачи его Front-end разработчику.</p>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 worker">
                            <h3>Front-end Developer</h3>
                            <p>Занимается верткой сайта, нарисованного веб-дизайнером.Проводит послудеющее тестирование продукта на различных платформах - от смартфонов до полноценных десктопов.</p>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 worker">
                            <h3>Back-end Developer</h3>
                            <p>Пишет содержательную часть сайта - прорабатывает логику взаимодействий его активных элементов.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 worker">
                            <h3>Project Manager</h3>
                            <p>Контролирует процесс разработки сайта на всех этапах. Взаимодействует между учасниками команды разработчиков. Контактирует с заказчиком от имени студии.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="contacts row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12">
                    <hr class="full-width gray-color" id="contacts">
                    <h2>Контакты</h2>
                    <hr class="black-bg">
                    <p class="center">Мы готовы создать условия для роста Вашего бизнеса в интернете. Позвоните нам.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
                            <h3>Закажите обратный звонок</h3>
                            <form id="phoneUs" method="POST">
                                <div class="form-group">
                                    <input type="tel" id="phoneUsClientPhone" placeholder="+__(___)___-__-__">
                                </div>
                                <div id="phoneUsControl">
                                    <div class="form-group">
                                        <input type="submit" value="Отправить" class="button button-black sendInfo" id="sendFormPhoneUs">
                                    </div>
                                </div>
                            </form>
                            <div class="hidden-xs">
                                <h3 class="mail-title">Почта</h3>
                                <a class="mail-text-hidden-xs" href="mailto:webex.kiev.ua@gmail.com">webex.kiev.ua@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 write-us">
                            <h3>Напишите нам</h3>
                            <form id="writeUs" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="writeUsClientName">Имя:</label>
                                    <input type="text" id="writeUsClientName" placeholder="Enter your name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="writeUsClientPhone">Телефон:</label>
                                    <input type="tel" id="writeUsClientPhone" placeholder="+__(___)___-__-__">
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
                            <br>
                            <div class="visible-xs">
                                <hr class="hr-2">
                                <h3>Почта</h3>
                                <a class="mail-text-visible-xs center-block" href="mailto:webex.kiev.ua@gmail.com">webex.kiev.ua@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <?php get_footer(); ?>
